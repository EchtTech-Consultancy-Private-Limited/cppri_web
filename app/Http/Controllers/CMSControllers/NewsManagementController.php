<?php

namespace App\Http\Controllers\CMSControllers;

use App\Http\Controllers\Controller;


use App\Models\CMSModels\NewsManagement;
use Illuminate\Http\Request;
use DB;

class NewsManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crudUrlTemplate = array();
        // xxxx to be replaced with ext_id to create valid endpoint
        $crudUrlTemplate['list'] = route('news-list');
        $crudUrlTemplate['edit'] = route('news.edit', ['id' => 'xxxx']);
        $crudUrlTemplate['delete'] = route('news-delete', ['id' => 'xxxx']);
        //$crudUrlTemplate['view'] = route('websitecoresetting.websitecoresetting-list');

        return view('cms-view.news-management.news_list',
            ['crudUrlTemplate' =>  json_encode($crudUrlTemplate)
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crudUrlTemplate['create_news'] = route('news-save');

        return view('cms-view.news-management.news_add',
          ['crudUrlTemplate' =>  json_encode($crudUrlTemplate)
    
         ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsManagement  $newsManagement
     * @return \Illuminate\Http\Response
     */
    public function show(NewsManagement $newsManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsManagement  $newsManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $crudUrlTemplate['update'] = route('news-update');
        $crudUrlTemplate['deletepdfimg'] = route('pdf-delete');

        $results = NewsManagement::where('uid', $request->id)->first();
        $pdfimagesData = DB::table('news_details')->where('news_id', $results->uid)->where([['soft_delete','=','0']])->get();
        if($results){
            $result = $results;
        }else{
            abort(404);
        }
        //dd($result);
        return view('cms-view.news-management.news_edit',
        ['crudUrlTemplate' =>  json_encode($crudUrlTemplate),
        'data'=> $result,
        'pdfData' => isset($pdfimagesData)?$pdfimagesData:'',
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsManagement  $newsManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsManagement $newsManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsManagement  $newsManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsManagement $newsManagement)
    {
        //
    }
}
