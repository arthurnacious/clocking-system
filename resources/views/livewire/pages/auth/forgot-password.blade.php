<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $this->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>

<div>

    <!--begin::Heading-->
    <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-gray-900 fw-bolder mb-3">
            Forgot Password
        </h1>
        <!--end::Title-->
    </div>
     <!--begin::Separator-->

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="sendPasswordResetLink" class="form w-100" >
        <!--begin::Separator-->
        <div class="separator separator-content my-14">
           <span class="w-200px text-gray-500 fw-semibold fs-7">Password Reset</span>
        </div>
        <!-- Email Address -->
        <!--begin::Input group--->
        <div class="fv-row mb-8">
            <!--begin::Email-->
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email"
                        id="email"
                        placeholder="Email"
                        class="bg-transparent"
                        autocomplete="off"
                        type="email"
                        name="email"
                        required autofocus />
            <x-input-error :messages="$errors->get('email')" />
            <!--end::Email-->
        </div>
        <!--end::Input group--->


        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary" wire:loading.attr="disabled">
                <!--begin::Indicator label-->
                <span wire:loading.remove class="indicator-label">
                    Sign In
                </span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span wire:loading class="indicator-progress">
                    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
                <!--end::Indicator progress-->
            </button>
        </div>
        @if (Route::has('login'))
            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                <!--begin::Link-->
                <a href="{{route('login')}}" class="link-primary" wire:navigate>
                    Rather Logn ?
                </a>
                <!--end::Link-->
            </div>
        @endif
    </form>
</div>
