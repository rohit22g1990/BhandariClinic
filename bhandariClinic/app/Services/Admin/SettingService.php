<?php
namespace App\Services\Admin;

use App\Model\Setting;
use Illuminate\Http\Request;


class SettingService extends AbstractService
{
    /**
     * Save setting data
     *
     * @param Request $request
     */
    public function save(Request $request)
    {
        if ($request->hasFile('logo')) {
            $request->logo->move(
                public_path('images'),
                'logo' . $request->file('logo')->getClientOriginalExtension()
            );
        }

        $setting = Setting::find($request->input('id'));
        $setting->map($request->all());

        $setting->save();
    }
}
