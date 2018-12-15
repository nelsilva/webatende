<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Login </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon">
</head>

<body>
  <div class="container-scroller" id="app">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="label">Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" autocomplete="off">
                  </div>
                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label class="label">Senha</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="******" autocomplete="off">
                  </div>
                  @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="remember"> Manter Conectado
                    </label>
                  </div>
                  <a href="#" class="text-small forgot-password text-black">Esqueci a senha</a>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Não cadastrado?</span>
                  <a href="{{route('register')}}" class="text-black text-small">Crie uma nova conta</a>
                </div>
              </form>
            </div>
            <p class="footer-text text-center">Copyright © {{date('Y')}} WebAtende. Todos os direitos reservados.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- Scripts -->
  <script src="{{ asset('js/manifest.js') }}"></script>
  <script src="{{ asset('js/vendor.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
