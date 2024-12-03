<?php
session_start();
include('data/verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
        h5 { 
            display: inline-block;  
            background-color: green; 
        } 
    </style> 
    </head>
<body>
  <div class="sidebar close">
    <div class="logo-details"><img src="assets/img/logo.png" width="50px" height="50px"  />
      <spanleonar class="logo_name">Evently</spanleonar>
    </div>
    
    <ul class="nav-links">
  <?php include_once("menu.php");?>
    </ul>
  </div>   






  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Olá,  | <?php echo $_SESSION['usuario']; ?>
<a href="data/logout.php">Sair</a></h5></span>
    </div>
    <div class="container mt-5">
                 <?php include_once('base.php'); ?>
      </div>
    </div>
    </div>
  </section>


  
  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
