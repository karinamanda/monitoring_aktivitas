<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Atur Jadwal || SMK WIKRAMA</title>
    <link rel="icon" href="20220299.141015140632.png">
  </head>
  <body style="background:url('bck.jpg');">
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
        
    <div class="container">
    <div class="card mb-3" style="width: 1100px; margin-top:100px; border-radius:50px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="Student on exam.png" class="card-img" alt="..."style="margin-top:50px; margin-left:10px;"> 
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h4 class="text-center" style="margin-bottom:20px;">ATUR JADWAL</h4><hr>
            <div style="margin-left:100px; margin-top:30px; margin-bottom:30px;">
            <form action="/setjadwal/create" method="post" enctype="multipart/form-data" style="clear:both;">
            @csrf
            <div class="form-group">
                <label for="">Hari</label>
                <select name="hari" id="" style="margin-left:25px;">
                    <option value="senin">Senin</option>
                    <option value="selasa">Selasa</option>
                    <option value="rabu">Rabu</option>
                    <option value="kamis">Kamis</option>
                    <option value="jum'at">Jum'at</option>
                    <option value="sabtu">Sabtu</option>
                    <option value="minggu">Minggu</option>
                </select><br>
            </div>
            <div class="form-group">
                <label for="">Tanggal</label>
                <input name="tanggal" type="date"><br>
            </div><br>
            <div class="form-group" style="float:left;">
                <label for="">Mulai</label><br>
                <input type="time" name="mulai" style="margin-bottom:10px;"><br>
            </div>
            <div class="form-group" style="float:left; margin-left:10px;">
                <label for="">Akhir</label><br>
                <input type="time" name="akhir" style="margin-bottom:10px;"><br>
            </div>
            <div class="form-group" style="float:left; margin-left:10px;">
                <label for="">Aktivitas</label><br>
                <input type="text" name="aktivitas" style="margin-bottom:10px;"><br>
            </div>
            <div class="form-group" style="float:left; margin-left:10px;">
                <label for="">Implementasi</label><br>
                <select name="implementasi" id="" style="margin-bottom:15px; margin-top:1px;">
                    <option value="agama">PA-PB</option>
                    <option value="pkn">PPKN</option>
                    <option value="sejarah">sejarah</option>
                    <option value="pjok">PJOK</option>
                </select><br>
            </div>
            <div style="clear:both;">
                <button type="submit" class="btn btn-info" style="width:200px;">Simpan</button>
                <a href="/menu" class="btn btn-danger" style="width:200px; margin-left:50px;">Kembali</a>
            </div>
        </form>
    </div>

      </div>
    </div>
  </div>
