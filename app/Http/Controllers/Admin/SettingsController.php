<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateSettingsRequest;
use App\Http\Requests\Admin\UpdateSettingsRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    function  index()
    {
        $settings = Setting::select("*")->orderby('id', 'desc')->paginate(10);

        return view('Admin.settings.index', compact('settings'));
    }
    public function create()
    {
        $setting = new Setting();
        return view('Admin.settings.create', compact('setting'));
    }

    public function store(CreateSettingsRequest $request)
    {
        $data = [
            'Terms_and_Conditions' => $request->Terms_and_Conditions,
            'status'         => 'Active',
        ];

        if ($request->hasFile('logo_header')) {
            $name = Str::random(12) . time() . '.' . $request->file('logo_header')->getClientOriginalExtension();
            $request->file('logo_header')->move(public_path('uploads/logo_header/settings/'), $name);

            $data['logo_header'] = $name;
        }

        if ($request->hasFile('logo_footer')) {
            $name = Str::random(12) . time() . '.' . $request->file('logo_footer')->getClientOriginalExtension();
            $request->file('logo_footer')->move(public_path('uploads/logo_footer/settings/'), $name);

            $data['logo_footer'] = $name;
        }


        Setting::create($data);

        return redirect()->route('admin.settings.index')->with('success', 'تم إضافة  بنجاح');
    }

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(UpdateSettingsRequest $request, $id)
    {


        $settings = Setting::select("id")->where('id', $request->id)->first();

        $data = [

            'paragh_contact_text' => $request->paragh_contact_text,
            'Terms_and_Conditions' => $request->Terms_and_Conditions,
            'status'         => 'Active',
        ];

        // رفع الصورة الجديدة إذا وجدت
        if ($request->hasFile('logo_header')) {
            $file = $request->file('logo_header');
            $name = Str::random(12) . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/logo_header/settings'), $name);
            $data['logo_header'] = $name;

            // حذف الصورة القديمة إذا موجودة
            if ($settings->logo_header && file_exists(public_path('uploads/logo_header/settings/' . $settings->logo_header))) {
                unlink(public_path('uploads/logo_header/settings/' . $settings->logo_header));
            }
        }



        if ($request->hasFile('logo_footer')) {
            $file = $request->file('logo_footer');
            $name = Str::random(12) . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/logo_footer/settings'), $name);
            $data['logo_footer'] = $name;

            // حذف الصورة القديمة إذا موجودة
            if ($settings->logo_footer && file_exists(public_path('uploads/logo_footer/settings/' . $settings->logo_footer))) {
                unlink(public_path('uploads/logo_footer/settings/' . $settings->logo_footer));
            }
        }

        Setting::where('id', $request->id)->update($data);

        return redirect()->route('admin.settings.index')->with('success', 'Setting updated successfully.');
    }


    public function delete(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);

        // حذف الصورة إذا كانت موجودة
        if ($setting->logo_header && File::exists(public_path('uploads/logo_header/settings/' . $setting->logo_header))) {
            File::delete(public_path('uploads/logo_header/settings/' . $setting->logo_header));
        }

        if ($setting->logo_footer && File::exists(public_path('uploads/logo_footer/settings/' . $setting->logo_footer))) {
            File::delete(public_path('uploads/logo_footer/settings/' . $setting->logo_footer));
        }

        // حذف الصفحة
        $setting->delete();

        return redirect()
            ->route('admin.settings.index')
            ->with('success', 'لقد تم حذف البيانات بنجاح');
    }
    public function toggle_active($id)
    {
        $team = Setting::findOrFail($id);
        if ($team->status) {
            $team->update([
                'status' => $team->status == StatusEnum::ACTIVE ? StatusEnum::INACTIVE : StatusEnum::ACTIVE,
            ]);
        } else {
            $team->update([
                'status' => StatusEnum::ACTIVE,
            ]);
        }
        session()->flash('success', __('The data has been updated successfully'));
        return back();
    }
}
