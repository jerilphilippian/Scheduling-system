<?php

namespace App\Http\Livewire\UserManagement;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use WireUi\Traits\Actions;

class Create extends Component
{

    use Actions;

    public $email;
    public $password;
    public $confirmPassword;
    public $firstName;
    public $middleName;
    public $lastName;
    public $department;
    public $position;
    public $role;
    public $role_id;

    // validation
    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'password' => 'required|same:confirmPassword',
        'confirmPassword' => 'required|same:password',
        'department' => 'required',
        'position' => 'required',
        'role' => 'required',
    ];

    public function saveUser(){

        $this->validate();

        try {
            DB::beginTransaction();
            $user = new User();
            $user->name = $this->firstName.' '.$this->lastName;
            $user->email = $this->email;
            $user->role_id = $this->role_id;
            $user->password = Hash::make($this->password);
            $user->role = $this->role;

            if($user->save()){
                $userData = new UserData();
                $userData->user_id = $user->id;
                $userData->first_name = $this->firstName;
                $userData->middle_name = $this->middleName;
                $userData->last_name = $this->lastName;
                $userData->department_id = $this->department;
                $userData->position_id = $this->position;

                if($userData->save())
                {
                    DB::commit();
                    return redirect()->route('user-management.index');
                }
                else
                {
                    DB::rollBack();
                }
            }
            else
            {
                DB::rollBack();
            }
        } catch (\Throwable $th) {
            //DB::rollBack();
            dd($th->getMessage());
        }
    }
    // save user data to database

    public function render()
    {
        return view('livewire.user-management.create');
    }
}
