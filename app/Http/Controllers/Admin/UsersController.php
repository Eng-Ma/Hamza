<?php

namespace App\Http\Controllers\Admin;

use App\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\AdminActionNotification;
use Illuminate\Http\Request;

class UsersController extends Controller
{
       function index() {
        $users = User::select()->paginate(10);
        return view('admin.users.index', compact('users'));//
    }
    public function create()
    {
        $users = new User();
        return view('admin.users.create',compact('users'));
    }
    public function store(Request $request)
    {
        try{
            $data_insert['name']=$request->name;
            $data_insert['email']=$request->email;
            $data_insert['password'] = bcrypt($request->password);

            User::create($data_insert);

            $admins = User::where('role', 'admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new AdminActionNotification('Add User :  ' . $data_insert['name']));
        }
            return redirect()->route('admin.users.index')->with('success','تم اضافة مستخدم بنجاح');
        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }

    public function edit(string $id)
    {
       $user = User::findOrFail($id);
       return view('admin.users.edit',compact('user'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{

            $checkExists = User::select("id")->where(['name' =>$request->name,'email'=>$request->email])->where('id','!=',$id)->orderby('id','DESC')->first();
            if(!empty($checkExists)){
                return redirect()->back()->with(['error'=>'عفوا الاسم او الايميل مكرر']);
            }
            $data_update['name']=$request->name;
            $data_update['email']=$request->email;
            $data_update['password']=bcrypt('password');

            User::where('id',$id)->update($data_update);
            return redirect()->route('admin.users.index')->with('success','تم تحديث الغرفة بنجاح');
        }catch(\Exception $ex){
            return redirect()->back()->with(['error' => 'عفوا حدث خطأ ما' . $ex->getMessage()]);
        }
    }

      public function delete(Request $request)
    {
        $id = $request->id;
         User::findOrFail($id)->delete();
         return redirect()->route('admin.users.index')->with(['success' => 'لقد تم حدف البيانات بنجاح']);

    }

    public function toggle_active($id)
    {
        $team = User::findOrFail($id);
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
