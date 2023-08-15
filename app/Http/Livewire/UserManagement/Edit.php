<?php

namespace App\Http\Livewire\UserManagement;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    public $userId;
    public $email;
    public $firstName;
    public $middleName;
    public $lastName;
    public $department;
    public $position;
    public $role_id;

    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'department' => 'required',
        'position' => 'required',
        'role_id' => 'required',
    ];

    public function mount($user){
        $this->userId = $user;
        $data = User::with('user_data')->find($user);
        $this->email = $data->email;
        $this->firstName = $data->user_data->first_name;
        $this->middleName = $data->user_data->middle_name;
        $this->lastName = $data->user_data->last_name;
        $this->department = $data->user_data->department->id;
        $this->position = $data->user_data->position->id;
        $this->role_id = $data->user_data->role_id;
    }

    // update user data
    public function updateUser(){
        $this->validate();
        try {
            DB::beginTransaction();
            $editUser = User::with('user_data')->find($this->userId);
            $editUser->name = $this->firstName.' '.$this->lastName;
            $editUser->email = $this->email;
            $editUser->role_id = $this->role_id;

            if($editUser->save()){
                $editUser->user_data->first_name = $this->firstName;
                $editUser->user_data->middle_name = $this->middleName;
                $editUser->user_data->last_name = $this->lastName;
                $editUser->user_data->department_id = $this->department;
                $editUser->user_data->position_id = $this->position;

                if($editUser->user_data->save())
                {
                    DB::commit();
                    return redirect()->route('user-management.index');
                }
                else
                {
                    DB::rollBack();
                }
            }else{
                DB::rollBack();
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
