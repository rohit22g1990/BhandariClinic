<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\Page;
use App\Services\Admin\ModuleService;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $moduleService = new ModuleService();

        return view('Admin/Modules/module', [
            'pages' => Page::all()->toArray(),
            'modules' => $moduleService->getAll(),
        ]);
    }

    /**
     * Save modules into the database
     *
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'page_id' => 'required',
            'is_hidden' => 'required',
        ]);
        $moduleService = new ModuleService();
        $moduleService->save($request);

        return view('Admin/Modules/module', [
            'pages' => Page::all()->toArray(),
            'modules' => $moduleService->getAll(),
        ])->with('success', $moduleService->message);

    }

    public function show($id)
    {
        if (empty($id)) {
            return back()->with('alert','Record Not Found!');
        }

        $moduleService = new ModuleService();

        return view('Admin/Modules/form', [
                'pages' => Page::all()->toArray(),
                'module' => $moduleService->getModuleById($id)
            ]
        );
    }
}
