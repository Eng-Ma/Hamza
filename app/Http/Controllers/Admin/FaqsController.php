<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateFaqsRequest;
use App\Http\Requests\Admin\UpdateFaqsRequest;
use App\Models\Faq;
use App\Models\User;
use App\Notifications\AdminActionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class FaqsController extends Controller
{
    function  index()
    {
        $faqs = Faq::orderby('id', 'desc')->paginate(10);

        return view('admin.faqs.index', compact('faqs'));
    }
    public function create()
    {
        $faq = new Faq();
        return view('admin.faqs.create', compact('faq'));
    }

    public function store(CreateFaqsRequest $request)
    {
        $data = [
            'question'     => $request->question,
            'answer_question'   => $request->answer_question,
            'status'         => 'Active',
        ];


        Faq::create($data);
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new AdminActionNotification('Add Faq :  ' . $data['question']));
        }
        return redirect()->route('admin.faqs.index')->with('success', 'تم إضافة  بنجاح');
    }

    public function edit($id)
    {
        $faq= Faq::findOrFail($id);
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(UpdateFaqsRequest $request, $id)
    {


        $faqs = Faq::select("id")->where('id', $request->id)->first();

        $data = [
            'question'     => $request->question,
            'answer_question'   => $request->answer_question,
            'status'         => 'Active', // احتفظ بالحالة الحالية
        ];



        Faq::where('id', $request->id)->update($data);

        return redirect()->route('admin.faqs.index')->with('success', 'Faq updated successfully.');
    }


    public function delete(Request $request, $id)
    {
        $faqs = Faq::findOrFail($id);


        $faqs->delete();

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'لقد تم حذف البيانات بنجاح');
    }
    public function toggle_active($id)
    {
        $team = Faq::findOrFail($id);
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
