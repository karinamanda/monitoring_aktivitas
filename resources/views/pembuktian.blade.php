<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="20220299.141015140632.png">
    <!--<link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/all.min.css">-->
    <title>Aktivitas Keagamaan || SMK WIKRAMA BOGOR</title>
   <!-- <style>
         .container{
            width: 900px;
            margin-top:50px;
            margin-bottom:50px;
            box-shadow: 0 3px 20px rgba(0,0,0,0.4);
            padding:40px;
        }
    </style>-->
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
  <div class="container" style="margin-left:300px;">
  <div class="card mb-3"style="width: 900px; margin-top:50px; margin-bottom:100px; padding:40px; border-radius:10%;">
  <img src="ilustrasi2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <div style="background:white;">
        <h4 class="text-center">LAPORKAN</h4>
            <table class="table table-hover">
            <tr>
                <th>Waktu</th>
                <th>Aktivitas</th>
                <th>Bukti</th>
            </tr>
            <tr>
                <form action="/pembuktian/create" method="post" enctype="multipart/form-data" >
                {{csrf_field()}}
                   <td> <div class="form-group">
                        <?php $tgl=date('h:i:sa'); ?>
                        <input type="text" value="<?php echo $tgl;?>">
                    </div></td>
                    <td><div class="form-group">
                        <input type="text" name="aktivitas">
                    </div></td>
                    <td><div class="form-group">
                        <input type="file" name="bukti">
                    </div></td>
                </form>
            </tr>
            </table>
            <button type="submit" class="btn btn-sm btn-primary" style="float:right;"> Kirim </button>
            <a href="/menu" class="btn btn-danger">Kembali</a>
        </div>
        </div>
  </div>
</div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="fontawesome/js/all.min.js"></script>
    <script src="bootstrap/js/all.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>