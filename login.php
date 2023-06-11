<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Kel Owl </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    
  </style>
  <link rel="stylesheet" href="owl.css">
</head>

<body>










  <center>

    <div class="kotak">
      <img style="width:360px;border-radius:20px  0 0 20px"
        src="https://media3.giphy.com/media/52J5JUgmUdkCA/giphy.gif?cid=ecf05e47dqn75nbpc5qamj3wy9g6ohgh5w2fzyh3avzasuw7&ep=v1_gifs_search&rid=giphy.gif&ct=g"
        alt="">
      <!-- <h1 class="mt-5 mb-5">Form Input Nilai🦉</h1> -->
      <form method="post">
       

        <div class="p">
        <h3 class="mb-4 " style="margin-left:90px">LOGIN</h3>


          <form method="post" action="#">


            <input class="" type="text" name="nama" id="nama" style="text-align: center" required placeholder="Username"
              autocomplete="off"><br><br>

            <input type="password" style="text-align:center;" name="pass" id="pass" required
              placeholder="*****"><br><br>





            <input style="width:120px; font-weight:300;" class="bit" type="submit" name="submit" value="LOGIN">
        </div>
      </form>
      </form>
    </div>





  </center>
</body>

</html>
<?php

$kon = mysqli_connect("localhost", "root", "", "phpdasar");



if (isset($_POST["submit"])) {


  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($kon, $_POST['nama']);
    $mypassword = mysqli_real_escape_string($kon, $_POST['pass']);

    $sql = "SELECT id FROM user_wk WHERE nama = '$myusername' and pass = '$mypassword'";
    $result = mysqli_query($kon, $sql);
    $row = mysqli_fetch_array($result);


    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {

      $_SESSION['nama'] = $myusername;
        echo "<script>alert('Berhasil login');
  document.location.href='oopinoutfazri.php'
  </script>";
    } else {
      $error = "Your Login Name or Password is invalid";
    }
  }

}

// $login= mysqli_query($kon,$p);
// if ($login) {
//   echo "<script>alert('Berhasil login');
//   document.location.href='oopinoutfazri.php'
//   </script>";
// }else{
//   echo "<script>alert('Gagal login');
//   document.location.href='login.php'
//   </script>";
// }
