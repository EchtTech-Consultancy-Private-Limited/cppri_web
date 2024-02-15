<?php

namespace App\Http\Controllers;

use App;
use  Route, DB, Session, Schema, Cookie, Closure;
use Illuminate\Http\Request;
use App\Models\contactUs;
use App\Models\feedback;
use Illuminate\Support\Facades\Http;
use App\Http\Helpers\CustomCaptcha;

class HomeController extends Controller
{
    public function index()
    {
        $titleName = 'Home';
        return view('home', ['title' => $titleName]);
    }

    //language
    public function SetLang(Request $request)
    {
        session()->put('Lang', $request->data);
        App::setLocale($request->data);
        return response()->json(['data' => $request->data, True]);
    }

    //career
    public function careerData()
    {
        $titleName = 'Career';
        $final_data = [];
        try {
           $uuids= DB::table('career_management_details')
            ->where('status', 3)
            ->where('soft_delete', 0)
            ->whereDate('archivel_date', '>=', now()->toDateString())
            ->get()->pluck('career_management_id');

            $career = DB::table('career_management')
                ->where('status', 3)
                ->where('soft_delete', 0)
                ->whereIn('uid',$uuids)
                ->latest('created_at')
                ->get();

                foreach($career as $c){
                    $obj = new \stdClass;
                    $obj->career= $c;
                    $obj->career->career_doc =  DB::table('career_management_details')
                    ->where('status', 3)
                    ->where('soft_delete', 0)
                    ->where('career_management_id', $c->uid)
                    ->whereDate('archivel_date', '>=', now()->toDateString())
                    ->latest('created_at')
                    ->get();

                    $final_data[] = $obj;                    
                }
                // dd($final_data);
            return view('pages.career', ['title' => $titleName, 'final_data' => $final_data]);
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return view('pages.error');
        }
    }

    public function careerArchive()
    {
        $titleName = 'Career Archive';
        try {

            $career = DB::table('career_management')
                ->where('status', 3)
                ->orderBy('start_date', 'desc')
                ->where('soft_delete', 0)
                ->get();

            $final_data = [];

                if($career && count($career) > 0){
                    foreach($career as $c){
                        $obj = new \stdClass;
                        $obj->career= $c;
                        $obj->career->career_doc =  DB::table('career_management_details')
                        ->where('status', 3)
                        ->orderBy('start_date', 'desc')
                        ->where('soft_delete', 0)
                        ->where('career_management_id', $c->uid)
                        ->whereDate('archivel_date', '<', now()->toDateString())
                        ->get();

                        $final_data[] = $obj;                    
                    }
                }
                // dd($final_data);
            return view('pages.careerArchive', ['title' => $titleName, 'final_data' => $final_data]);
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return view('pages.error');
        }
    }

    //tender
    public function tenderData()
    {
        $titleName = 'Tender';
        try {
            $tenderData = [];

            $tenders = DB::table('tender_management')
                ->where('status', 3)
                ->where('soft_delete', 0)
                ->orderBy('created_at', 'asc')
                ->latest('created_at')
                // ->whereDate('archivel_date', '>=', now()->toDateString())
                ->get();

            // dd($tenders);

            if (count($tenders) > 0) {
                foreach ($tenders as $tender) {
                    $tender_pdfs = DB::table('tender_details')
                        ->where('soft_delete', 0)
                        ->where('status', 3)
                        ->orderBy('created_at', 'asc')
                        ->where('tender_id', $tender->uid)
                        ->whereDate('archivel_date', '>=', now()->toDateString())
                        ->latest('created_at')
                        ->get();

                    if (count($tender_pdfs) > 0) {
                        $tenderData[] = [
                            'tender' => $tender,
                            'tender_pdfs' => $tender_pdfs
                        ];
                    }
                }
            }
            $applyUrl = DB::table('tender_management')
                        ->where('status', 3)
                        ->where('soft_delete', 0)
                        ->where('apply_url','!=', 'NULL')
                        ->first();
            return view('pages.tender', ['title' => $titleName, 'tenderData' => $tenderData,'applyUrl' =>  $applyUrl]);
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return view('pages.error');
        }
    }

