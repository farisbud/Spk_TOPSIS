<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="d-flex justify-content-center pt-5">
            <div class="card" style="width: 18rem;">
                @if (session('pesan'))
                <div class="alert alert-success">
                    {{session('pesan')}}
                  </div>
                @endif
                <div class="card-body" style="height: vh;">
                <h5 class="card-title">Login</h5>
                <h6 class="card-subtitle mb-2 text-muted">Login User</h6>
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Email</label>
                        <input type="email" id="disabledTextInput" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="masukan email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">password</label>
                        <input type="password" id="disabledTextInput" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')

                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary mb-2">Submit</button>

                </form>

                </div>
            </div>
        </div>
    </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
