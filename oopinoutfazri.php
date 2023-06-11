<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Kel Owl </title><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Palette+Mosaic&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
       
        
@import url('https://fonts.googleapis.com/css2?family=Carter+One&display=swap');
</style>
<link rel="stylesheet" href="owl.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary tes" >
  <div class="container-fluid pt-2 pb-2" style="background-color: #3D1766;">
    <a class="navbar-brand" style="color:white; font-size:30px; font-family: cursive;">🦉OWL🌳WEB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-4" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto lg-0">
        <li class="nav-item">
          <a class="nav-link activ" aria-current="page" href="oopinoutfazri.php" style="color:green">HOME</a>
        </li>
       
        
         
        </li>
        <li class="nav-item ms-4">
          <a class="nav-link " href="tampil.php"style="color:white">TAMPIL DATA</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<!-- End navbar -->








    <center>

    <div class="kotak">
        <img style="width:360px;border-radius:20px  0 0 20px"src="poto/download.jpeg" alt="">
    <!-- <h1 class="mt-5 mb-5">Form Input Nilai🦉</h1> -->
    <form method="post">

        <div class="p">
           
   <form method="post" action="#" class="popo">
        
   
        <input style="text-align:center" type="text" name="nama" id="nama" required placeholder="Nama"><br><br>

        <input type="number" name="nilai1" id="nilai1" required placeholder="🥇" ><br><br>
         
      
        <input type="number" name="nilai2" id="nilai2" required placeholder="🥈"><br><br>
        
        
        <input type="number" name="nilai3" id="nilai3" required placeholder="🥉"><br><br>
        

        
        <input style="width:120px" class="bit" type="submit" name="submit"value="SUBMIT">
        </div>
    </form>
</form>
</div>

   

<?php
session_start();
if (!isset($_SESSION['nama'])) {
      echo "<script>alert('login dulu');
  document.location.href='login.php'
  </script>";
}

class Nilai {
    private $nama;
    private $nilai1;
    private $nilai2;
    private $nilai3;
    

    public function __construct($nama, $nilai1, $nilai2, $nilai3, ) {
        $this->nama = $nama;
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
        $this->nilai3 = $nilai3;
       
    }

    public function nama() {
        return $this->nama;
    }

    public function total() {
        return $this->nilai1 + $this->nilai2 + $this->nilai3 ;
    }

    public function ratarata() {
        $total = $this->total();
        return $total / 3;
    }

    public function nilaimax() {
        return max($this->nilai1, $this->nilai2, $this->nilai3,);
    }

    public function nilaimin() {
        return min($this->nilai1, $this->nilai2, $this->nilai3,);
    }

    public function grade() {
        $rata = $this->ratarata();

        if ($rata > 90) {
            return "A";
        } elseif ($rata > 80) {
            return "B";
        } elseif ($rata > 70) {
            return "C";
        } elseif ($rata > 0) {
            return "D";
        }
    }
}

include "koneksi.php";

$con = new Koneksi('localhost','root','','oop');

if (isset($_POST['submit'])) {
 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];
 
 

    $nilaihasil = new Nilai($nama, $nilai1, $nilai2, $nilai3);

    $sql = "INSERT INTO oopfazri(nama,nilai1,nilai2,nilai3) VALUES ('$nama','$nilai1','$nilai2','$nilai3')";
    $hasil = mysqli_query($con->Konek(), $sql);

    $rata = intval( $nilaihasil->ratarata());
    $nmax = intval($nilaihasil->nilaimax());
    $nmin=  intval($nilaihasil->nilaimin());
    $grade = intval($nilaihasil->grade());
    $sql1 ="INSERT INTO hasil(nama,nmax,nmin,rata) VALUES ('$nama','$nmax','$nmin','$rata','$grade')";  
    
    
    $queryhasil=mysqli_query($con->Konek(),$sql1);







    if ($hasil) {
        echo "<script>alert('Berhasil')</script>";
    } else {
        echo "Gagal";
    }

   
    // echo "<br><br>";
    // echo "Nama: " . $nilaihasil->nama();
    // echo "<br>";
    // echo "Total: " . $nilaihasil->total();
    // echo "<br>";
    // echo "Rata-Rata: " . $nilaihasil->ratarata();
    // echo "<br>";
    // echo "Nilai Max: " . $nilaihasil->nilaimax();
    // echo "<br>";
    // echo "Nilai Min: " . $nilaihasil->nilaimin();
    // echo "<br>";
    // echo "Grade Penilaian: " . $nilaihasil->grade();

}
}
?>

</center>
<a href="lo.php" style="color:blue" class ="mt-5" >logout</a>
</body>
</html>
