<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getSearchData(Request $request)
    {
        $keyword = $request->search_key;
        $databaseName = env('DB_DATABASE');
        $tables = DB::select("SHOW TABLES FROM $databaseName");
        $finalArray = collect();

        foreach ($tables as $table) {
            $tableName = current($table);
            $searchResults = [];

            if (Schema::hasColumns($tableName, ['title_name_en', 'title_name_hi', 'description_en', 'description_hi'])) {
                $searchResults = array_merge($searchResults, DB::table($tableName)->where('title_name_en', 'like', '%' . $keyword . '%')
                    ->orWhere('title_name_hi', 'like', '%' . $keyword . '%')
                    ->orWhere('description_en', 'like', '%' . $keyword . '%')
                    ->orWhere('description_hi', 'like', '%' . $keyword . '%')
                    ->get()->toArray());
            }

            if (Schema::hasColumns($tableName, ['page_title_en', 'page_title_hi', 'meta_tag_description'])) {
                $searchResults = array_merge($searchResults, DB::table($tableName)->where('page_title_en', 'like', '%' . $keyword . '%')
                    ->orWhere('page_title_hi', 'like', '%' . $keyword . '%')
                    ->orWhere('meta_tag_description', 'like', '%' . $keyword . '%')
                    ->get()->toArray());
            }

            foreach ($searchResults as $item) {
                if (isset($item->title_name_en) || isset($item->page_title_en)) {
                    $finalArray->push([
                        'table' => $tableName ?? '',
                        'title' => $item->title_name_en ?? $item->page_title_en,
                        'description' => $item->description_en ?? $item->meta_tag_description,
                    ]);
                } elseif (isset($item->title_name_hi) || isset($item->page_title_hi)) {
                    $finalArray->push([
                        'table' => $tableName ?? '',
                        'title' => $item->title_name_hi ?? $item->page_title_hi,
                        'description' => $item->description_hi ?? $item->meta_tag_description,
                    ]);
                }
            }
        }

        // Paginate the final array
        $perPage = 10; // Change 10 to the number of items per page you want
        $currentPage = \Illuminate\Pagination\Paginator::resolveCurrentPage() ?? 1;

        // Use the collect function to create a collection
        $finalCollection = collect($finalArray);

        $currentItems = $finalCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $paginatedItems = new \Illuminate\Pagination\LengthAwarePaginator(
            $currentItems,
            $finalCollection->count(),
            $perPage,
            $currentPage
        );
        // dd($paginatedItems);
        return view('pages.search', ['data' => $paginatedItems]);
    }

}
