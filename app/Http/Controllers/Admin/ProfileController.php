<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{


    public function edit()
    {
        $id=auth()->user()->id;
        $user = User::find($id);
        return view('admin.profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        try {
            $id=auth()->user()->id;
            $user = User::find($id);
            $data_update['name'] = $request->name;
            $data_update['email'] = $request->email;
            $data_update['phone'] = $request->phone;
            User::where(['id'=>$id])->update($data_update);


            return redirect('admin/dashboard/index')->with(['success'=>__('The data has been updated successfully')]);

        } catch (\Exception $ex) {
            return redirect()->back()
                ->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()])
                ->withInput();
        }
    }
     public function showResetPasswordForm()
    {
        $id=auth()->user()->id;
        $user = User::find($id);
        return view('admin.profile.resetPassword', compact('user'));
    }

    public function resetPassword(Request $request)
    {
        $rules = [
            'old_password' => 'required|min:3',
            'new_password' => 'required|min:3',
            'confirm_password' => 'required|min:3|same:new_password',
        ];
        $validated = $request->validate($rules);
        $user = auth()->user();
        if (!Hash::check($request->get('old_password'), $user->password)) {
            $message = 'The old password is incorrect';
            return redirect()->back()->with('danger' , $message);
        }
        if ($request->new_password !== $request->confirm_password) {
            $message = 'The old password is incorrect';
            return redirect()->back()->with('danger' , $message);
        }
        $user->password = bcrypt($request->get('new_password'));


        $data=$user->save();


        return redirect('/admin/dashboard/index')->with(['success'=>__('The data has been updated successfully')]);;
    }


}
