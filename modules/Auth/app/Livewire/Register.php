<?php

namespace Modules\Auth\Livewire;


use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Modules\Auth\Models\User;

class Register extends Component
{
    #[Validate('required')]
    public $name;
    #[Validate('required')]
    public $email;
    #[Validate('required')]
    public $password;

    public $remember;

    public function registerUser()
    {
        $this->validate();
        $user = User::query()->create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>Hash::make($this->password),
        ]);
        Auth::login($user);
        event(new Registered($user));

        $this->redirectRoute('verify-email');
    }

    #[Layout('auth::layouts.master')]
    public function render()
    {
        return view('auth::livewire.register');
    }
}
