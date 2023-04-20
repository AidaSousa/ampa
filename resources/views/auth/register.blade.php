<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#009688">
        <link rel="stylesheet" type="text/css" href="/css/main.temp.css">

        <title>Registro</title>
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
                <div id="divLoading">
                    <div>
                        <!--<img src="/img/loading.svg" alt="Loading">-->
                    </div>
                </div>
                <form method="POST" action="{{ route('register') }}" class="form-horizontal mx-auto">
                    @csrf
                    <div class="form-group w-75">
                        <label for="name" value="{{ __('Name') }}" class="col-md-8 mt-3 mx-5 control-label text-center">Nombre y apellidos</label>
                        <input id="name" class="form-control mx-5 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
                    <div class="form-group w-75">
                        <x-label for="email" value="{{ __('Email') }}" class="col-md-8 mt-3 mx-5 control-label text-center" />
                        <x-input id="email" class="form-control mx-5 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                    <div class="form-group w-75 pt-4">
                        <x-label for="password" value="{{ __('Password') }}" class="col-md-8 mt-1 mx-4 control-label text-center" />
                        <x-input id="password" class="form-control mx-5 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="form-group w-75">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="col-md-8 mt-3 mx-5 control-label " />
                        <x-input id="password_confirmation" class="form-control mx-5 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
        
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />
        
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="form-group w-75">
                    <div class="flex justify-between mx-2">
                        <a class="ml-4 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <button class="btn btn-primary ml-4">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </section>
        <script src="/js/jquery-3.3.1.min.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/fontawesome.js"></script>
        <script src="/js/main.temp.js"></script>
        <script src="js/pace.min.js"></script>
        <script type="text/javascript" src="/js/sweetalert.min.js"></script>
    </body>
</html>