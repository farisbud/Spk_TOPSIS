<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('asset/css/bootstrap.css') }}" rel="stylesheet" />
</head>
<body>
    <main>
        <div class="container">
            <div class="d-flex align-items-center" style="height: 85vh">
                <div class="col-md-10">
                    <div class="row justify-content-center">
                            <div class="card" style="width: 35rem;">
                                @if (session('pesan'))
                                <div class="alert alert-success">
                                    {{session('pesan')}}
                                </div>
                                @endif
                                <div class="card-body">
                                <h5 class="card-title"><center>Login</center></h5>
                                <h6 class="card-subtitle mb-4 text-muted"><center>SPK TOPSIS</center></h6>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control @error('username') is-invalid @enderror" name="username">
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                      </div>
                                      <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                      </div>
                                      <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                      </div>
                                </form>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<script src="{{asset('asset/js/bootstrap.bundle.js')}}"></script>

</body>
</html>
