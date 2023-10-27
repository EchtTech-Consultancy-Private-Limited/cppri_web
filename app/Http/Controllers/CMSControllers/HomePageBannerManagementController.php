<?php

namespace App\Http\Controllers\CMSControllers;

use App\Http\Controllers\Controller;


use App\Models\CMSModels\HomePageBannerManagement;
use Illuminate\Http\Request;
use DB;

class HomePageBannerManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crudUrlTemplate = array();
        // xxxx to be replaced with ext_id to create valid endpoint
        $crudUrlTemplate['list'] = route('banner-list');
        $crudUrlTemplate['edit'] = route('homebanner.edit', ['id' => 'xxxx']);
        $crudUrlTemplate['delete'] = route('banner-delete', ['id' => 'xxxx']);
        //$crudUrlTemplate['view'] = route('websitecoresetting.websitecoresetting-list');

        return view('cms-view.home-page-banner-management.homepagebanner-list',
            ['crudUrlTemplate' => json_encode($crudUrlTemplate)
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $crudUrlTemplate['create_banner'] = route('banner-save');

        return view('cms-view.home-page-banner-management.homepagebanner-add',
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
     * @param  \App\Models\HomePageBannerManagement  $homePageBannerManagement
     * @return \Illuminate\Http\Response
     */
    public function show(HomePageBannerManagement $homePageBannerManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomePageBannerManagement  $homePageBannerManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $crudUrlTemplate['update'] = route('banner-update');

        $results = DB::table('home_page_banner_management')->where('uid', $request->id)->first();
        if($results){
            $result = $results;
        }else{
            abort(404);
        }
        return view('cms-view.home-page-banner-management.homepagebanner-edit',
        ['crudUrlTemplate' =>  json_encode($crudUrlTemplate),
            'data'=> $result,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomePageBannerManagement  $homePageBannerManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePageBannerManagement $homePageBannerManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomePageBannerManagement  $homePageBannerManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePageBannerManagement $homePageBannerManagement)
    {
        //
    }
}
