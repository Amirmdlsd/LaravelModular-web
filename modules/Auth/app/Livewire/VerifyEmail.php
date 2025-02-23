<?php

namespace Modules\Auth\Livewire;

use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Livewire\Attributes\Layout;
use Livewire\Component;

class VerifyEmail extends Component
{

    public function resendEmailVerification(): void
    {
        auth()->user()->sendEmailVerificationNotification();
    }

    #[Layout('auth::layouts.master')]
    public function render()
    {
        return view('auth::livewire.verify-email');
    }
}
