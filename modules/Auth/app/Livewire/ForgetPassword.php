<?php

namespace Modules\Auth\Livewire;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Modules\Auth\Models\User;

class ForgetPassword extends Component
{
    #[Validate('required')]
    public $email;

    public function sendResetPassword(): void
    {
        $this->validate();

        $user = User::query()->where('email', $this->email)->first();

        if ($user) {
            $reset_password = Password::sendResetLink(['email'=>$this->email]);
            if ($reset_password === Password::RESET_LINK_SENT) {
                session()->flash('msg', 'ایمیل با موفقیت ارسال شد');
            } else {
                session()->flash('msg', 'ارسال ایمیل با خطا مواجه شد');
            }
        } else {
            session()->flash('msg', 'ایمیل وارد شده وجود ندارد');
        }
    }

    #[Layout('auth::layouts.master')]
    public function render()
    {
        return view('auth::livewire.forget-password');
    }
}
