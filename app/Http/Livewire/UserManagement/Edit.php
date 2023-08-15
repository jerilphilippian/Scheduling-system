<?php

namespace App\Http\Livewire\UserManagement;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Edit extends Component
{

    public $userId;
    public $email;
    public $fname;
    public $mname;
    public $lname;
    public $department;
    public $password;

    public $role_id;

    public function mount($user){
        $this->userId = $user;
        $userEdit = User::with('users_data')->find($user);
        $this->email = $userEdit->email;
        $this->fname = $userEdit->users_data->first_name;
        $this->mname = $userEdit->users_data->middle_name;
        $this->role_id = $userEdit->role_id;
        $this->lname = $userEdit->users_data->last_name;
        $this->department = $userEdit->users_data->department->id;
    }

    // update user data
    public function updateUser(){
        try {
            DB::beginTransaction();
            $editUser = User::with('users_data')->find($this->userId);
            $editUser->name = $this->fname.' '.$this->lname;
            $editUser->role_id = $this->role_id;
            $editUser->email = $this->email;

            if($editUser->save()){
                $editUser->users_data->first_name = $this->fname;
                $editUser->users_data->middle_name = $this->mname;
                $editUser->users_data->last_name = $this->lname;
                $editUser->users_data->department_id = $this->department;
                DB::commit();
                $editUser->users_data->save();
                return redirect()->route('user-management.index');
            }else{
                dd('user update failed');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }
    }
    // update user data

    public function render()
    {
        return view('livewire.user-management.edit');
    }
}
