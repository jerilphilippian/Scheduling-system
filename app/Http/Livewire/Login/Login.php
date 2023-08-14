<?php

namespace App\Http\Livewire\Login;

use App\Models\UserLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use WireUi\Traits\Actions;

class Login extends Component
{
    use Actions;
    public $email;
    public $password;
    public $user_id;

    public $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    public function submit(){
        $this->validate();

        $user = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if($user){
            $user_id = Auth::id();
            $this->user_id=$user_id;

            // try {
            //     DB::beginTransaction();

            //     $log = new UserLog();
            //     $log->user_id = $this->user_id;
            //     $log->type = 'login';
            //     $log->description = $this->roomDescription;
            //     $log->capacity = $this->roomCapacity;

            //     if ($room->save()) {
            //         DB::commit();
            //         Auth::login();
            //         return redirect('/');
            //     } else {
            //         $this->dialog()->error(
            //             $title = 'Error !!!',
            //             $description = 'Your profile was not saved'
            //         );
            //         DB::rollBack();
            //     }

            // } catch (\Throwable $th) {
            //     DB::rollBack();
            //     dd($th->getMessage());
            // }

        } else {
            dd('not valid user');
            //dialog not working
            $this->dialog()->error(
                $title     = 'Error!',
                $description = 'User not valid'
            );
        }

    }

    public function render()
    {
        return view('livewire.login.login')
            ->layout('layouts/main');
    }
}
