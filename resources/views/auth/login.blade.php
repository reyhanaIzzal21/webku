<x-guest-layout>
    <style>
                @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        body {
            background: linear-gradient(-45deg,  #1C1CD1, #ff00dd, #FFD700);
            background-size: 300% 300%;
            animation: gradient 2s ease infinite;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }

        .form-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        .form-title {
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
            color: black;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ff00d4;
            border-radius: 5px;
            background: #f9f9f9;
            color: #2c2c2c;
        }

        .form-input::placeholder {
            color: #636363;
        }

        .form-button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(to right, #d400ff, #1C1CD1); /* Gradasi dari ungu ke biru */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .form-button:hover {
            background: linear-gradient(to right, #b700e5, #1b1abf); /* Warna yang sedikit lebih gelap saat hover */
        }

        .form-link {
            display: block;
            margin-top: 10px;
            color: #1C1CD1;
            text-decoration: none;
        }

        .form-link:hover {
            text-decoration: underline;
        }

        .forgot-password {
            margin-top: 20px;
        }
    </style>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="form-container">
        <div class="form-title">{{ __('LOGIN') }}</div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-4">
                <button class="form-button">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="forgot-password">
                @if (Route::has('password.request'))
                    <a class="form-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                @endif
            </div>

            <div class="mt-4">
                <a class="form-link" href="{{ route('register') }}">{{ __("Don't have an account? Sign up") }}</a>
            </div>
        </form>
    </div>
</x-guest-layout>
