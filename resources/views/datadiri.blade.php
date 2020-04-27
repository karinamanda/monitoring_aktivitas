<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="icon.jpg">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/all.min.css">
    <title>Data Diri || SMK WIKRAMA BOGOR</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-light bg-transparent">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
        </nav>
        <div class="jumbotron" style="background-image:url('bckk.jpg'); height:200px; margin-top:-55px;">
</div>
      <div class="card mb-3" style="width: 1348px; margin-top:-32px;border:none;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="orang.jpg" style="height:500px; width:400px;" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h4 class="text-center">MONITORING AKTIVITAS PESERTA DIDIK <br> SMK WIKRAMA BOGOR</h4><hr>
      <form action="/datadiri/create" method="post" enctype="multipart/form-data" style="margin-left:50px;" >
      {{csrf_field()}}
      <label for="">NIS : </label>
      <input type="text" name="nis" style="margin-left:87px; margin-bottom:20px; width:500px; margin-top:50px;"><br>
      <label for="">Nama : </label>
      <input type="text" name="nama" style="margin-left:70px; margin-bottom:20px; width:500px;  "><br>
      <label for="">Email : </label>
      <input type="email" name="email" style="margin-left:74px; margin-bottom:20px; width:500px;  "><br>
      <label for="">Rombel : </label>
      <input type="text" name="rombel" style="margin-left:57px; margin-bottom:20px; width:500px;  "><br>
      <label for="">Rayon : </label>
      <input type="text" name="rayon" style="margin-left:67px; margin-bottom:20px; width:500px;  "><br>
      <button type="submit" class="btn btn-success" style="width:235px;margin-left:122px;">Tambahkan</button>
      <a href="/menu" class="btn btn-danger" style="margin-left:25px;width:235px;">Kembali</a>
      </form> 
      </div>
    </div>
  </div>

          
           
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="fontawesome/js/all.min.js"></script>
    <script src="bootstrap/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>