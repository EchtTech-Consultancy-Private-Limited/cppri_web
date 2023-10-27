<?php

namespace App\Http\Controllers\CMSControllers\API;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;
use App\Models\CMSModels\RolesAndPermission;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use DB, Validator;
use Carbon\Carbon;

class RolesAndPermissionAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function permissionIndex()
    {
        $data=DB::table('roles_and_permissions')->where('soft_delete','0')->get();
        $totalRecords = DB::table('roles_and_permissions')->where('soft_delete','0')->count();
        $resp = new \stdClass;
        $resp->iTotalRecords = $totalRecords;
        $resp->iTotalDisplayRecords = $totalRecords;
        $resp->aaData = $data;
        if($resp)
            {
                return response()->json($resp,200);
            }
            else{
                return response()->json([
                'status'=>201,
                'message'=>'some error accoured.'
            ],201);
        }
    }

    public function index()
    {
        $data=RolesAndPermission::where('soft_delete','0')->get();
        $totalRecords = RolesAndPermission::where('soft_delete','0')->count();
        $resp = new \stdClass;
        $resp->iTotalRecords = $totalRecords;
        $resp->iTotalDisplayRecords = $totalRecords;
        $resp->aaData = $data;
        if($resp)
            {
                return response()->json($resp,200);
            }
            else{
                return response()->json([
                'status'=>201,
                'message'=>'some error accoured.'
            ],201);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $exitValue = RolesAndPermission::where('google_link', $request->google_link)->count() > 0;
        // $max_size = $document->getMaxFileSize() / 1024 / 1024;
         if($exitValue == 'false'){
             $notification =[
                 'status'=>201,
                 'message'=>'This is duplicate value.'
             ];
         }else{
            try{
                $validator=Validator::make($request->all(),
                    [
                    'google_link'=>'required|unique:RolesAndPermission',
                    'linkedin'=>'required',
                    'facebook'=>'required',
                ]);
                if($validator->fails())
                {
                    //$status = 201;
                    $notification =[
                        'status'=>201,
                        'message'=> $validator->errors()
                    ];
                }
                else{
                    $result= RolesAndPermission::insert([
                            'uid' => Uuid::uuid4(),
                            'google_link' => $request->google_link,
                            'linkedin' => $request->linkedin,
                            'facebook' => $request->facebook,
                            'twitter' => isset($request->twitter)?$request->twitter:'0',
                            'instagram' => isset($request->instagram)?$request->instagram:'0',
                            'github' => isset($request->github)?$request->github:'0',
                        ]);
                if($result == true)
                {
                    $notification =[
                        'status'=>200,
                        'message'=>'Added successfully.'
                    ];
                }
                else{
                    $notification = [
                            'status'=>201,
                            'message'=>'some error accoured.'
                        ];
                    } 
                }      
            }catch(Throwable $e){report($e);
                return false;
            }
        }
        return response()->json($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(RolesAndPermissions $RolesAndPermissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=RolesAndPermission::where('uid',$id)->first();
      if($data)
            {
                return response()->json(['data'=>$data],200);
            }
            else{
                return response()->json([
                'status'=>201,
                'message'=>'some error accoured.'
            ],201);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data=RolesAndPermission::where('uid',$id)->first();
        if($data)
        {
         $validator=Validator::make($request->all(),
            [
            'google_link'=>'required',
            'linkedin'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'github'=>'required'
        ]);
        if($validator->fails())
        {
            $notification =([
                'status'=>201,
                'message'=> $validator->errors()
            ]);
        }
        else{
            $result= RolesAndPermission::where('uid',$id)->update([
                    'uid' => Uuid::uuid4(),
                    'google_link' => $request->google_link,
                    'linkedin' => $request->linkedin,
                    'facebook' => $request->facebook,
                    'twitter' => $request->twitter,
                    'instagram' => $request->instagram,
                    'github' => $request->github,
                ]);
            
        if($result == true)
        {
            $notification =[
                'status'=>200,
                'message'=>'Added successfully.'
            ];
        }
        else{
            $notification = ([
                'status'=>201,
                'message'=>'some error accoured.'
            ]);
            } 
        }
        return response()->json($notification);
       }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=RolesAndPermission::where('uid',$id)->first();
        if($data)
        {
            RolesAndPermission::where('uid',$id)->update(['soft_delete'=>1]);
            return response()->json([
                'status'=>200,
                'message'=>'deleted successfully.'
            ],200);
        }
        else{
            return response()->json([
                'status'=>201,
                'message'=>'some error accoured.'
            ],201);
        }
    }


    public function permissionAdd(Request $request){
		$data=$request->all();
		$arr=$this->generateData($data);
		foreach ($arr as $list) {
			//$num_rows=RolesAndPermission::number_rows('tlb_access_permission',array("module_name"=>$list['module_name'],"employee_id"=>$data['emp_id']),"num_row");
			$wordlist = DB::table('roles_and_permissions')->where(["module_name"=>$list['module_name'],"role_id"=>explode(',',$data['role_name'])[0]])->get();
            $num_rows = $wordlist->count();
            if($num_rows == 0){
				$list['role_id']=explode(',',$data['role_name'])[0];  
				$list['role_name']=explode(',',$data['role_name'])[1];  
				//$flag=RolesAndPermission::insert($list,"tlb_access_permission");
            $flag= DB::table('roles_and_permissions')->insert($list);
			}else{
				//print_r($data);die;
				$list['role_id']=explode(',',$data['role_name'])[0];
				$list['role_name']=explode(',',$data['role_name'])[1];
				//$flag=RolesAndPermission::update_by_where($list,"tlb_access_permission",array('employee_id'=>$data['emp_id'],'module_name'=>$list['module_name']));
            $flag= DB::table('roles_and_permissions')->where('uid',$id)->update([
                    'uid'=>Uuid::uuid4(),
                    'module_name'=>$list['module_name'],
                ]);
			}
		}  
		
		if ($flag) {
			$data = array('responce' => 'success', 'message' => 'Record added Successfully');
		} else {
			$data = array('responce' => 'error', 'message' => 'Failed to add record');
		}
		echo json_encode($data);
	}
	private function generateData($data){
		$arr=array();
		$i=0; 
		foreach($data['module_name'] as $key=>$val){
               // dd($data['module_name']);
			$arr[$i]['module_name']=$data['module_name'][$key];
            $arr[$i]['uid']= Uuid::uuid4();
			if(!empty($data['delete'][$key])){
			  $arr[$i]['delete']=$data['delete'][$key];
			}else{
				$arr[$i]['delete']='N';
			}
			if(!empty($data['update'][$key])){
				$arr[$i]['update']=$data['update'][$key];
			 }else{
				 $arr[$i]['update']='N';
			 }
			if(!empty($data['read'][$key])){
			   $arr[$i]['view']=$data['read'][$key];
			}else{
				$arr[$i]['view']='N';
			}
            if(!empty($data['read'][$key])){
                $arr[$i]['read']=$data['read'][$key];
             }else{
                 $arr[$i]['read']='N';
             }
			if(!empty($data['create'][$key])){
			   $arr[$i]['create']=$data['create'][$key];
			}else{
				$arr[$i]['create']='N';
			}
             if(!empty($data['approver'][$key])){
				$arr[$i]['approver']=$data['approver'][$key];
			 }else{
				 $arr[$i]['approver']='N';
			 }
             if(!empty($data['publisher'][$key])){
				$arr[$i]['publisher']=$data['publisher'][$key];
			 }else{
				 $arr[$i]['publisher']='N';
			 }
             if(!empty($data['publisher'][$key])){
				$arr[$i]['publisher']=$data['publisher'][$key];
			 }else{
				 $arr[$i]['publisher']='N';
			 }
			$i++;
		}  
		return $arr;
	  }
}
