<?php

namespace Modules\Setting\Controllers\Admin;

use App\Http\Controllers\Controller;
use Modules\Setting\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private $viewsPath = 'Setting.Resources.views.';

    public function index()
    {
        return view($this->viewsPath.'index');
    }

    public function edit(Setting $setting)
    {
        return view($this->viewsPath.'.edit',['form' => $setting]);
    }

    public function update(Setting $setting, Request $request) {
        $criteria = [
            'value' => '',
        ];

        $request->validate($criteria);

        $setting->fill($request->all());
        $setting->save();

        return redirect()->route('admin.settings.index')->with(['success' => 'Updated Successfully']);
    }
}

