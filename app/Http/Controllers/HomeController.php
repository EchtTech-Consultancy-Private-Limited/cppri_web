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
        return view('home');
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
         // dd('hii');
          try {
              $careerData = []; 
  
              $career = DB::table('career_management')
                  ->where('soft_delete', 0)
                  ->latest('created_at')
                  ->get();
  
              if (count($career) > 0) {
                  foreach ($career as $careers) {
                      $career_pdfs = DB::table('career_management_details')
                          ->where('soft_delete', 0)
                          ->where('tender_id', $careers->uid)
                          ->whereDate('archivel_date', '>', now()->toDateString()) 
                          ->latest('created_at')
                          ->get();
  
                          $careerData[] = [
                          'carrer' => $career,
                          'career_pdfs' => $career_pdfs
                      ];
                  }
              }
              return view('pages.career', ['careerData' => $careerData]);
  
  
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
          try {
              $careerData = []; 
  
              $career = DB::table('career_management')
                  ->where('soft_delete', 0)
                  ->latest('created_at')
                  ->get();
  
              if (count($career) > 0) {
                  foreach ($career as $careers) {
                      $career_pdfs = DB::table('career_management_details')
                          ->where('soft_delete', 0)
                          ->where('tender_id', $careers->uid)
                          ->whereDate('archivel_date', '<', now()->toDateString()) 
                          ->latest('created_at')
                          ->get();
  
                          $careerData[] = [
                          'carrer' => $career,
                          'career_pdfs' => $career_pdfs
                      ];
                  }
              }
              return view('pages.careerArchive', ['careerData' => $careerData]);
  
  
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
        try {
            $tenderData = []; 

            $tenders = DB::table('tender_management')
                ->where('soft_delete', 0)
                ->latest('created_at')
                ->get();

            if (count($tenders) > 0) {
                foreach ($tenders as $tender) {
                    $tender_pdfs = DB::table('tender_details')
                        ->where('soft_delete', 0)
                        ->where('tender_id', $tender->uid)
                        ->whereDate('archivel_date', '>', now()->toDateString()) 
                        ->latest('created_at')
                        ->get();

                    $tenderData[] = [
                        'tender' => $tender,
                        'tender_pdfs' => $tender_pdfs
                    ];
                }
            }
            return view('pages.tender', ['tenderData' => $tenderData]);


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

    public function tenderArchive(){

        try {
            $tenderData = []; // Initialize the array to store all tender data

            $tenders = DB::table('tender_management')
                ->where('soft_delete', 0)
                ->latest('created_at')
                ->get();

            if (count($tenders) > 0) {
                foreach ($tenders as $tender) {
                    $tender_pdfs = DB::table('tender_details')
                        ->where('soft_delete', 0)
                        ->where('tender_id', $tender->uid)
                        ->whereDate('archivel_date', '<', now()->toDateString()) 
                        ->latest('created_at')
                        ->get();

                    $tenderData[] = [
                        'tender' => $tender,
                        'tender_pdfs' => $tender_pdfs
                    ];
                }
            }
          
            return view('pages.tenderArchive', ['tenderData' => $tenderData]);


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
        $CustomCaptchas = new CustomCaptcha;
        $CustomCaptch = $CustomCaptchas->generateRandomAdditionExpression();
        Session::put('contactCapcode', $CustomCaptch['answer']);

        try {
            $employee = DB::table('employee_directories as emp')
                ->select('emp.*', 'desi.name_en as desi_name_en', 'desi.name_hi as desi_name_hi')
                ->join('emp_depart_designations as desi', 'emp.designation_id', '=', 'desi.uid')
                ->where('emp.soft_delete', 0)
                ->orderBy('emp.short_order', 'ASC')
                ->where('emp.publice_status', 1)
                ->get();
            //dd($employee);

            return view('pages.contact-us', [
                'employee' => $employee,
                'CustomCaptch' => $CustomCaptch
            ]);
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

    public function getContentAllPages(Request $request, $slug, $middelSlug = null, $lastSlugs = null, $finalSlug = null)
    {
        //dd('hii');
        $slugsToCheck = [$lastSlugs, $middelSlug, $finalSlug];

        if (in_array("set-language", $slugsToCheck)) {
            session()->put('Lang', $request->data);
            App::setLocale($request->data);
            return response()->json(['data' => $request->data, 'success' => true]);
        } else {
            // Handle the case when none of the slugs match
        }

        try {

            if ($lastSlugs != null) {
                $lastUrl = DB::table('website_menu_management')->whereurl($slug)->first();
                $middelUrl = DB::table('website_menu_management')->whereurl($middelSlug)->first();
                $menus = DB::table('website_menu_management')->whereurl($lastSlugs)->first();
                if ($menus != '') {
                    $allmenus = DB::table('website_menu_management')->orderBy('sort_order', 'ASC')->get();
                    $firstParent = DB::table('website_menu_management')->where('uid', $menus->parent_id)->first();
                    if (!empty($firstParent)) {
                        $parentMenut = DB::table('website_menu_management')->where('uid', optional($firstParent)->parent_id)->first();
                        if (!empty($parentMenut)) {
                            foreach ($allmenus as $menu) {

                                if ($parentMenut && $menu->parent_id == $parentMenut->uid) {
                                    $menu->children = [];
                                    foreach ($allmenus as $childMenu) {
                                        if ($childMenu->parent_id == $menu->uid) {
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

                $middelUrl = DB::table('website_menu_management')->whereurl($slug)->first();
                $menus = DB::table('website_menu_management')->whereurl($middelSlug)->first();
                if ($menus != '') {
                    $allmenus = DB::table('website_menu_management')->orderBy('sort_order', 'ASC')->get();
                    $parentMenut = DB::table('website_menu_management')->where('uid', $menus->parent_id)->first();
                    if (!empty($parentMenut)) {
                        foreach ($allmenus as $menu) {
                            if ($menu->parent_id == $parentMenut->uid) {
                                $menu->children = [];
                                foreach ($allmenus as $childMenu) {
                                    if ($childMenu->parent_id == $menu->uid) {
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
                $menus = DB::table('website_menu_management')->whereurl($slug)->first();
            }

            if ($menus != '') {

                if ($lastSlugs != null) {

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
                $quickLink = DB::table('website_menu_management')->where('menu_place', 4)->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();


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

                            ->latest('start_date')
                            ->get();

                          //  dd($dynamic_content_page_pdf);

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


                    if ($lastSlugs != null) {
                        return view('master-page', ['parentMenut' => $parentMenut, 'tree' => $tree, 'lastBred' => $lastBred, 'middelBred' => $middelBred, 'quickLink' => $quickLink, 'title_name' => $title_name, 'organizedData' => $organizedData,]);
                    } elseif ($middelSlug != null) {
                        return view('master-page', ['parentMenut' => $parentMenut, 'tree' => $tree, 'middelBred' => $middelBred, 'quickLink' => $quickLink, 'title_name' => $title_name, 'organizedData' => $organizedData,]);
                    } else {
                        return view('master-page', ['quickLink' => $quickLink, 'title_name' => $title_name, 'organizedData' => $organizedData,]);
                    }
                } elseif ($middelSlug != null && $middelSlug == 'director-desk') {
                    $designation = DB::table('emp_depart_designations')
                        ->where('name_en', 'LIKE', 'Director')
                        ->where('soft_delete', 0)
                        ->orderBy('short_order', 'ASC')
                        ->where('publice_status', 1)
                        ->first();

                    if ($designation != '') {

                        $Director = DB::table('employee_directories')
                            ->where('designation_id', $designation->uid)
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
                        ->where('soft_delete', 0)
                        ->orderBy('short_order', 'ASC')
                        ->whereparent_id(0)
                        ->where('publice_status', 1)
                        ->get();

                    if (Count($department) > 0) {

                        foreach ($department as $designation) {

                            $data = DB::table('employee_directories as emp')
                                ->select('emp.*', 'desi.name_en as desi_name_en', 'desi.name_hi as desi_name_hi')
                                ->join('emp_depart_designations as desi', 'emp.designation_id', '=', 'desi.uid')
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
                        // dd($designationData);

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

                    if ($lastSlugs != null) {
                        return view('master-page', ['lastBred' => $lastBred, 'content' => $content, 'middelBred' => $middelBred, 'title_name' => $title_name,]);
                    } elseif ($middelSlug != null) {
                        return view('master-page', ['middelBred' => $middelBred, 'content' => $content, 'title_name' => $title_name,]);
                    } else {
                        return view('master-page', ['title_name' => $title_name, 'content' => $content,]);
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
    
    public function rtiData(){
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
                return view('pages.rti', ['content' => $content]);
            }
            return view('pages.rti', ['rtiData' => $rtiData]);
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
        $CustomCaptchas = new CustomCaptcha;
        $CustomCaptch = $CustomCaptchas->generateRandomAdditionExpression();
        Session::put('feedbackCapcode', $CustomCaptch['answer']);
        return view('pages.feedback', ['CustomCaptch' => $CustomCaptch]);
    }

    public function feedbackStore(Request $request)
    {
        if (Session::get('feedbackCapcode') != $request->SecurityCode) {
            return back()->with('captchaError',"Captcha Invalid!.");
        } else {
            $request->validate([
                'name' => 'required',
                'email' => ['required', 'string', 'email', 'max:50', 'email:rfc'],
                'phone' => ['required', 'regex:/^(\+\d{1,2}\s?)?(\(\d{1,4}\)|\d{1,4})[-.\s]?\d{1,10}$/'],
                'message' => 'required',

            ]);
        }
        $data = new feedback;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->save();
        return back()->with('success', 'Record Add Successfully');
    }

    public function siteMap()
    {
        return view('pages.siteMap');
    }

    public function ComingSoon()
    {
        return view('pages.CommingSoon');
    }

    public function ScreenReaderAccess()
    {
        return view('pages.screen_reader_access');
    }

    public function error()
    {
        return view('pages.error');
    }

    // public function directorDesk()
    // {
    //     try {
    //         $designation = DB::table('emp_depart_designations')
    //             ->where('name_en', 'LIKE', 'Director')
    //             ->where('soft_delete', 0)
    //             ->orderBy('short_order', 'ASC')
    //             ->where('publice_status', 1)
    //             ->first();

    //         if ($designation != '') {

    //             $Director = DB::table('employee_directories')
    //                 ->where('designation_id', $designation->uid)
    //                 ->where('soft_delete', 0)
    //                 ->orderBy('short_order', 'ASC')
    //                 ->where('publice_status', 1)
    //                 ->first();

    //             return view('pages.directorDesk', ['Director' => $Director]);
    //         } else {

    //             if (Session::get('Lang') == 'hi') {
    //                 $content = "जल्द आ रहा है";
    //             } else {
    //                 $content = "Coming Soon...";
    //             }
    //             // dd($menus);
    //             return view('pages.directorDesk', ['content' => $content]);
    //         }
    //     } catch (\Exception $e) {
    //         \Log::error('An exception occurred: ' . $e->getMessage());
    //         return view('pages.error');
    //     } catch (\PDOException $e) {
    //         \Log::error('A PDOException occurred: ' . $e->getMessage());
    //         return view('pages.error');
    //     } catch (\Throwable $e) {
    //         // Catch any other types of exceptions that implement the Throwable interface.
    //         \Log::error('An unexpected exception occurred: ' . $e->getMessage());
    //         return view('pages.error');
    //     }
    // }
    // public function employeeDirectory()
    // {
    //     try {
    //         $designationData = [];

    //         $department = DB::table('emp_depart_designations')
    //             ->where('soft_delete', 0)
    //             ->orderBy('short_order', 'ASC')
    //             ->whereparent_id(0)
    //             ->where('publice_status', 1)
    //             ->get();

    //         if (Count($department) > 0) {

    //             foreach ($department as $designation) {

    //                 $data = DB::table('employee_directories as emp')
    //                     ->select('emp.*', 'desi.name_en as desi_name_en', 'desi.name_hi as desi_name_hi')
    //                     ->join('emp_depart_designations as desi', 'emp.designation_id', '=', 'desi.uid')
    //                     ->where('emp.soft_delete', 0)
    //                     ->where('department_id', $designation->uid)
    //                     ->orderBy('emp.short_order', 'ASC')
    //                     ->where('emp.publice_status', 1)
    //                     ->get();
    //                 //  dd( $data);

    //                 $designationData[] = [
    //                     'department' => $designation,
    //                     'data' => $data,
    //                 ];
    //             }
    //             // dd($designationData);

    //             $sortedDesignationData = collect($designationData)->sortBy('department.short_order')->values()->all();

    //             return view('pages.employeeDirectory', ['sortedDesignationData' => $sortedDesignationData]);
    //         } else {

    //             if (Session::get('Lang') == 'hi') {
    //                 $content = "जल्द आ रहा है";
    //             } else {
    //                 $content = "Coming Soon...";
    //             }
    //             // dd($menus);
    //             return view('pages.employeeDirectory', ['content' => $content]);
    //         }
    //     } catch (\Exception $e) {
    //         \Log::error('An exception occurred: ' . $e->getMessage());
    //         return view('pages.error');
    //     } catch (\PDOException $e) {
    //         \Log::error('A PDOException occurred: ' . $e->getMessage());
    //         return view('pages.error');
    //     } catch (\Throwable $e) {
    //         // Catch any other types of exceptions that implement the Throwable interface.
    //         \Log::error('An unexpected exception occurred: ' . $e->getMessage());
    //         return view('pages.error');
    //     }
    // }

    public function contactStroe(Request $request)
    {
        if (Session::get('contactCapcode') != $request->SecurityCode) {
            return back()->with('captchaError',"Captcha Invalid!.");
        } else {
            $request->validate([
                'name' => 'required',
                'email' => ['required', 'string', 'email', 'max:50', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
                'phone' => ['required', 'regex:/^(\+\d{1,2}\s?)?(\(\d{1,4}\)|\d{1,4})[-.\s]?\d{1,10}$/'],
                'message' => 'required',
            ]);
        }
        $data = new contactUs;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->save();
        return back()->with('success', 'Record Add Successfully');
    }

    public function showPressReleased()
    {
        return view('pages.press_relesead');
    }
    public function photoGallery()
    {
        try {
            $galleryManagementRecords = DB::table('gallery_management')
                ->where('type', 0)->latest('created_at')
                ->where('soft_delete', 0)
                ->get();

            $galleryDetails = DB::table('gallery_details')
                ->where('soft_delete', 0)->latest('created_at')
                ->get();

            if (!empty($galleryManagementRecords) && !empty($galleryDetails)) {
                $tree = [];

                foreach ($galleryManagementRecords as $menu) {
                    $menu->children = [];

                    foreach ($galleryDetails as $detail) {
                        if ($menu->uid == $detail->gallery_id) {
                            $menu->children[] = $detail;
                        }
                    }
                    $tree[] = $menu;
                }
            } else {
                $tree = [];
            }

            return view('pages.photo_gallery', ['tree' => $tree]);
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

  
  
}

