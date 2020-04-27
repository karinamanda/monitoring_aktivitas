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
    <title>Laporan || SMK WIKRAMA BOGOR</title>
    <style>
        .container{
            width: 600px;
            margin-top:100px;
            margin-bottom:50px;
            box-shadow: 0 3px 20px rgba(0,0,0,0.10);
            border-radius:10%;
            padding:40px;
            background:white;
        }
    </style>
  </head>
  <body style="background:url('color full.jpg');">
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
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
      <div class="container">
      <h2 class="text-center">LAPORAN HASIL MONITORING AKTIVITAS PESERTA DIDIK</h2><br><br><br>
      @foreach ($data_siswa as $siswa)
      <p style="float:left; margin-right:200px;">Nama    : {{$siswa->nama}}</p>
      <p>NIS     : {{$siswa->nis}}</p>
      <p style="float:left; margin-right:280px;">Rombel  : {{$siswa->rombel}}</p>
      <p>Rayon   : {{$siswa->rayon}}</p>
      @endforeach
      <h4 class="text-center">Agenda</h4><br><br><br>
          
          <table class="table table-hover">
              <tr style="margin-left:50px;">
                  <th>Mulai</th>
                  <th>Akhir</th>
                  <th>Aktivitas</th>
                  <th>Implementasi</th>
              </tr>
              @foreach($set_jadwal as $jadwal )
              <tr>
                  <td>{{$jadwal->mulai}}</td>
                  <td>{{$jadwal->akhir}}</td>
                  <td>{{$jadwal->aktivitas}}</td>
                  <td>{{$jadwal->implementasi}}</td>
              </tr>
              @endforeach
          </table> <br><br><br>
          <h4 class="text-center">Pengumpulan aktivitas</h4><br><br><br>
          <table class="table table-hover">
              <tr style="margin-left:50px;">
                  <th>Waktu</th>
                  <th>Aktivitas</th>
                  <th>Bukti</th>
              </tr>
              @foreach($data_bukti as $b )
              <tr>
                  <td>{{$b->waktu}}</td>
                  <td>{{$b->aktivitas}}</td>
                  <td>{{$b->bukti}}</td>
              </tr>
              @endforeach
          </table>
          
          <a href="/menu" class="btn btn-danger">Kembali</a>
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