    public function tenderArchive()
    {
        $titleName = 'Tender Archive';
        try {
            $tenderData = []; // Initialize the array to store all tender data

            $tenders = DB::table('tender_management')
                ->where('status', 3)
                ->where('soft_delete', 0)
                ->latest('created_at')
                // ->whereDate('archivel_date', '<', now()->toDateString())
                ->get();           

            if (count($tenders) > 0) {
                foreach ($tenders as $tender) {
                    $tender_pdfs = DB::table('tender_details')
                        ->where('status', 3)
                        ->where('soft_delete', 0)
                        ->where('tender_id', $tender->uid)
                        ->whereDate('archivel_date', '<', now()->toDateString())
                        ->latest('created_at')
                        ->get();

                    if (count($tender_pdfs) > 0) {
                        $tenderData[] = [
                            'tender' => $tender,
                            'tender_pdfs' => $tender_pdfs
                        ];
                    }
                }
            }
            $applyUrl = DB::table('tender_management')
                        ->where('status', 3)
                        ->where('soft_delete', 0)
                        ->where('apply_url','!=', 'NULL')
                        ->first();
            return view('pages.tenderArchive', ['title' => $titleName, 'tenderData' => $tenderData, 'applyUrl' =>  $applyUrl]);
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return view('pages.error');
        }
    }
    public function contactUs()
    {
        $titleName = 'Contact Us';
        $CustomCaptchas = new CustomCaptcha;
        $CustomCaptch = $CustomCaptchas->generateRandomAdditionExpression();
        Session::put('contactCapcode', $CustomCaptch['answer']);

        try {
            $designationData = [];

                    $department = DB::table('emp_depart_designations')
                        ->where('status', 3)
                        ->where('soft_delete', 0)
                        ->orderBy('short_order', 'ASC')
                        ->whereparent_id(0)
                        ->where('publice_status', 1)
                        ->get();

                    //dd($department);
                    if (Count($department) > 0) {

                        foreach ($department as $designation) {

                            $data = DB::table('employee_directories as emp')
                                ->select('emp.*', 'desi.name_en as desi_name_en', 'desi.name_hi as desi_name_hi')
                                ->join('emp_depart_designations as desi', 'emp.designation_id', '=', 'desi.uid')
                                ->where('emp.status', 3)
                                ->where('emp.soft_delete', 0)
                                ->where('department_id', $designation->uid)
                                ->orderBy('emp.short_order', 'ASC')
                                ->where('emp.publice_status', 1)
                                ->get();
                            //  dd( $data);

                            $designationData[] = [
                                'department' => $designation,
                                'data' => $data,
                            ];
                        }
                        //dd($designationData);

                        $employee = collect($designationData)->sortBy('department.short_order')->values()->all();
                    return view('pages.contact-us', [
                        'title' => $titleName,
                        'employee' => $employee,
                        'CustomCaptch' => $CustomCaptch
                    ]);
                }
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return view('pages.error');
        }
    }

