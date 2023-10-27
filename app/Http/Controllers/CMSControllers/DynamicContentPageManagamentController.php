<?php

namespace App\Http\Controllers\CMSControllers;

use App\Http\Controllers\Controller;


use App\Models\CMSModels\DynamicContentPageManagament;
use App\Models\CMSModels\WebsiteMenuManagement;
use Illuminate\Http\Request;
use DB;

class DynamicContentPageManagamentController extends Controller
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
        $crudUrlTemplate['list'] = route('pagemetatag-list');
        $crudUrlTemplate['edit'] = route('contentpage.edit', ['id' => 'xxxx']);
        $crudUrlTemplate['delete'] = route('pagemetatag-delete', ['id' => 'xxxx']);
        //$crudUrlTemplate['view'] = route('pagemetatag-list');

        //dd($crudUrlTemplate);
        return view('cms-view.dynamic-content-page-managament.content-page-list',
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
        $crudUrlTemplate['create_pagemetatag'] = route('pagemetatag-save');
        $crudUrlTemplate['create_pagecontent'] = route('pagecontent-save');
        $crudUrlTemplate['create_pagegallery'] = route('pagegallery-save');
        $crudUrlTemplate['create_pagepdf'] = route('pagepdf-save');

        $pageTitle = DB::table('dynamic_content_page_metaTag')->select('uid','page_title_en','page_title_hi')->where([['soft_delete','=','0']])->get();
        $menu=WebsiteMenuManagement::select('name_en','name_hi','url','uid')->where([['soft_delete','=','0']])->get();
        
        return view('cms-view.dynamic-content-page-managament.content-page-add',
        ['crudUrlTemplate' =>  json_encode($crudUrlTemplate), 'pageTitle'=>$pageTitle,'menuName'=>$menu
    
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
     * @param  \App\Models\DynamicContentPageManagament  $dynamicContentPageManagament
     * @return \Illuminate\Http\Response
     */
    public function show(DynamicContentPageManagament $dynamicContentPageManagament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DynamicContentPageManagament  $dynamicContentPageManagament
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $crudUrlTemplate['update_pagemetatag'] = route('cpi-update');
        $crudUrlTemplate['update_pagecontent'] = route('cpi-content-update');
        $crudUrlTemplate['update_pagegallery'] = route('cpi-gallery-update');
        $crudUrlTemplate['update_pagepdf'] = route('cpi-pdf-update');
        $crudUrlTemplate['deletepdfimg'] = route('pdfimg-delete');


        $pageTitle = DB::table('dynamic_content_page_metaTag')->select('uid','page_title_en','page_title_hi')->where([['soft_delete','=','0']])->get();
        $menu=WebsiteMenuManagement::select('name_en','name_hi','url','uid')->where([['soft_delete','=','0']])->get();
        

        $metacontent=DB::table('dynamic_content_page_metaTag')->select('*')->where('uid', $request->id)->where('soft_delete','0')->get();
        
        foreach($metacontent as $metacontents){
            
            $newData = new \stdclass;
            $newData->pageTitle = $metacontents;
                $content_page= DB::table('dynamic_page_content')->where('dcpm_id',$metacontents->uid)->where('soft_delete','0')->get();
                if($content_page){
                    $newData->content_page = $content_page;
                }

               $content_pdf= DB::table('dynamic_content_page_pdf')->where('dcpm_id',$metacontents->uid)->where('soft_delete','0')->get();
                if($content_pdf){
                    $newData->content_pdf = $content_pdf;
                }
                $content_gallery= DB::table('dynamic_content_page_gallery')->where('dcpm_id',$metacontents->uid)->where('soft_delete','0')->get();
                if($content_gallery){
                    $newData->content_gallery = $content_gallery;
                }
           $datas[] = $newData;
        }
        if(!empty($datas)){
            $datas1 = $datas;
        }else{
            abort(404);
        }
        $objectpass = new \stdclass;
        $objectpass->pageContent = $datas1;
        //dd($objectpass);
        return view('cms-view.dynamic-content-page-managament.content-page-edit',
        ['crudUrlTemplate' =>  json_encode($crudUrlTemplate),'data'=> $objectpass,'pageTitle'=>$pageTitle,'menuName'=>$menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DynamicContentPageManagament  $dynamicContentPageManagament
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DynamicContentPageManagament $dynamicContentPageManagament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DynamicContentPageManagament  $dynamicContentPageManagament
     * @return \Illuminate\Http\Response
     */
    public function destroy(DynamicContentPageManagament $dynamicContentPageManagament)
    {
        //
    }
}
