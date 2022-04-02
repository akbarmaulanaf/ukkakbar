<?php 
    if(isset($_POST['daftar']))
    {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $text = $nik . "," . $nama . "\n";
        $ambil = file_get_contents('config.txt');
        $bagi = explode("\n", $ambil);
        $ada = false;

            foreach($bagi as $values){
                $data = explode(",", $values);

                if (array_key_exists(1, $data)){
                    if ($data[0] == $nik || $data[1] == $nama){
                        $ada = true;
                        break;
                    }
                }
            }

            if(!$ada){
                $fp = fopen('config.txt', 'a+');
                fwrite($fp, $text);
                echo'<script>alert("Anda Berhasil Mendaftar");</script>';
            } else{
                echo'<script>alert("Nik Atau Nama Sudah Terdaftar!");</script>';
            }

        
    }
    else if (isset($_POST['masuk']))
    {
        $data = file_get_contents("config.txt");
        $content = explode("\n", $data);
        $masuk = false;
        foreach($content as $values){
            $login = explode(",", $values);
            $nik = $login[0];
            @$nama = @$login[1];

            if($nik == $_POST['nik'] && $nama == $_POST['nama']){
                $masuk=true;
            }
        }
        if ($masuk) {
            session_start();
                $_SESSION['username'] = $_POST['nama'];
                header('location: home.php');
        }else {
            echo "<script> alert('NIK atau Nama salah!')</script>";
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Halaman Login</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: #ffce55;
            font-family: "Poppins", sans-serif;
        }
        .row{
            background: white;
            border-radius: 30px;
            box-shadow: 12px 12px 18px #ffbc21;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        h2{
            color: #ffce55;
        }
        .btn1{
            border: none;
            outline: none;
            height: 50px;
            width: 40%;
            background-color: #ffce55;
            color: white;
            border-radius: 4px;
        }
        .btn1:hover{
            background: white;
            border: 1px solid;
            color: #ffce55;
        }
    </style>
  </head>
  <body>
    

    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="gambar/logo.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg 7 px-5 pt-5">
                    <h2 class="font-weight-bold py-3">STAR TRAVEL</h2>
                    <h5>Masuk atau daftar terlebih dahulu.</h5>
                    <form action="" method="POST">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="NIK" class="form-control my-3 p-4" name="nik" required id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="text" placeholder="Nama Lengkap" class="form-control my-3 p-4" name="nama" required id="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="submit" name="daftar" value="Daftar" class="btn1 my-1">
                            <input type="submit" name="masuk" value="Masuk" class="btn1 my-1">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

  </body>
</html>