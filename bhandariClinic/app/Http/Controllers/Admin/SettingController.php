<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'phone' => 'required|numeric|max:10',
            'mobile' => 'required|numeric|max:10',
            'emergency_contact_number' => 'required|numeric|max:10',
            'fax' => 'required|numeric|max:10',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $request->logo->move(
                public_path('images'),
                'logo' . $request->file('logo')->getClientOriginalExtension()
            );
        }


        echo "<pre>";dd($request->all()); exit;


    }
}
