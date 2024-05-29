<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PKBM Morina</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        display: flex;
        min-height: 100vh;
        margin: 0;
        background-color: #f3f4f6;
    }

    .container {
        display: flex;
        flex: 1;
    }

    .photo-section {
        flex: 0 0 55%;
        background: url('{{ asset('images/your-photo.jpg') }}') no-repeat center center;
        background-size: cover;
    }

    .form-section {
        flex: 0 0 45%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        background-color: #ffffff;
    }

    .form-container {
        width: 100%;
        max-width: 400px;
    }

    .mb-4 {
        margin-bottom: 16px;
    }

    .mt-4 {
        margin-top: 16px;
    }

    .block {
        display: block;
    }

    .w-full {
        width: 100%;
    }

    .text-left {
        text-align: left;
    }

    .text-gray-600 {
        color: #4B5563;
    }

    .text-gray-900 {
        color: #1F2937;
    }

    .text-white {
        color: #ffffff;
    }

    .text-xl {
        font-size: 1.25rem;
    }

    .text-lg {
        font-size: 1rem;
    }

    .font-bold {
        font-weight: 700;
    }

    .rounded-md {
        border-radius: 0.375rem;
    }

    .focus\:outline-none:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .focus\:ring-2:focus {
        box-shadow: 0 0 0 2px;
    }

    .focus\:ring-indigo-500:focus {
        box-shadow: 0 0 0 2px #6366F1;
    }

    .bg-gray-200 {
        background-color: #F2F2F2;
    }

    .input-box {
        height: calc(100% / 10);
        width: 100%;
        padding: 10px;
        border: none;
    }

    .input-label {
        font-size: 1rem;
        font-weight: bold;
    }

    .btn-primary {
        background-color: #2D7FF9;
        color: #ffffff;
        width: 67%;
        height: calc(100% / 10 + 20px);
        padding: 10px;
        cursor: pointer;
        font-size: 1rem;
        display: inline-block;
        text-align: center;
        border: none;
    }

    .btn-primary:hover {
        background-color: #1C6EE8;
    }

    .forgot-password {
        display: none;
    }

    .remember-me {
        margin-top: 0.5rem;
        font-size: 0.875rem;
        color: #4B5563;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="photo-section"></div>
        <div class="form-section">
            <div class="form-container">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Login Heading -->
                <h1 class="text-left text-xl font-bold mb-4" style="font-size: 1.5rem;">{{ __('Login') }}</h1>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="input-label text-left">{{ __('Email') }}</label>
                        <input id="email" class="block mt-1 w-full bg-gray-200 input-box" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="input-label text-left">{{ __('Password') }}</label>
                        <input id="password" class="block mt-1 w-full bg-gray-200 input-box" type="password"
                            name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <button class="btn-primary">
                            {{ __('LOGIN') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>