</div>
<h4 class="text-center">Aktivitas dan implementasinya</h4>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          PA-PB
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table table-hover" border=1>
        <tr>
            <th>Aktivitas</th>
            <th>Implementasi</th>
        </tr>
        <tr>
            <td>Sholat fardhu</td>
            <td>PA-PB (Agama Islam)</td>
        </tr>
        <tr>
            <td>Sholat dhuha</td>
            <td>PA-PB (Agama Islam)</td>
        </tr>
        <tr>
            <td>Sholat tahajud</td>
            <td>PA-PB (Agama Islam)</td>
        </tr>
        <tr>
            <td>tadarus</td>
            <td>PA-PB (Agama Islam)</td>
        </tr>
        <tr>
            <td>Menonton ceramah keagamaan di TV/Youtube/medsos</td>
            <td>PA-PB (Agama Islam)</td>
        </tr>
        <tr>
            <td>Berinfak/Shodaqah</td>
            <td>PA-PB (Agama Islam)</td>
        </tr>
        <tr>
            <td>Doa pagi (syafaat:pribadi,keluarga,gereja) </td>
            <td>PA-PB (Agama Kristen)</td>
        </tr>
        <tr>
            <td>Doa siang (syafaat:pemerintah: bangsa dan negara RI, kota Bogor),TNI,Polri,institusi, sekolah Wikrama) </td>
            <td>PA-PB (Agama Kristen)</td>
        </tr>
        <tr>
            <td>Doa sore (syafaat:orang-orang yang terdampak positif Covid-19, paramedis:dokter,perawat,pertugas rumah sakit, dll) </td>
            <td>PA-PB (Agama Kristen)</td>
        </tr>
        <tr>
            <td>Menonton ceramah / pembelajaran adama Kristen di Youtube (materi bebas)</td>
            <td>PA-PB (Agama Kristen)</td>
        </tr>
        <tr>
            <td>Duduk hening / meditasi pernafasan</td>
            <td>PA-PB (Agama Budha)</td>
        </tr>
        <tr>
            <td>Doa pagi namakara gatha</td>
            <td>PA-PB (Agama Budha)</td>
        </tr>
        <tr>
            <td>Melafal matra/sutra</td>
            <td>PA-PB (Agama Budha)</td>
        </tr>
        <tr>
            <td>Doa pelimpahan jasa (Etavata)</td>
            <td>PA-PB (Agama Budha)</td>
        </tr>
        <tr>
            <td>Duduk hening / meditasi pernafasan</td>
            <td>PA-PB (Agama Budha)</td>
        </tr>
        <tr>
            <td>Puja Tri Sandya</td>
            <td>PA-PB (Agama Hindu)</td>
        </tr>
        <tr>
            <td>Membaca Sri Gita Calista -1 dokumentasi dengan voice note</td>
            <td>PA-PB (Agama Hindu)</td>
        </tr>
        <tr>
            <td>Menentukan dan renungkan sloka pilihan harian (Senin hingga Jum'at)</td>
            <td>PA-PB (Agama Hindu)</td>
        </tr>
        <tr>
            <td>Menuliskan terjemahan sloka pilihan harian dengan tulisan indah</td>
            <td>PA-PB (Agama Hindu)</td>
        </tr>
        <tr>
            <td>Tonton video Youtube-Channel Hindu Times:Jenis-jenis Hujan</td>
            <td>PA-PB (Agama Hindu)</td>
        </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          PPKN
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <table class="table table-hover" border=1>
            <tr>
                <th>Aktivitas</th>
                <th>Implementasi</th>
            </tr>
            <tr>
            <td>Membersihkan dan merapikan kamar mandi</td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Membersihkan rumah</td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Membantu ibu memasak</td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Mengerjakan/membaca tugas sekolah</td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Menonton/membaca berita tentang situasi nasional terbaru (aspek ekonomi/pertahanan/ politik/sosial budaya/Kesehatan/ aspek lainnya) di TV/medsos yang terferifikasi/portal web resmi </td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Bercengkrama dengan keluarga (gerakan tanpa hp) </td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td> Mengajari saudara (adik/kakak) mengerjakan tugas</td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Mencuci piring setelah makan </td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td> Menyiram tanaman</td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td> Memberi makan/merawat hewan peliharaan </td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Membersihkan kendaraan pribadi</td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Membantu ibu mencuci baju atau menyetrika</td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Berdiskusi dengan teman di media sosial </td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Membuat sarapan atau camilan untuk keluarga </td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Melakukan sensus online </td>
            <td>PPKN</td>
        </tr>
        <tr>
            <td>Menyetrika atau mencuci baju milik sendiri </td>
            <td>PPKN</td>
        </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Sejarah Indonesia
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
      <table class="table table-hover" border=1>
        <tr>
                <th>Aktivitas</th>
                <th>Implementasi</th>
        </tr>    
        <tr>
            <td> Menonton film dokumenter tentang Sejarah atau kebudayaan Indonesia di televisi (TVRI atau lainnya)/Youtube/media sosial</td>
            <td>Sejarah Indonesia</td>
        </tr>
        <tr>
            <td>Menyelesaikan tugas sekolah tepat waktu (sebelum pukul 16.00) </td>
            <td>Sejarah Indonesia</td>
        </tr>
        <tr>
            <td>Membaca buku sejarah /artikel tentang sejarah Indonesia dari internet  </td>
            <td>Sejarah Indonesia</td>
        </tr>
        <tr>
            <td>Membahas silsilah keluarga dengan orang tua </td>
            <td>Sejarah Indonesia</td>
        </tr>
        <tr>
            <td>Merawat orang tua yang sakit/memberikan pijitan relaksasi kepada orang tua </td>
            <td>Sejarah Indonesia</td>
        </tr>
        <tr>
            <td>Mendiskusikan asal-usul nenek moyang dengan keluarga dan mengapa bisa tinggal di Bogor </td>
            <td>Sejarah Indonesia</td>
        </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          PJOK
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <table class="table table-hover">
        <tr>
            <th>Aktivitas</th>
            <th>Implementasi</th>
        </tr>
        <tr>
            <td>Olahraga ringan pagi/sore</td>
            <td>PJOK</td>
        </tr>
        <tr>
            <td>Membuat menu gizi seimbang (sarapan,makan siang, makan malam) </td>
            <td>PJOK</td>
        </tr>
        <tr>
            <td>Berjemur</td>
            <td>PJOK</td>
        </tr>
        <tr>
            <td>Menggunakan masker jika terpaksa harus keluar rumah membantu orang tua</td>
            <td>PJOK</td>
        </tr>
    </table>
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