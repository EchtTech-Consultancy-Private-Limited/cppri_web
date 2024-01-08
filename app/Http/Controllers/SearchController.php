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
    $Databasename = env('DB_DATABASE');
    $table = "SHOW TABLES FROM  $Databasename";
    $Dbtable = DB::select($table);
    $dataarray = [];
    foreach ($Dbtable as $t) {
      $colums = "SHOW COLUMNS FROM $t->Tables_in_cppri_db";
      // dd($colums);
      $Dbcolum = DB::select($colums);
      foreach ($Dbcolum as $c) {
        if (DB::table($t->Tables_in_cppri_db)->where($c->Field, 'LIKE', '%' . $keyword . '%')->exists()) {
          $data = DB::table($t->Tables_in_cppri_db)->where($c->Field, 'LIKE', '%' . $keyword . '%')->get();
          foreach ($data as $r) {
            if (isset($r->page_title_en)) {
              array_push(($dataarray), $r->page_title_en);
            }
            if (isset($r->title_name_en)) {
              array_push($dataarray, $r->title_name_en);
            }
            if (isset($r->description_en)) {
              array_push($dataarray, $r->description_en);
            }
            if (isset($r->page_content_en)) {
              array_push($dataarray, $r->page_content_en);
            }
            if (isset($r->question_en)) {
              array_push($dataarray, $r->question_en);
            }
            if (isset($r->answer_en)) {
              array_push($dataarray, $r->answer_en);
            }
          }
        }
      }
    }
    $actual = array_values(array_unique($dataarray));
    return view('pages.search', ['data' => $actual]);
  }
}
