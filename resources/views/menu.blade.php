<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="20220299.141015140632.png">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/all.min.css">
    <title>Menu || SMK WIKRAMA BOGOR</title>
    <style>
    h4{
        margin-top:20px;
        width:400px;
        padding:40px;
    }
    img{
        border-radius:50%;
    }
    </style>
  </head>
  <body style="background:url('bckk.jpg');">
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
        <div class="jumbotron" style="background-image:url('ilustrasi2.jpg');height:800px; width:1200px; margin-left:50px; margin-top:50px; border-radius:50%;">
        <h1 class="text-center" style=" height:200px; margin-top:-115px;border:1px solid black; background:peachpuff; border-radius:30px; border-color:peachpuff;"><br>MONITORING AKTIVITAS PESERTA DIDIK <br> SMK WIKRAMA BOGOR</h1>
        </div>
      <form action="">
      <img src="form.jpg" alt="" style="height:800px;width:900px; margin-left:20px;">
      <a  href="/datadiri" class=" text-center btn btn-primary" style=" border-radius:100px; width:150px; height:150px; margin-top:600px; margin-left:-200px;"><p class="text-center" style="margin-top:50px;"><b>Data Diri</b></p> </a><br><br><br><br>
      <img src="time2.jpg" alt="" style="margin-top:-1000; margin-left:400px;height:900px;width:900px;"><br><br><br><br><br>
      <a  href="/setjadwal" class=" text-center btn btn-dark" style=" border-radius:100px; width:150px; height:150px; margin-top:-400px; margin-left:500px;"><p class="text-center" style="margin-top:50px;"><b>Buat Jadwal</b></p> </a>
      <img src="check.jpg" alt="" style="height:800px;width:900px; margin-left:20px;">
      <a  href="/pembuktian" class=" text-center btn btn-secondary" style="border-radius:100px; width:150px; height:150px; margin-top:600px; margin-left:-200px;"><p class="text-center" style="margin-top:40px;"><b>Isi Data Kegiatan</b></p> </a><br><br><br><br>
      <img src="data.jpg" alt="" style="margin-top:-1000; margin-left:400px;height:900px;width:900px;">
      <a  href="/raport" class=" text-center btn btn-info" style=" border-radius:100px; width:150px; height:150px; margin-top:-300px; margin-left:450px;"><p class="text-center" style="margin-top:40px;"><b>Laporan Kegiatan</b></p> </a>
      
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="fontawesome/js/all.min.js"></script>
    <script src="bootstrap/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>