<?php

namespace App\Http\Controllers;

use App\Model\Admin\Page;
use Illuminate\Http\Request;
use App\Services\HomeService;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Config;
use App\Pages;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homeService = new HomeService();

        return view('home', [
            'pageContents' => $homeService->getModuleContentsByPageId(Pages::PAGE_ID_HOME),
            'moduleCarts' => $homeService->getModuleCarts(Page::HOME_PAGE_ID)
        ]);
    }
}
