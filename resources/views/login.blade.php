<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="20220299.141015140632.png">
    <title>Monitoring Aktivitas Peserta Didik || SMK WIKRAMA BOGOR</title>
    <style>
        .container{
            width: 400px;
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
      
      <div class="container">
        <h4 class="text-center">MONITORING AKTIVITAS PESERTA DIDIK <br>SMK WIKRAMA BOGOR</h4>
          <hr>
          <form action="/postlogin" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
              <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Masukkan username anda">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password anda">
            </div>
            <button type="submit" class="btn btn-primary">MASUK</button>
            <button type="submit" class="btn btn-danger">KEMBALI</button>
            <a href="#">Belum memiliki akun?</a>
          </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>