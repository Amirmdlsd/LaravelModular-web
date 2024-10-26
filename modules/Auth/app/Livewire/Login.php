<?php

namespace Modules\Auth\Livewire;

use http\Client\Curl\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required')]
    public $email;
    #[Validate('required|min:6')]
    public $password;

    public $remember;

    public function loginUser()
    {
        $this->validate();
        if(auth()->attempt(['email' => $this->email, 'password' => $this->password],$this->remember)){
            $user = \App\Models\User::query()->where('email',$this->email)->first();
            Auth::login($user);
            $this->redirectRoute('panel');
        }else{
            session()->flash('msg','رمز یا ایمیل اشتباه است');
        }

    }
    #[Layout('auth::layouts.master')]
    public function render()
    {
        return view('auth::livewire.login');
    }
}
