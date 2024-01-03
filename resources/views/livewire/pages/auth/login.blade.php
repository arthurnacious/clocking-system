<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        // sleep(1);
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirect(
            session('url.intended', RouteServiceProvider::HOME),
            navigate: true
        );
    }
}; ?>

<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <!--begin::Wrapper-->

    <!--begin::Form-->
    <form wire:submit="login" class="form w-100" >
       <!--begin::Heading-->
       <div class="text-center mb-11">
          <!--begin::Title-->
          <h1 class="text-gray-900 fw-bolder mb-3">
             Sign In
          </h1>
          <!--end::Title-->
       </div>
       <!--begin::Separator-->
       <div class="separator separator-content my-14">
          <span class="w-200px text-gray-500 fw-semibold fs-7">Sign in with email</span>
       </div>
       <!--end::Separator-->
       <!--begin::Input group--->
       <div class="fv-row mb-8">
            <!--begin::Email-->
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email"
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
       <!--begin::Input group--->
       <div class="fv-row mb-3">
            <!--begin::Password-->
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input wire:model="form.password"
                        id="password"
                        type="password"
                        placeholder="Password"
                        name="password"
                        autocomplete="off"
                        class="bg-transparent" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          <!--end::Password-->
       </div>
       <!--end::Input group--->

       <!--begin::Input group--->
       <div class="fv-row mb-3">
            <!--begin::Remember-->
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
            <!--end::Remember-->
        </div>
        <!--end::Input group--->
       <!--begin::Submit button-->
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
       <!--begin::Wrapper-->
        @if (Route::has('password.request'))
            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                <!--begin::Link-->
                <a href="{{route('password.request')}}" class="link-primary" wire:navigate>
                    Forgot Password ?
                </a>
                <!--end::Link-->
            </div>
        @endif
       <!--end::Wrapper-->
       <!--end::Submit button-->
    </form>
    <!--end::Form-->
 </div>
