<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateContactRequest;
use App\Http\Requests\Admin\UpdateContactRequest;
use App\Models\Contact;
use App\Models\User;
use App\Notifications\AdminActionNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index()  {
        $contacts = Contact::orderby('id', 'desc')->paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }

    public function create()
    {
        $contact = new Contact();
        return view('admin.contact.create', compact('contact'));
    }

    public function store(CreateContactRequest $request)
    {
        $data = [
            'questions'     => $request->questions,
            'description'     => $request->description,
            'order_link'     => $request->order_link,
            'info_link'     => $request->info_link,
            'linkedin'     => $request->linkedin,
            'twitter'     => $request->twitter,
            'youTube'     => $request->youTube,
            'instagram'     => $request->instagram,

            'status'         => 'Active',
        ];

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $name = Str::random(12) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/image/contact/'), $name);

            $data['image'] = $name; // فقط اسم الملف
        }


        Contact::create($data);
        $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new AdminActionNotification('Add Contact :  ' . $data['questions']));
        }
        return redirect()->route('admin.contacts.index')->with('success', 'تم إضافة  بنجاح');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.Contact.edit', compact('contact'));
    }

    public function update(UpdateContactRequest $request, $id)
    {


        $contact = Contact::select("id")->where('id', $request->id)->first();

        $data = [
           'questions'     => $request->questions,
            'description'     => $request->description,
            'order_link'     => $request->order_link,
            'info_link'     => $request->info_link,
            'linkedin'     => $request->linkedin,
            'twitter'     => $request->twitter,
            'youTube'     => $request->youTube,
            'instagram'     => $request->instagram,
            'status'         => 'Active',
        ];

        // رفع الصورة الجديدة إذا وجدت
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Str::random(12) . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/image/contact/'), $name);
            $data['image'] = $name;

            // حذف الصورة القديمة إذا موجودة
            if ($contact->image && file_exists(public_path('uploads/image/contact/' . $contact->image))) {
                unlink(public_path('uploads/image/contact/' . $contact->image));
            }
        }


        Contact::where('id', $request->id)->update($data);

        return redirect()->route('admin.contacts.index')->with('success', 'Contact updated successfully.');
    }


    public function delete(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);

        // حذف الصورة إذا كانت موجودة
        if ($contact->image && File::exists(public_path('uploads/image/contact/' . $contact->image))) {
            File::delete(public_path('uploads/image/contact/' . $contact->image));
        }
        // حذف الصفحة
        $contact->delete();

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'لقد تم حذف البيانات بنجاح');
    }
    public function toggle_active($id)
    {
        $team = Contact::findOrFail($id);
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
