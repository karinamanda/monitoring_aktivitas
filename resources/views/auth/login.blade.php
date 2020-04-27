<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login || SMK WIKRAMA</title>
    <link rel="icon" href="icon.jpg">
    <style>
        .container{
            width: 500px;
            height:450px;
            margin-top:100px;
            box-shadow: 0 3px 20px rgba(0,0,0,0.4);
            padding:40px;
        }
        button{
            width:49%;
        }
    </style>
  </head>
  <body>
  
  </head>
  <body>

<div class="card mb-3" style="width:1300px; border:none;height:200px;">
    <div class="row no-gutters">
      <div class="col-md-6">
        <img src="backround register.jpg" class="card-img" alt="...">
      </div>
      <div class="col-md-6">
        <div class="card-body">

        <form method="POST" action="{{ route('login') }}" style="margin-left:200px; margin-top:200px;">
                     <h4 class="text-center">MONITORING AKTIVITAS PESERTA DIDIK <br>SMK WIKRAMA BOGOR</h4><hr>
                        @csrf
                        <div class="form-group row" style="margin-top:40px;">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Email') }}</label>
                            <div style="width:250px;">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="margin-left:10px;" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="margin-top:40px;" >
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                            <div style="width:250px;">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="margin-left:10px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group " style=" margin-top:40px;">
                                <a href="/home" class="btn btn-danger" style=" width:150px;">Kembali</a>
                                <button type="submit" class="btn btn-primary" style=" width:150px; margin-left:85px;">
                                    {{ __('Login') }}
                                </button>
                                <div style="margin-top:30px;">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" style="">Belum memiliki akun?</a>
                                @endif
                                </div>
                        </div>
                    </form>
        </div>
      </div>
    </div>
  </div>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
