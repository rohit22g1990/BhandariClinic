<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Module;
use App\Model\Admin\Page;
use App\Services\Admin\ModuleCartService;
use App\Services\Admin\ModuleService;
use Illuminate\Http\Request;

class ModuleCartController extends Controller
{
    public function index()
    {
        $moduleCartService = new ModuleCartService();

        return view('Admin/ModuleCarts/module', [
//            'pages' => Page::all()->toArray(),
            'modules' => $moduleCartService->getAll(),
        ]);

//        return view('Admin/ModuleCarts/module', [
//            'modules' => Module::all()->toArray()
//        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'module_id' => 'required',
            'is_hidden' => 'required',
        ]);
        $moduleCartService = new ModuleCartService();
        $moduleCartService->save($request);

        return view('Admin/ModuleCarts/module', [
            'modules' => $moduleCartService->getAll()
        ])->with('success', $moduleCartService->message);
    }

    public function show($id)
    {
        if (empty($id)) {
            return back()->with('alert','Record Not Found!');
        }

        $moduleCartService = new ModuleCartService();

        return view('Admin/ModuleCarts/form', [
                'modules' => Module::all()->toArray(),
                'moduleCart' => $moduleCartService->getModuleCartById($id)
            ]
        );
    }
}
