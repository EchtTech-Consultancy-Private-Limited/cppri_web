<?php

namespace App\Http\Controllers\CMSControllers;

use App\Http\Controllers\Controller;


use App\Models\CMSModels\EventsManagement;
use Illuminate\Http\Request;
use DB;

class EventsManagementController extends Controller
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
        $crudUrlTemplate['list'] = route('event-list');
        $crudUrlTemplate['edit'] = route('event.edit', ['id' => 'xxxx']);
        $crudUrlTemplate['delete'] = route('event-delete', ['id' => 'xxxx']);
        //$crudUrlTemplate['view'] = route('websitecoresetting.websitecoresetting-list');

        return view('cms-view.events-management.event_list',
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
        $crudUrlTemplate['create_event'] = route('event-save');

        return view('cms-view.events-management.event_add',
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
     * @param  \App\Models\EventsManagement  $eventsManagement
     * @return \Illuminate\Http\Response
     */
    public function show(EventsManagement $eventsManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EventsManagement  $eventsManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $crudUrlTemplate['update'] = route('event-update');
        $crudUrlTemplate['deletepdfimg'] = route('pdf-delete');

        $results = EventsManagement::where('uid', $request->id)->first();
        $pdfimagesData = DB::table('events_details')->where('events_id', $results->uid)->where([['soft_delete','=','0']])->get();
        if($results){
            $result = $results;
        }else{
            abort(404);
        }
        //dd($result);
        return view('cms-view.events-management.event-edit',
        ['crudUrlTemplate' =>  json_encode($crudUrlTemplate),
            'data'=> $result,
            'pdfData' => isset($pdfimagesData)?$pdfimagesData:'',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EventsManagement  $eventsManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventsManagement $eventsManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EventsManagement  $eventsManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventsManagement $eventsManagement)
    {
        //
    }
}
