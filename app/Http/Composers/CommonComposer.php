<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use App, Route, DB  ;
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

            $banner = DB::table('home_page_banner_management')->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();
            $footerMenu = DB::table('website_menu_management')->whereIn('menu_place',[1,3])->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();
            $menus = DB::table('website_menu_management')->whereIn('menu_place',[0,3])->where('soft_delete', 0)->orderBy('sort_order', 'ASC')->get();
            $menuName = $this->getMenuTree($menus, 0);
            $news_management = DB::table('news_management')->where('soft_delete', 0)->latest('created_at')->take(3)->get();
            $tender_management = DB::table('tender_management')->where('soft_delete', 0)->latest('created_at')->get();
    
            $view->with(['headerMenu' => $menuName, 'footerMenu' => $footerMenu,'banner'=>$banner,'news_management'=>$news_management,'tender_management'=>$tender_management]);

        } catch (Exception $e) {
            \Log::error('An exception occurred: ' . $e->getMessage());
        } catch (\PDOException $e) {
            \Log::error('A PDOException occurred: ' . $e->getMessage());
        }
    }

    function getMenuTree($menus,$parentId){
        $branch = array();
        foreach ($menus as $menu){
            if($menu->parent_id == $parentId) {
                $children = $this->getMenuTree($menus,$menu->uid);
                if ($children) {
                    $menu->children = $children;
                }
                $branch[] = $menu;
            }
        }
        return $branch;
    }




}
