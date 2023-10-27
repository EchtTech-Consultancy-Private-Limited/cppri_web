<?php

namespace App\Http\Controllers\CMSControllers;

use App\Http\Controllers\Controller;


use App\Models\CMSModels\SystemLogs;
use Illuminate\Http\Request;

class SystemLogsController extends Controller
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
        $crudUrlTemplate['list'] = route('aut-list');
        $crudUrlTemplate['edit'] = route('aut-edit', ['id' => 'xxxx']);
        $crudUrlTemplate['delete'] = route('aut-delete', ['id' => 'xxxx']);
        //$crudUrlTemplate['view'] = route('websitecoresetting.websitecoresetting-list');

        return view('cms-view.audit-trail.list',
        ['crudUrlTemplate' => json_encode($crudUrlTemplate)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\SystemLogs  $systemLogs
     * @return \Illuminate\Http\Response
     */
    public function show(SystemLogs $systemLogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SystemLogs  $systemLogs
     * @return \Illuminate\Http\Response
     */
    public function edit(SystemLogs $systemLogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SystemLogs  $systemLogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SystemLogs $systemLogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SystemLogs  $systemLogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(SystemLogs $systemLogs)
    {
        //
    }
}
