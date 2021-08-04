<?php

 echo '
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<a class="navbar-brand" href="">Coding Forams </a>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarScroll">
 <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
   <li class="nav-item">
     <a class="nav-link active" aria-current="page" href="index.php">Home</a>
     </li>
     <li class="nav-item">
     <a class="nav-link" href="about.php">About</a>
   </li>
    <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
       categories
       </a>
       <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
       <li><a class="dropdown-item" href="#">Action</a></li>
       <li><a class="dropdown-item" href="#">Another action</a></li>
       <li><hr class="dropdown-divider"></li>
       <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
       </li>
      <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="contact.php">contact</a>
   </li>
 </ul>

 <form class="d-flex">
   <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
   <button class="btn btn-outline-success" type="submit">Search</button>
 </form>

    <div class="mx-2">
      <button class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#loginModal">login</button>
      <button class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#singupModal">signup</button>
    </div>
 </div>
 </nav>';

  include 'parshial/_loginmodal.php'; 
  include 'parshial/_singupmodal.php';

  
?>