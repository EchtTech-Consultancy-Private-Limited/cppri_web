<?php

namespace App\Http\Controllers\CMSControllers;

use App\Http\Controllers\Controller;


use App\Models\CMSModels\TenderManagement;
use Illuminate\Http\Request;
use DB;

class TenderManagementController extends Controller
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
        $crudUrlTemplate['list'] = route('tender-list');
        $crudUrlTemplate['edit'] = route('tender.edit', ['id' => 'xxxx']);
        $crudUrlTemplate['delete'] = route('tender-delete', ['id' => 'xxxx']);
        //$crudUrlTemplate['view'] = route('websitecoresetting.websitecoresetting-list');

        return view('cms-view.tenders-management.tenders_list',
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
        $crudUrlTemplate['create_tender'] = route('tender-save');

        return view('cms-view.tenders-management.tenders_add',
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
     * @param  \App\Models\TenderManagement  $tenderManagement
     * @return \Illuminate\Http\Response
     */
    public function show(TenderManagement $tenderManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TenderManagement  $tenderManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $crudUrlTemplate['update_tender'] = route('tender-update');
        $crudUrlTemplate['deletepdfimg'] = route('pdf-delete');

        $results=DB::table('tender_management')->where('uid',$request->id)->where([['soft_delete','=','0']])->first();
        $pdfData = DB::table('tender_details')->where('tender_id',$results->uid)->where([['soft_delete','=','0']])->get();
        if($results){
            $result = $results;
        }else{
            abort(404);
        }
        return view('cms-view.tenders-management.tenders_edit',
        ['crudUrlTemplate' =>  json_encode($crudUrlTemplate),
        'data'=> $result,
        'pdfData' => isset($pdfData)?$pdfData:'',
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TenderManagement  $tenderManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TenderManagement $tenderManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TenderManagement  $tenderManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(TenderManagement $tenderManagement)
    {
        //
    }
}
