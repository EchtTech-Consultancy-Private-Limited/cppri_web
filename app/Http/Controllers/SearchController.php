<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\SiteSearchResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Symfony\Component\Finder\SplFileInfo;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function getSearchData(Request $request)
    {
        //  dd($request->all());
        $keyword = $request->search_key;
        $databaseName = env('DB_DATABASE');
        $tables = DB::select("SHOW TABLES FROM $databaseName");
        $finalArray = [];

        foreach ($tables as $table) {
            $tableName = current($table);

            if (Schema::hasColumns($tableName, ['title_name_en', 'title_name_hi', 'description_en', 'description_hi'])) {
                $searchResults = DB::table($tableName)
                    ->where('title_name_en', 'like', '%' . $keyword . '%')
                    ->orWhere('title_name_hi', 'like', '%' . $keyword . '%')
                    ->orWhere('description_en', 'like', '%' . $keyword . '%')
                    ->orWhere('description_hi', 'like', '%' . $keyword . '%')
                    ->get();

                foreach ($searchResults as $result) {
                    if ($result->title_name_en) {
                        $finalArray[] = [
                            'table_name' => $tableName,
                            'title' => $result->title_name_en,
                            'description' => $result->description_en,
                        ];
                    }
                }
            }
        }
        // dd($finalArray);
        return view('pages.search', ['data' => $finalArray]);
    }
}
