<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAngelesRequest;
use App\Http\Requests\Admin\UpdateAngelesRequest;
use App\Models\Angele;
use App\Models\User;
use App\Notifications\AdminActionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AngelesController extends Controller
{
       function  index()
    {
        $angeles = Angele::orderby('id', 'desc')->paginate(10);

        return view('admin.angeles.index', compact('angeles'));
    }
    public function create()
    {
        $angele = new Angele();
        return view('admin.angeles.create', compact('angele'));
    }

    public function store(CreateAngelesRequest $request)
    {
        $data = [
            'text'     => $request->text,
            'desc'     => $request->desc,
            'status'         => 'Active',
        ];

        Angele::create($data);
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new AdminActionNotification('Add Angele :  ' . $data['text']));
        }
        return redirect()->route('admin.angeles.index')->with('success', 'تم إضافة  بنجاح');
    }

    public function edit($id)
    {
        $angele = Angele::findOrFail($id);
        return view('admin.angeles.edit', compact('angele'));
    }

    public function update(UpdateAngelesRequest $request, $id)
    {


         $angele = Angele::select("id")->where('id',$request->id)->first();

        $data = [
          'text'     => $request->text,
            'desc'     => $request->desc,
            'status'         => 'Active', // احتفظ بالحالة الحالية
        ];


        Angele::where('id',$request->id)->update($data);

        return redirect()->route('admin.angeles.index')->with('success', 'Angele updated successfully.');
    }


    public function delete(Request $request, $id)
    {
        $angele = Angele::findOrFail($id);

        // حذف الصفحة
        $angele->delete();

        return redirect()
            ->route('admin.abouts.index')
            ->with('success', 'لقد تم حذف البيانات بنجاح');
    }
    public function toggle_active($id)
    {
        $team = Angele::findOrFail($id);
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
