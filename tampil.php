<?php

include 'Koneksi.php';

$query="SELECT * FROM oopfazri";

$tampil=mysqli_query($knk->Konek(),$query);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

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
          <a class="nav-link activ" aria-current="page" href="oopinoutfazri.php" style="color:white">HOME</a>
        </li>
       
        
         
        </li>
        <li class="nav-item ms-4">
          <a class="nav-link " href="tampil.php"style="color:green">TAMPIL DATA</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<!-- End navbar -->

  
   
  
  <center><table class="table " style="width:900px">
  <thead>
    <tr>
   
      <th class="table-primary" scope="col">Nama</th>
      <th class="table-primary" scope="col">Nilai 1</th>
      <th class="table-primary" scope="col">Nilai 2</th>
      <th class="table-primary" scope="col">Nilai 3</th>
      <th class="table-primary" scope="col"> aksi</th>
    </tr>
  </thead>
  <tbody><br><br><br>
    <center><h1>TAMPIL DATA</h1></center><br><br><br>
    
    <?php foreach ($tampil as $p): ?>
    <tr>
        
    
      <td><?= "  " . $p['nama']?></td>
      <td><?= $p['nilai1']?></td>
      <td><?=  $p['nilai2']?></td>
      <td><?=  $p['nilai3']?></td>
      <td>  <a class="btn btn-danger"href='hapus.php?nama=<?=$p['nama']?>'>Hapus</a></td>
    
    </tr>
  
    <?php endforeach; ?>
  </tbody>
</table></center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>