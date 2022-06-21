<x-guest-layout>
    <style>
        svg{
            width: 20vw !important;
        }
        button{
            background-color: white !important;
            color: #004098 !important;
            border: 1px #004098 solid !important;
            font-weight: 600 !important;
        }
        .w-full{
            background-color: #ffffff !important;
            box-shadow: unset !important;
            border: #004098 1px solid !important;
            border-radius: unset !important;
        }
    </style>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo style="width: 20vw !improtant" class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('請輸入註冊時的信箱來領取密碼重設連結。') }}
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
                    {{ __('送出') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
