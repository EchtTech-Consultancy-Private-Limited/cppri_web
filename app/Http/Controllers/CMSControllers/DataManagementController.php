<?php

namespace App\Http\Controllers\CMSControllers;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Ramsey\Uuid\Uuid;
use DB;

class DataManagementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public function FeedbackIndex()
    {
        $crudUrlTemplate = array();
        // xxxx to be replaced with ext_id to create valid endpoint
        $crudUrlTemplate['list'] = route('dm-list-feedback');
        //$crudUrlTemplate['edit'] = route('');
       // $crudUrlTemplate['delete'] = route('');
        //$crudUrlTemplate['view'] = route('websitecoresetting.websitecoresetting-list');

        return view('cms-view.commonPages.feedback-list',
            ['crudUrlTemplate' =>  json_encode($crudUrlTemplate)
        
        ]);
    }
    public function contactUSIndex()
    {
        $crudUrlTemplate = array();
        // xxxx to be replaced with ext_id to create valid endpoint
        $crudUrlTemplate['list'] = route('dm-list-contactus');
        //$crudUrlTemplate['edit'] = route('dm-list-contactus');
        //$crudUrlTemplate['delete'] = route('dm-list-contactus');
        //$crudUrlTemplate['view'] = route('websitecoresetting.websitecoresetting-list');

        return view('cms-view.commonPages.contactus-list',
            ['crudUrlTemplate' =>  json_encode($crudUrlTemplate)
        
        ]);
    }
    /**
     * Store analytics data.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
    }
}