<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Arancha Fernandez">
        <meta name="theme-color" content="#009688">
        <link rel="stylesheet" type="text/css" href="/css/main.temp.css">
        <script src="https://kit.fontawesome.com/1f8958484c.js" crossorigin="anonymous"></script>
        <title>Login</title>
    </head>
    <body>
        <section class="material-half-bg">
            <div class="cover"></div>
        </section>
        <section class="login-content">
            <div class="logo">
                <h1>Montevixia</h1>
            </div>
            <div class="login-box">
                <div id="divLoading" >
                    <div>
                    <!-- <img src="/img/loading.svg" alt="Loading"> -->
                </div>
            </div>
            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" class="login-form" name="formLogin" id="formLogin" action="{{ route('login') }}">
                @csrf

                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESIÓN</h3>

                <div class="form-group">
                    <x-label for="email" value="{{ __('Email') }}"  class="control-label"/>
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="form-group">
                    <x-label for="password" value="{{ __('Password') }}" class="control-label" />
                    <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="form-group">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="form-group">
                    <div class="flex justify-between mx-2">
                        <button class="btn btn-primary ml-5 mb-1">
                            {{ __('Log in') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="ml-5 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
    </body>
</html>