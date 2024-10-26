<?php

namespace Modules\Auth\Livewire;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ResetPassword extends Component
{
    #[Url]
    public $email;

    public $token;
    #[Validate('required|min:6|confirmed')]
    public $password;

    public $password_confirmation;

    public function mount($token)
    {
        $this->token = $token;
    }

    public function resetPassword()
    {
        $this->validate();
        $result = Password::reset([
            "email" => $this->email, "password" => $this->password,'token'=>$this->token
        ],function ($user, $password) {
            $user->forceFill([
               'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
            $user->save();
            event(new PasswordReset($user));
        });
        if($result===Password::PASSWORD_RESET){
            return redirect()->route('login')->with('msg',"تغییر پسورد با موفقیت انجام شد");
        }else{
            session()->flash('msg',"خظادرتغییر پسورد");
        }
    }

    #[Layout("auth::layouts.master")]
    public function render()
    {
        return view('auth::livewire.reset-password');
    }
}
