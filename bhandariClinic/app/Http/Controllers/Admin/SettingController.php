<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\SettingService;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Admin/setting');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'clinic_name' => 'required',
            'contact_person' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'emergency_contact_number' => 'required|numeric',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $settingService = new SettingService();
        $settingService->save($request);

        return redirect()->route('setting');
    }
}
