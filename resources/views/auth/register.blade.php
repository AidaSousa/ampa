<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#009688">
        <link rel="stylesheet" type="text/css" href="/css/main.temp.css">

        <title>Rexistro</title>
    </head>

    <body>
        <section class="material-half-bg">
            <div class="cover"></div>
        </section>
        <section class="login-content">
            <div class="logo">
                <h1>Montevixia</h1>
            </div>
            <div class="login-box col-sm-6 justify-center w">
                <div id="divLoading">
                    <div>
                        <!--<img src="/img/loading.svg" alt="Loading">-->
                    </div>
                </div>
                <form method="POST" action="{{ route('register') }}" class="form-horizontal mx-auto">
                    @csrf
                    <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                        <label for="name" class="control-label">Nome</label>
                        <input id="name" class="form-control" type="text" name="name" required autofocus autocomplete="name" />
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                        <label for="surname" class="control-label">Apelidos</label>
                        <input id="surname" class="form-control" type="text" name="surname"  required autofocus autocomplete="surname" />
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input id="email" class="form-control" type="email" name="email" required autocomplete="username" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="dni" class="control-label">ID</label>
                        <input id="dni" class="form-control" type="text" name="dni"  required autofocus autocomplete="dni" />
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="beca_comedor" class="control-label">Sodes solicitantes da beca comedor?</label>
                        <select id="beca_comedor" class="form-control" name="beca_comedor">
                            <option selected="">Seleccione a súa situación</option>
                            <option value="si">Si</option>
                            <option value="no">Non</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="telefono" class="control-label">Teléfono</label>
                        <input id="telefono" class="form-control" type="text" name="telefono"  required autofocus autocomplete="telefono" />
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="direccion" class="control-label">Enderezo</label>
                        <textarea id="direccion" class="form-control" rows="2" name="direccion"  required autofocus autocomplete="direccion" ></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="colaboracion_ampa" class="control-label">No caso de estar interesado/a en colaborar coa ANPA, qué consideras que podes aportar? En que área te gustaría axudar ? (festas, actividades, comedor, subvencións, horta...)</label>
                        <textarea id="colaboracion_ampa" class="form-control" rows="2" name="colaboracion_ampa"  required autofocus autocomplete="colaboracion_ampa" ></textarea>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <x-label for="password" value="{{ __('Password') }}" class="mx-auto control-label text-center"/>
                        <x-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="mx-auto control-label text-center"/>
                        <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    </div>
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
                        <button class="btn btn-primary">
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