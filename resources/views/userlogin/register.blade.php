

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
    <header>
        @include('components.navbar')
    </header>
    <body >

        <div class="container px-4 py-5" id="custom-cards">


            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
              <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                      </li>
                      <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                        <small>Earth</small>
                      </li>
                      <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                        <small>3d</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                      </li>
                      <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                        <small>Pakistan</small>
                      </li>
                      <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                        <small>4d</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                  <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
                    <ul class="d-flex list-unstyled mt-auto">
                      <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                      </li>
                      <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                        <small>California</small>
                      </li>
                      <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                        <small>5d</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>

        {{-- <div class="b-example-divider"></div>
        <h2 class="pb-2 border-bottom">Custom cards</h2> --}}

    </body>
    <div class="divider"></div>
    @include('components.footer')

    <script src="{{ ('js/bootstrap.bundle.min.js')}}" ></script>
    <script src="{{ ('js/popper.min.js')}}" ></script>
    {{-- <script src="{{ ('js/bootstrap.min.js')}}"></script> --}}

</html>