    public function getContentAllPages(Request $request, $slug, $middelSlug = null, $lastSlugs = null, $finalSlug = null, $finallastSlug = null)
    {
        
        // dd('hii');
        $slugsToCheck = [$lastSlugs, $middelSlug, $finalSlug, $finallastSlug];

        if (in_array("set-language", $slugsToCheck)) {
            session()->put('Lang', $request->data);
            App::setLocale($request->data);
            return response()->json(['data' => $request->data, 'success' => true]);
        } else {
            // Handle the case when none of the slugs match
        }

        try {

            if ($finalSlug != null) {
                $finalUrl = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->whereurl($slug)->first();
                $lastUrl = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->whereurl($lastSlugs)->first();
                $middelUrl = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->whereurl($middelSlug)->first();
                $menus = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->whereurl($finalSlug)->first();
                
                if ($menus != '') {
                    $allmenus = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->get();
                    $firstParent = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->where('uid', $lastUrl->parent_id)->first();
                    //dd($firstParent);
                    if (!empty($firstParent)) {
                        $parentMenut = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->where('uid', optional($firstParent)->parent_id)->first();
                        //dd($parentMenut);
                        if (!empty($parentMenut)) {
                            foreach ($allmenus as $menu) {
                                if ($parentMenut && $menu->parent_id == $parentMenut->uid) {
                                    $menu->children = [];

                                    foreach ($allmenus as $childMenu) {
                                        if ($childMenu->parent_id == $menu->uid) {
                                            $childMenu->children = [];

                                            foreach ($allmenus as $grandchildMenu) {
                                                if ($grandchildMenu->parent_id == $childMenu->uid) {
                                                    $childMenu->children[] = $grandchildMenu;
                                                }
                                            }

                                            $menu->children[] = $childMenu;
                                        }
                                    }

                                    $tree[] = $menu;
                                }
                            }
                        } else {
                            $parentMenut = '';
                            $tree = [];
                        }
                    } else {
                        $parentMenut = '';
                        $tree = [];
                    }
                }
                // dd($tree);
            } else if ($lastSlugs != null) {
                $lastUrl = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->whereurl($slug)->first();
                $middelUrl = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->whereurl($middelSlug)->first();
                $menus = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->whereurl($lastSlugs)->first();
                if ($menus != '') {
                    $allmenus = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->get();
                    $firstParent = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->where('uid', $menus->parent_id)->first();
                    if (!empty($firstParent)) {
                        $parentMenut = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->where('uid', optional($firstParent)->parent_id)->first();
                        if (!empty($parentMenut)) {
                            foreach ($allmenus as $menu) {

                                if ($parentMenut && $menu->parent_id == $parentMenut->uid) {
                                    $menu->children = [];
                                    foreach ($allmenus as $childMenu) {
                                        if ($childMenu->parent_id == $menu->uid) {
                                            $childMenu->children = [];

                                            foreach ($allmenus as $grandchildMenu) {
                                                if ($grandchildMenu->parent_id == $childMenu->uid) {
                                                    $childMenu->children[] = $grandchildMenu;
                                                }
                                            }

                                            $menu->children[] = $childMenu;
                                        }
                                    }
                                    $tree[] = $menu;
                                }
                            }
                        } else {
                            $parentMenut = '';
                            $tree = [];
                        }
                    } else {
                        $parentMenut = '';
                        $tree = [];
                    }
                }
            } elseif ($middelSlug != null) {
                $middelUrl = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->whereurl($slug)->first();
                $menus = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->whereurl($middelSlug)->first();
                if ($menus != '') {
                    $allmenus = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->orderBy('sort_order', 'ASC')->get();
                    $parentMenut = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->where('uid', $menus->parent_id)->first();
                    if (!empty($parentMenut)) {
                        foreach ($allmenus as $menu) {
                            if ($menu->parent_id == $parentMenut->uid) {
                                $menu->children = [];
                                foreach ($allmenus as $childMenu) {
                                    if ($childMenu->parent_id == $menu->uid) {
                                        $childMenu->children = [];

                                        foreach ($allmenus as $grandchildMenu) {
                                            if ($grandchildMenu->parent_id == $childMenu->uid) {
                                                $childMenu->children[] = $grandchildMenu;
                                            }
                                        }

                                        $menu->children[] = $childMenu;
                                    }
                                }
                                $tree[] = $menu;
                            }
                        }
                    } else {
                        $parentMenut = '';
                        $tree = [];
                    }
                }
            } else {
                $menus = DB::table('website_menu_management')->where('soft_delete', 0)->where('status', 3)->whereurl($slug)->first();
            }
            if ($menus != '') {

                if ($finalSlug != null) {

                    if (Session::get('Lang') == 'hi') {
                        $finalBred = $finalUrl->name_hi;
                    } else {
                        $finalBred = $finalUrl->name_en;
                    }
                    if (Session::get('Lang') == 'hi') {
                        $lastBred = $middelUrl->name_hi;
                    } else {
                        $lastBred = $middelUrl->name_en;
                    }

                    if (Session::get('Lang') == 'hi') {
                        $middelBred = $lastUrl->name_hi;
                    } else {
                        $middelBred = $lastUrl->name_en;
                    }

                    if (Session::get('Lang') == 'hi') {
                        $title_name = $menus->name_hi;
                    } else {
                        $title_name = $menus->name_en;
                    }
                } else if ($lastSlugs != null) {

                    if (Session::get('Lang') == 'hi') {
                        $lastBred = $lastUrl->name_hi;
                    } else {
                        $lastBred = $lastUrl->name_en;
                    }


                    if (Session::get('Lang') == 'hi') {
                        $middelBred = $middelUrl->name_hi;
                    } else {
                        $middelBred = $middelUrl->name_en;
                    }

                    if (Session::get('Lang') == 'hi') {
                        $title_name = $menus->name_hi;
                    } else {
                        $title_name = $menus->name_en;
                    }
                } elseif ($middelSlug != null) {

                    if (Session::get('Lang') == 'hi') {
                        $middelBred = $middelUrl->name_hi;
                    } else {
                        $middelBred = $middelUrl->name_en;
                        // dd($middelBred);
                    }

                    if (Session::get('Lang') == 'hi') {
                        $title_name = $menus->name_hi;
                    } else {
                        $title_name = $menus->name_en;
                    }
                } else {

                    if (Session::get('Lang') == 'hi') {
                        $title_name = $menus->name_hi;
                    } else {
                        $title_name = $menus->name_en;
                    }
                }
                $quickLink = DB::table('website_menu_management')->where('menu_place', 4)->where('status', 3)->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();

                $dynamic_content_page_metatag = DB::table('dynamic_content_page_metatag')
                    ->where('soft_delete', 0)
                    ->where('status', 3)
                    ->where('menu_uid', $menus->uid)
                    ->orderBy('created_at', 'asc')
                    ->orderBy('sort_order', 'ASC')
                    ->get();

                // dd($dynamic_content_page_metatag); 
                if (count($dynamic_content_page_metatag) > 0) {                   
                    $organizedData = [];

                    foreach ($dynamic_content_page_metatag as $dynamic_content_page_metatags) {

                        $dynamic_content_page_pdf = DB::table('dynamic_content_page_pdf')
                            ->wheredcpm_id($dynamic_content_page_metatags->uid)
                            ->where('status', 3)
                            ->orderBy('created_at', 'asc')
                            ->where('soft_delete', 0)
                            ->get();

                        //  dd($dynamic_content_page_pdf);

                        $dynamic_page_banner = DB::table('dynamic_page_banner')
                            ->where('status', 3)
                            ->where('soft_delete', 0)
                            ->wheredcpm_id($dynamic_content_page_metatags->uid)
                            ->first();

                        $dynamic_content_page_gallery = DB::table('dynamic_content_page_gallery')
                            ->wheredcpm_id($dynamic_content_page_metatags->uid)
                            ->where('status', 3)
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
                    if ($finalSlug != null) {
                        return view('master-page', ['finalBred' => $finalBred, 'parentMenut' => $parentMenut, 'tree' => $tree, 'lastBred' => $lastBred, 'middelBred' => $middelBred, 'quickLink' => $quickLink, 'title_name' => $title_name, 'organizedData' => $organizedData,]);
                    } else if ($lastSlugs != null) {
                        return view('master-page', ['parentMenut' => $parentMenut, 'tree' => $tree, 'lastBred' => $lastBred, 'middelBred' => $middelBred, 'quickLink' => $quickLink, 'title_name' => $title_name, 'organizedData' => $organizedData,]);
                    } elseif ($middelSlug != null) {
                        return view('master-page', ['parentMenut' => $parentMenut, 'tree' => $tree, 'middelBred' => $middelBred, 'quickLink' => $quickLink, 'title_name' => $title_name, 'organizedData' => $organizedData,]);
                    } else {
                        return view('master-page', ['quickLink' => $quickLink, 'title_name' => $title_name, 'organizedData' => $organizedData,]);
                    }
                } elseif ($middelSlug != null && $middelSlug == 'director-desk') {
                    
                    $designation = DB::table('emp_depart_designations')
                        ->where('name_en', 'LIKE', 'Director')
                        ->where('status', 3)
                        ->where('soft_delete', 0)
                        ->orderBy('short_order', 'ASC')
                        ->where('publice_status', 1)
                        ->first();

                    if ($designation != '') {

                        $Director = DB::table('employee_directories')
                            ->where('designation_id', $designation->uid)
                            ->where('status', 3)
                            ->where('soft_delete', 0)
                            ->orderBy('short_order', 'ASC')
                            ->where('publice_status', 1)
                            ->first();
                        return view('master-page', ['parentMenut' => $parentMenut, 'tree' => $tree, 'middelBred' => $middelBred, 'quickLink' => $quickLink, 'title_name' => $title_name, 'Director' => $Director]);
                    }
                } elseif ($middelSlug != null && $middelSlug == 'employee-directory') {
                    //dd('hii');
                    $designationData = [];

                    $department = DB::table('emp_depart_designations')
                        ->where('status', 3)
                        ->where('soft_delete', 0)
                        ->orderBy('short_order', 'ASC')
                        ->whereparent_id(0)
                        ->where('publice_status', 1)
                        ->get();

                    //dd($department);
                    if (Count($department) > 0) {

                        foreach ($department as $designation) {

                            $data = DB::table('employee_directories as emp')
                                ->select('emp.*', 'desi.name_en as desi_name_en', 'desi.name_hi as desi_name_hi')
                                ->join('emp_depart_designations as desi', 'emp.designation_id', '=', 'desi.uid')
                                ->where('emp.status', 3)
                                ->where('emp.soft_delete', 0)
                                ->where('department_id', $designation->uid)
                                ->orderBy('emp.short_order', 'ASC')
                                ->where('emp.publice_status', 1)
                                ->get();
                            //  dd( $data);

                            $designationData[] = [
                                'department' => $designation,
                                'data' => $data,
                            ];
                        }
                        //dd($designationData);

                        $sortedDesignationData = collect($designationData)->sortBy('department.short_order')->values()->all();

                        // return view('pages.employeeDirectory', ['sortedDesignationData' => $sortedDesignationData]);

                        return view('master-page', ['parentMenut' => $parentMenut, 'tree' => $tree, 'middelBred' => $middelBred, 'quickLink' => $quickLink, 'title_name' => $title_name, 'sortedDesignationData' => $sortedDesignationData]);
                    }
                } else {
                    if (Session::get('Lang') == 'hi') {
                        $content = "जल्द आ रहा है";
                    } else {
                        $content = "Coming Soon...";
                    }

                    if ($finalSlug != null) {

                        return view('master-page', ['parentMenut' => $parentMenut, 'tree' => $tree, 'middelBred' => $middelBred, 'quickLink' => $quickLink,'finalBred' => $finalBred, 'lastBred' => $lastBred, 'content' => $content, 'middelBred' => $middelBred, 'title_name' => $title_name,]);
                    } else if ($lastSlugs != null) {

                        return view('master-page', ['parentMenut' => $parentMenut, 'tree' => $tree, 'middelBred' => $middelBred, 'quickLink' => $quickLink,'lastBred' => $lastBred, 'content' => $content, 'middelBred' => $middelBred, 'title_name' => $title_name,]);
                    } elseif ($middelSlug != null) {
                        return view('master-page', ['parentMenut' => $parentMenut, 'tree' => $tree, 'middelBred' => $middelBred, 'quickLink' => $quickLink,'middelBred' => $middelBred, 'content' => $content, 'title_name' => $title_name,]);
                    } else {
                        return view('master-page', ['quickLink' => $quickLink,'title_name' => $title_name, 'content' => $content,]);
                    }
                }
            } else {
                return view('pages.error');
            }
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return view('pages.error');
        }
    }

    public function rtiData()
    {
        $titleName = 'RTI';
        try {

            $rtiData;
            $rti_assets = DB::table('rti_assets')
                ->where('soft_delete', 0)
                ->latest('created_at')
                ->first();

            if (!blank($rti_assets)) {
                $rti_assets_details = DB::table('rti_assets_details')
                    ->where('soft_delete', 0)
                    ->where('rti_assets_id', $rti_assets->uid)
                    ->latest('created_at')
                    ->get();

                $rti_assets->rti_assets_details = $rti_assets_details;
                $rtiData = $rti_assets;

                //  dd($rtiData);

            } else {

                if (Session::get('Lang') == 'hi') {
                    $content = "जल्द आ रहा है";
                } else {
                    $content = "Coming Soon...";
                }
                return view('pages.rti', ['title' => $titleName, 'content' => $content]);
            }
            return view('pages.rti', ['title' => $titleName, 'rtiData' => $rtiData]);
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return view('pages.error');
        }
    }

    public function overviewPage()
    {
        return view('pages.overview');
    }

    public function Feedback()
    {
        $titleName = 'FeedBack';
        $CustomCaptchas = new CustomCaptcha;
        $CustomCaptch = $CustomCaptchas->generateRandomAdditionExpression();
        Session::put('feedbackCapcode', $CustomCaptch['answer']);
        return view('pages.feedback', ['title' => $titleName, 'CustomCaptch' => $CustomCaptch]);
    }

    public function feedbackStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => ['required', 'string', 'email', 'max:50', 'email:rfc','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'phone' => ['required', 'digits:10', 'regex:/^(\+\d{1,2}\s?)?(\(\d{1,4}\)|\d{1,4})[-.\s]?\d{1,10}$/'],
            'message' => 'required|string|regex:/^[a-zA-Z0-9\s.,!?]+$/',
            'SecurityCode' => 'required',

        ]);
        if (Session::get('feedbackCapcode') != $request->SecurityCode) {
            return response()->json(['captchaError' => 'Captcha Invalid!']);
        }
        $data = new feedback;
        $data->name = strip_tags($request->name);
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->save();
        return response()->json(['success' => 'Record Add Successfully']);
    }

    public function siteMap()
    {
        $titleName = 'SITE MAP';
        return view('pages.siteMap', ['title' => $titleName]);
    }

    public function ComingSoon()
    {
        return view('pages.CommingSoon');
    }

    public function ScreenReaderAccess()
    {
        $titleName = 'Screen Reader Access';
        return view('pages.screen_reader_access', ['title' => $titleName]);
    }

    public function error()
    {
        $titleName = 'Error';
        return view('pages.error', ['title' => $titleName]);
    }

    public function contactStroe(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required|string',
            'email' => ['required', 'string', 'email', 'max:50', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'phone' => ['required', 'digits:10', 'regex:/^(\+\d{1,2}\s?)?(\(\d{1,4}\)|\d{1,4})[-.\s]?\d{1,10}$/'],
            'message' => 'required|string|regex:/^[a-zA-Z0-9\s.,!?]+$/',
            'SecurityCode' => 'required',
        ]);
        
        if (Session::get('contactCapcode') != $request->SecurityCode) {
            // return back()->with('captchaError', "Captcha Invalid!.");
            return response()->json(['captchaError' =>"Captcha Invalid!."]);
        }
        $data = new contactUs;
        $data->name = strip_tags($request->name);
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->save();
        return response()->json(['success' => 'Record Add Successfully']);
    }

    // public function showPressReleased()
    // {
    //     $titleName = 'Show Press Releaed';
    //     return view('pages.press_relesead', ['title' => $titleName]);
    // }
    public function photoGallery()
    {
        $titleName = 'Photo Gallery';
        try {
            $galleryData = []; 

            $gallery = DB::table('gallery_management')
                ->where('status', 3)
                ->where('type', 0)
                ->where('soft_delete', 0)
                ->latest('created_at')
                ->get();

            if (count($gallery) > 0) {
                foreach ($gallery as $images) {
                    $gallay_images = DB::table('gallery_details')
                        ->where('status', 3)
                        ->where('soft_delete', 0)
                        ->where('gallery_id', $images->uid)
                        ->latest('created_at')
                        ->get();

                    if (count($gallay_images) > 0) {
                        $galleryData[] = [
                            'gallery' => $images,
                            'gallery_details' => $gallay_images
                        ];
                    }
                }
            }
            return view('pages.photo_gallery', ['title' => $titleName, 'galleryData' => $galleryData]);
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return view('pages.error');
        }
    }

    public function photoGalleryDetails($id)
    {
        $titleName = 'Photo Gallery Images';
        $photogallery = DB::table('gallery_details')
            ->where('soft_delete', 0)
            ->where('gallery_id', $id)
            ->latest('created_at')
            ->get();

            $gallery = DB::table('gallery_management')
            ->where('soft_delete', 0)
            ->where('uid', $id)
            ->latest('created_at')
            ->first();
        // dd($photogallery);     
        $breadcrumbs = 'Photo Gallery Images';
    return view('pages.photo-gallery-details', ['title' => $titleName, 'gallery'=>$gallery,'photogallery' => $photogallery, 'breadcrumbs' => $breadcrumbs]);

    }

    public function videoDetail()
    {
        $titleName = 'Video Gallery';
        try {
            $galleryVideo = [];
            $videoGallery = DB::table('gallery_management')
                ->where('type', 1)
                ->where('status', 3)
                ->where('soft_delete', 0)
                ->latest('created_at')
                ->get();

            if (count($videoGallery) > 0) {
                foreach ($videoGallery as $images) {
                    $gallay_video = DB::table('gallery_details')
                        ->where('soft_delete', 0)
                        ->where('gallery_id', $images->uid)
                        ->latest('created_at')
                        ->get();

                    if (count($gallay_video) > 0) {
                        $galleryVideo[] = [
                            'gallery' => $images,
                            'gallery_details' => $gallay_video
                        ];
                    }
                }
            }
            // dd($galleryVideo);
            return view('pages.video_gallery', ['title' => $titleName, 'galleryVideo' => $galleryVideo]);
        } catch (\Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
            return view('pages.error');
        } catch (\Throwable $e) {
            // Catch any other types of exceptions that implement the Throwable interface.
            \Log::error('An unexpected exception occurred: ' . $e->getMessage());
            return view('pages.error');
        }
    }


    public function academicProgram()
    {
        $titleName = 'Academic Program';
        return view('pages.academic_program', ['title' => $titleName]);
    }
    public function trainingProgram()
    {
        $titleName = 'Training';
        return view('pages.training_program', ['title' => $titleName]);
    }    
    /**
     * purchaseWorksCommittee
     *
     * @return void
     */
    public function purchaseWorksCommittee(Request $request)
    {
        $workType = $request->input('work_Type');
        $startDate = $request->input('start_date');
        $titleName = 'Purchase Works Committee';
        $result = DB::table('purchase_works_committees')
                                ->join('purchase_works_committees_type', 'purchase_works_committees_type.uid', '=', 'purchase_works_committees.asset_type')
                                ->where('purchase_works_committees.status', 3)
                                ->where('purchase_works_committees.soft_delete', 0);
        if (!empty($workType)) {
            $result->where('purchase_works_committees.asset_type', $workType);
        }    
        if (!empty($startDate)) {
            $result->whereRaw("YEAR(STR_TO_DATE(purchase_works_committees.start_date, '%Y-%m-%d')) = $startDate");
        }
        $purchaseWorksCommittes = $result->get();
        $purchaseWorksCommittesTypes = DB::table('purchase_works_committees_type')
                                        ->orderBy('created_at', 'asc')
                                        ->where('soft_delete', 0)->get();
        return view('pages.purchase_works_committee', ['title' => $titleName,'purchaseWorksCommittes' => $purchaseWorksCommittes,'purchaseWorksCommittesTypes' => $purchaseWorksCommittesTypes,'selectedWorkType' => $workType,
        'selectedYear' => $startDate]);
    }
    
    /**
     * notification
     *
     * @return void
     */
    public function notification()
    {
        $title = 'Notification';
        $notifications = DB::table('recent_activities')->where(['notification_others' => 1, 'status' => 3, 'soft_delete' => 0])->get();
        return view('pages.notification', ['title' => $title,'notifications' => $notifications]);
    }
    
    /**
     *  @pressReleased
     *
     * @return void
     */
    public function pressReleased()
    {
        $title = 'Press Released';
        $pressReleaseds = DB::table('recent_activities')->where(['notification_others' => 2, 'status' => 3, 'soft_delete' => 0])->get();
        return view('pages.press_relesead', ['title' => $title,'pressReleaseds' => $pressReleaseds]);
    }
    
    public function rtiApplicationsResponseTable()
    {
        
        return view('pages.rti_application_response_table');
    }
    
    /**
     * rtiDetail
     *
     * @return void
     */
    public function rtiDetail($slug = null)
    {
        $title = 'RTI';
        $rties = DB::table('dynamic_content_page_metatag')
                ->orderBy('created_at', 'asc')
                ->where(['menu_slug' => 'rti', 'status' => 3, 'soft_delete' => 0])
                ->get();
        $rtiesDetails = null;
        if ($slug) {
            $rtiesFirst = DB::table('dynamic_content_page_metatag')->orderBy('created_at', 'asc')->where(['custom_slug' => $slug, 'status' => 3, 'soft_delete' => 0])->first();
        }else{
            $rtiesFirst = DB::table('dynamic_content_page_metatag')->orderBy('created_at', 'asc')->where(['menu_slug' => 'rti', 'status' => 3, 'soft_delete' => 0])->first();
        }
        if($rtiesFirst){
            $rtiesDetails = DB::table('dynamic_page_content')->where(['dcpm_id' => $rtiesFirst->uid, 'soft_delete' => 0])->first();
        }
        // dd($rtiesFirst);
        return view('pages.rti', ['title' => $title, 'rties' => $rties, 'rtiesDetails' => $rtiesDetails,'rtiesFirst' =>$rtiesFirst]);
    }

    /**
     * rtiApplicationsResponse
     *
     * @return void
     */
    public function rtiApplicationsResponse(Request $request)
    {
        $registrationNo = $request->input('registration_no');
        $titleName = 'RTI Applications & Responses';
        $result = DB::table('rti_application_responses')
                    ->where('status', 3)
                    ->orderBy('created_at', 'asc')
                    ->where(['soft_delete' => 0]);
        if (!empty($registrationNo)) {
            $result->where('registration_number', 'like', '%' . $registrationNo . '%');
        }
        $rtiApplications = $result->get();
        return view('pages.rti_applications_responses', ['title' => $titleName,'rtiApplications' => $rtiApplications]);
    }
}
