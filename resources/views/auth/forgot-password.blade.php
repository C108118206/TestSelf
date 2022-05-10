<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="flex">
                <img src="/img/logo_notitle.png" class="w-20 h-20 fill-current text-gray-500" >
                <p class="text-3xl text-center my-auto px-2">TestSelf</p>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('忘記密碼了嗎？沒問題。只需讓我們知道您的電子郵件，我們就會通過電子郵件向您發送一個密碼重置信件，讓您可以重置密碼。') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('密碼重置信件發送') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
