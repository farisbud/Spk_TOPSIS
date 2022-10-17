<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="spk_topsis">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard Template · Bootstrap v5.2</title>
    <link href="{{ asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('asset/css/dashboard.css') }}" rel="stylesheet">
  </head>
  <body>

{{-- header --}}
@include('layout.header')
{{-- /header --}}

{{-- navigasi --}}
    <div class="container-fluid">
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h4 class="h4">Sistem Penunjang Keputusan TOPSIS</h4>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <span class="align-text-bottom"></span>
                    <img src="{{ asset('asset/icon/user.svg') }}" alt="user">
                    <span class="align-text-center px-2" style="padding-top: 2%">Selamat datang, {{ auth()->user()->name }}</span>
                </div>
            </div>
        </div>
    </div>
{{-- //navigasi --}}

<div class="container-fluid">
  <div class="row">

    @include('layout.side-bar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      {{-- content   --}}
      @yield('content')
      {{-- /content --}}
    </main>

  </div>
</div>

    @include('layout.footer')

    <script src="{{ asset('asset/js/dashboard.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  </body>
</html>
