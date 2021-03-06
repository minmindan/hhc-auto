<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入頁面</title>
    <link rel="icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
        }

        #login-id {
            width: 100%;
            height: 100vh;
            background-color: #F7F8FA;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }



        .type-box {
            width: 488px;
        }

        .function-box {
            width: 488px;
        }

        .type-box input {
            width: 100%;
            height: 57px;
            border: 0px;
            background-color: #EAEEF3;
            margin-bottom: 30px;
            letter-spacing: 0.06em;
            padding-left: 20px;
            border-radius: 5px;
            font-size: 20px;
        }

        .function-box {
            display: flex;
            justify-content: space-between;
        }

        .login-btn button {
            width: 482px;
            height: 57px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-top: 20px;
            background-color: white;
            border: 1px solid #004098;
            border-radius: 5px;
        }

        .login-btn .login-img {
            width: 60.25px;
            height: 7px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            right: 25%;
        }

        .login-btn .login-img img {
            transform: translate(50%, 25%);
            width: 100%;
            height: 100%;
        }

        .login-btn p {
            color: #004098;
            font-size: 20px;
            line-height: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-btn img {
            width: 100%;
            height: 100%;
        }


        .logo-img {
            width: 488px;
            height: 280px;
        }

        .logo-img img {
            width: 100%;
            height: 100%;
        }

        .login-text {
            width: 55px;
            height: 36px;
            display: flex;
            justify-content: center;
            align-self: center;
            position: absolute;
        }

        .forgetpasswordbox a {
            text-decoration: none;
        }

        .rememberme span {
            color: #6F8BB7;
            letter-spacing: 0.05em;
        }

        .w-full {
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
            max-width: unset !important;
        }
    </style>
</head>

<body>
    <main>
        <x-guest-layout>
            <x-auth-card>

                <div id="login-id">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- logo -->
                        <div class="logo-img">
                            <img src="{{ asset('image/login/login-logo.svg') }}" alt="">
                        </div>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="container">
                            <div class="type-box">
                                <!-- e-mail -->
                                <div class="emailbox">
                                    <input type="text" name="email" placeholder="Email　電子郵件信箱">
                                </div>
                                <!-- password -->
                                <div class="passwordbox">
                                    <input type="password" name="password" placeholder="Password 密碼">
                                </div>
                            </div>
                            <div class="function-box">
                                <!-- Remember Me -->
            {{-- <div class="block">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 ">{{ __('記住我') }}</span>
                </label>
            </div> --}}
                                <!-- forget password -->
                                <div style="margin-left: auto;" class="forgetpasswordbox">
                                    <a href="{{ route('password.request') }}">
                                        <span>忘記密碼？</span>
                                    </a>
                                </div>
                            </div>
                            <!-- login botton -->
                            <div class="login-btn">
                                <button type="submit">
                                    <div class="login-text">
                                        <p>登入</p>
                                    </div>
                                    <div class="login-img">
                                        <img src="{{ asset('image/login/blue_right.svg') }}" alt="">
                                    </div>
                                </button>
                            </div>
                        </div>
                </div>
                </form>
            </x-auth-card>
        </x-guest-layout>
    </main>
</body>

</html>
