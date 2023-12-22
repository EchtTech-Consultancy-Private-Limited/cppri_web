<?php

namespace App\Http\Controllers;

use App;
use  Route, DB, Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home');
    }

    //language
    public function SetLang(Request $request)
    {
        //dd($request->data);
        session()->put('Lang', $request->data);
        App::setLocale($request->data);
        return response()->json(['data' => $request->data, True]);
    }


    public function contactUs(){
        return view('pages.contact-us');
    }

    public function getContentAllPages(Request $request, $slug)
    {
        // dd($slug);
        try {
            $menus = DB::table('website_menu_management')->whereurl($slug)->first();

            if ($menus != '') {
                
                if ($menus?->parent_id != 0) {
                    $sideMenu = DB::table('website_menu_management')->wherename_en($menus->name_en)->first('parent_id');
                    $sideMenuParent = DB::table('website_menu_management')->whereuid($sideMenu->parent_id)->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->first();
                    $sideMenuChild = DB::table('website_menu_management')->whereparent_id($sideMenuParent->uid)->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();
                }

                if (Session::get('Lang') == 'hi') {
                    $title_name = $menus->name_hi;
                } else {
                    $title_name = $menus->name_en;
                }

                $dynamic_content_page_metatag = DB::table('dynamic_content_page_metatag')
                    ->where('soft_delete', 0)
                    ->where('menu_uid', $menus->uid)
                    ->orderBy('sort_order', 'ASC')
                    ->get();

                if (count($dynamic_content_page_metatag) > 0) {

                    $organizedData = [];

                    foreach ($dynamic_content_page_metatag as $dynamic_content_page_metatags) {

                        $dynamic_content_page_pdf = DB::table('dynamic_content_page_pdf')
                            ->wheredcpm_id($dynamic_content_page_metatags->uid)
                            ->where('soft_delete', 0)
                            ->get();

                        $dynamic_page_banner = DB::table('dynamic_page_banner')
                            ->where('soft_delete', 0)
                            ->wheredcpm_id($dynamic_content_page_metatags->uid)
                            ->first();

                        $dynamic_content_page_gallery = DB::table('dynamic_content_page_gallery')
                            ->wheredcpm_id($dynamic_content_page_metatags->uid)
                            ->where('soft_delete', 0)
                            ->get();

                        $dynamic_page_content = DB::table('dynamic_page_content')
                            ->wheredcpm_id($dynamic_content_page_metatags->uid)
                            ->where('soft_delete', 0)
                            ->first();

                        $organizedData = [
                            'metatag' => $dynamic_content_page_metatags,
                            'content' => $dynamic_page_content,
                            'pdf' => $dynamic_content_page_pdf,
                            'gallery' => $dynamic_content_page_gallery,
                            'banner' => $dynamic_page_banner,
                        ];
                    }

                    if ($menus?->parent_id != 0) {
                        $sideMenu = DB::table('website_menu_management')->wherename_en($menus->name_en)->first('parent_id');
                        $sideMenuParent = DB::table('website_menu_management')->whereuid($sideMenu->parent_id)->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->first();
                        $sideMenuChild = DB::table('website_menu_management')->whereparent_id($sideMenuParent->uid)->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();
                    } else {
                        $sideMenuParent = "";
                        $sideMenuChild = [];
                    }

                    $quickLink = DB::table('website_menu_management')->where('menu_place', 4)->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();
                  
                    return view('master-page', ['quickLink' => $quickLink, 'title_name' => $title_name, 'organizedData' => $organizedData, 'sideMenuChild' => $sideMenuChild, 'sideMenuParent' => $sideMenuParent]);
                } else {

                   
                    if (Session::get('Lang') == 'hi') {
                        $content = "जल्द आ रहा है";
                    } else {
                        $content = "Coming Soon...";
                    }
                    // dd($menus);
                    return view('master-page', ['content' => $content, 'title_name' => $title_name,'sideMenuChild'=>$sideMenuChild]);
                }
            } else {
                return abort(404);
            }
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return abort(404);
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return abort(404);
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return abort(404);
        }
    }
    public function directorDesk()
    {

        try {

            $designation = DB::table('emp_depart_designations')
                ->where('name_en', 'LIKE', 'Director')
                ->where('soft_delete', 0)
                ->orderBy('short_order', 'ASC')
                ->first();

            if ($designation != '') {

                $Director = DB::table('employee_directories')
                    ->where('designation_id', $designation->uid)
                    ->where('soft_delete', 0)
                    ->orderBy('short_order', 'ASC')
                    ->first();

                //  dd($Director);



                return view('pages.directorDesk', ['Director' => $Director]);
            } else {

                if (Session::get('Lang') == 'hi') {
                    $content = "जल्द आ रहा है";
                } else {
                    $content = "Coming Soon...";
                }
                // dd($menus);
                return view('pages.directorDesk', ['content' => $content]);
            }
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return abort(404);
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return abort(404);
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return abort(404);
        }
    }

    public function employeeDirectory()
    {

        try {
            $designationData = [];

            $department = DB::table('emp_depart_designations')
                ->where('soft_delete', 0)
                ->orderBy('short_order', 'ASC')
                ->whereparent_id(0)
                ->get();

            if (Count($department) > 0) {

                foreach ($department as $designation) {
            
                    $data = DB::table('employee_directories as emp')
                        ->select('emp.*', 'desi.name_en as desi_name_en', 'desi.name_hi as desi_name_hi')
                        ->join('emp_depart_designations as desi', 'emp.designation_id', '=', 'desi.uid')
                        ->where('emp.soft_delete', 0)
                        ->where('department_id', $designation->uid)
                        ->orderBy('emp.short_order', 'ASC')
                        ->get();

                    $designationData[] = [
                        'department' => $designation,
                        'data' => $data,
                    ];
                }
              
                $sortedDesignationData = collect($designationData)->sortBy('department.short_order')->values()->all();

                return view('pages.employeeDirectory', ['sortedDesignationData' => $sortedDesignationData]);
            } else {

                if (Session::get('Lang') == 'hi') {
                    $content = "जल्द आ रहा है";
                } else {
                    $content = "Coming Soon...";
                }
                // dd($menus);
                return view('pages.employeeDirectory', ['content' => $content]);
            }
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return abort(404);
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return abort(404);
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return abort(404);
        }
    }
}
