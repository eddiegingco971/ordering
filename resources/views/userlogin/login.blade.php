
      <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        {{-- <script src="{{ ('css/ootstrap.min.css') }}" defer></script> --}}
        <link rel="stylesheet" href="{{('css/bootstrap.min.css')}}">

        <style>
            .form-signin {
          max-width: 330px;
          padding: 15px;
        }

        .form-signin .form-floating:focus-within {
          z-index: 2;

        }

        .form-signin input[type="email"] {
          margin-bottom: -1px;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }
        </style>

    </head>
    <body >
        @include('components.navbar')
        <main class="card form-signin w-100 m-auto mt-5">
            <form>
                <img class="mb-4 mt-5" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> --}}
              </form>

        </main>

    </body>
    <div class="divider"></div>
    @include('components.footer')

    <script src="{{ ('js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{ ('js/popper.min.js')}}" ></script>
    {{-- <script src="{{ ('js/bootstrap.min.js')}}"></script> --}}

</html>
