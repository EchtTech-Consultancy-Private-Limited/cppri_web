<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use App, Route, DB, Session, Log;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

// Call Helper

class CommonComposer
{
    protected $request;

    /**
     * Create a new common composer.
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        try {
            $visitCounter = DB::table('visiting_counters')->count();
            $banner = DB::table('home_page_banner_management')->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();
            $footerMenu = DB::table('website_menu_management')->whereIn('menu_place', [1, 3])->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();
            $menus = DB::table('website_menu_management')->whereIn('menu_place', [0, 3])->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();
            $menuName = $this->getMenuTree($menus, 0);
            $news_management = DB::table('news_management')->where('soft_delete', 0)->latest('created_at')->take(3)->get();
            $tender_management = DB::table('tender_management')->where('soft_delete', 0)->latest('created_at')->get();
            $social_links = DB::table('social_links')->where('soft_delete', 0)->first();
            $logo = DB::table('website_core_settings')->where('soft_delete', 0)->first();

            $image_management = DB::table('gallery_management')->where('type', 0)->where('soft_delete', 0)->latest('created_at')->first();

            if (isset($image_management) && isset($image_management->uid)) {

                $image_gallery_details = DB::table('gallery_details')->where('gallery_id', $image_management->uid)->where('soft_delete', 0)->get();
            } else {

                $image_gallery_details = null;
            }

            $video_management = DB::table('gallery_management')->where('type', 1)->where('soft_delete', 0)->latest('created_at')->first();
            if (isset($video_management) && isset($video_management->uid)) {

                $video_gallery_details = DB::table('gallery_details')->where('gallery_id', $video_management->uid)->where('soft_delete', 0)->latest('created_at')->first();
            } else {

                $video_gallery_details = null;
            }


            $quickLink = DB::table('website_menu_management')->where('menu_place', 4)->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();

            $view->with(['video_gallery_details' => $video_gallery_details, 'video_management' => $video_management, 'image_gallery_details' => $image_gallery_details, 'image_management' => $image_management, 'social_links' => $social_links, 'logo' => $logo, 'visitCounter' => $visitCounter, 'quickLink' => $quickLink, 'alertMessage' => $this->checkLanguage(), 'headerMenu' => $menuName, 'footerMenu' => $footerMenu, 'banner' => $banner, 'news_management' => $news_management, 'tender_management' => $tender_management]);
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

    function getMenuTree($menus, $parentId)
    {
        $branch = array();
        foreach ($menus as $menu) {
            if ($menu->parent_id == $parentId) {
                $children = $this->getMenuTree($menus, $menu->uid);
                if ($children) {
                    $menu->children = $children;
                }
                $branch[] = $menu;
            }
        }
        return $branch;
    }

    function checkLanguage()
    {
        if (Session::get('locale') == 'hi') {
            return 'यह लिंक आपको एक बाहरी वेब साइट पर ले जाएगा।';
        } else {
            return 'This link will take you to an external web site.';
        }
    }
}
