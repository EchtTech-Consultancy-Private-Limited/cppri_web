<?php

namespace App\Http\Controllers\CMSControllers;

use App\Http\Controllers\Controller;


use App\Models\CMSModels\RolesAndPermission;
use Illuminate\Http\Request;
use DB;

class RolesAndPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissionIndex()
    {
        $crudUrlTemplate = array();
        // xxxx to be replaced with ext_id to create valid endpoint
        $crudUrlTemplate['list'] = route('news-list');
        $crudUrlTemplate['edit'] = route('news-edit', ['id' => 'xxxx']);
        $crudUrlTemplate['delete'] = route('news-delete', ['id' => 'xxxx']);
        //$crudUrlTemplate['view'] = route('websitecoresetting.websitecoresetting-list');

        return view('cms-view.roles-and-permission.permission_list',
            ['crudUrlTemplate' =>  json_encode($crudUrlTemplate)
        
        ]);
    }

    public function roleIndex()
    {
        $crudUrlTemplate = array();
        // xxxx to be replaced with ext_id to create valid endpoint
        $crudUrlTemplate['list'] = route('news-list');
        $crudUrlTemplate['edit'] = route('news-edit', ['id' => 'xxxx']);
        $crudUrlTemplate['delete'] = route('news-delete', ['id' => 'xxxx']);
        //$crudUrlTemplate['view'] = route('websitecoresetting.websitecoresetting-list');
        
        $typeUserName=DB::table('role_type_users')->select('*')->where([['soft_delete','=','0']])->get();
        $datas = [];
        foreach($typeUserName as $typeUserNames){
            $newData = new \stdClass;
            $newData->roleTypeName = $typeUserNames;
            $modulePermission=DB::table('roles_and_permissions')->select('*')->where([['role_id','=',$typeUserNames->uid]])->where([['soft_delete','=','0']])->get();
            if($modulePermission){
                $newData->permissionAllow = $modulePermission;
            }
            $datas[] = $newData;
        }
        $objectpass = new \stdclass;
        $objectpass->permissionAllows = $datas;

        return view('cms-view.roles-and-permission.role-list',['permissionAllow' =>$objectpass ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRoles()
    {
        $crudUrlTemplate['create-role'] = route('role-save');

        $moduleName=DB::table('module_management')->select('name_en','name_hi','uid')->where([['soft_delete','=','0']])->orderby('sort_order','Asc')->get();
        $roleType=DB::table('role_type_users')->select('role_type','uid')->where([['soft_delete','=','0']])->orderby('uid','Asc')->get();
        
        return view('cms-view.roles-and-permission.role-add',
          ['crudUrlTemplate' =>  json_encode($crudUrlTemplate),
           'module'=>$moduleName,
           'roleType' =>$roleType
    
         ]);
    }
    public function createPermission()
    {
        return view('cms-view.roles-and-permission.role-add');
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
     * @param  \App\Models\RolesAndPermission  $rolesAndPermission
     * @return \Illuminate\Http\Response
     */
    public function show(RolesAndPermission $rolesAndPermission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RolesAndPermission  $rolesAndPermission
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $crudUrlTemplate['update'] = route('headerLogo-save');

       $datas = RolesAndPermission::where('uid',$request->id)->first();
       
        if(isset($datas)){
            $data = $datas;
        }else{
            abort(404);
        }
        return view('cms-view.roles-and-permission.role-add',
        [
            'crudUrlTemplate' =>  json_encode($crudUrlTemplate),
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RolesAndPermission  $rolesAndPermission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RolesAndPermission $rolesAndPermission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RolesAndPermission  $rolesAndPermission
     * @return \Illuminate\Http\Response
     */
    public function destroy(RolesAndPermission $rolesAndPermission)
    {
        //
    }
}
