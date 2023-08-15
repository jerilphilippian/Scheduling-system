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
    public $fname;
    public $mname;
    public $lname;
    public $role_id;

    // validation
    protected $rules = [
        'email' => 'required|email',
        'fname' => 'required',
        'mname' => 'required',
        'lname' => 'required',
        'password' => 'required|same:confirmPassword',
        'confirmPassword' => 'required|same:password'
    ];

    // save user data to database
    public function saveUser(){

        // validate the input
        $this->validate();

        try {
            DB::beginTransaction();
            $user = new User();
            $user->name = $this->fname.' '.$this->lname;
            $user->email = $this->email;
            $user->role_id = $this->role_id;
            $user->password = Hash::make($this->password);

            if($user->save()){
                $userData = new UserData();
                $userData->user_id = $user->id;
                $userData->first_name = $this->fname;
                $userData->middle_name = $this->mname;
                $userData->last_name = $this->lname;
                $userData->position = 'CEO';
                $userData->department_id = 1;

                $userData->save();
                DB::commit();

                return redirect()->route('user-management.index');

            }
        } catch (\Throwable $th) {
            //throw $th;
            // dd($th->getMessage());
        }
    }
    // save user data to database

    public function render()
    {
        return view('livewire.user-management.create');
    }
}
