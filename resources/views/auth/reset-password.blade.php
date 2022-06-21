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
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('輸入新密碼')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('確認新密碼')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('重設密碼') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
