<header class="header-nav-center no_blur white-scroll-dark active-blue" id="myNavbar">
 <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light header-nav-left nav-product">
   <a class="navbar-brand" href="./">
    <img width="200" class="" src="img/like-black.png" alt="logo" />
   </a>

   <button class="navbar-toggler menu ripplemenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <svg viewBox="0 0 64 48">
     <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
     <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
     <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
    </svg>
   </button>
<?php $pageName = basename($_SERVER['PHP_SELF']);?>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto nav-pills">
     
     <?php if($pageName=='apply.php' || $pageName=='payment-status.php' || $pageName=='application.php' || $pageName=='success.php'){?>
     <li class="nav-item">
      <a class="nav-link" href="./">Home  </a>
     </li>
     <?php } ?>    
     
     <?php if($pageName=='apply.php' || $pageName=='payment-status.php' || $pageName=='application.php' || $pageName=='success.php'){ }else{?>
     <li class="nav-item">
      <a class="nav-link" href="#About">About </a>
     </li>
     <?php } ?>
     
     <?php if($pageName=='apply.php' || $pageName=='payment-status.php' || $pageName=='application.php' || $pageName=='success.php'){ }else{?>
     <li class="nav-item">
      <a class="nav-link" href="apply">Apply</a>
     </li>
     <?php } ?>
     
     <?php if($pageName=='apply.php' || $pageName=='payment-status.php' || $pageName=='application.php' || $pageName=='success.php'){ }else{?>
     <li class="nav-item">
      <a class="nav-link" href="#Curriculum">Curriculum</a>
     </li>
     <?php } ?>
     
     <?php if($pageName=='apply.php' || $pageName=='payment-status.php' || $pageName=='application.php' || $pageName=='success.php'){ }else{?>
     <li class="nav-item">
      <a class="nav-link" href="#Pricing">Pricing</a>
     </li>
     <?php } ?>
     
     <?php if($pageName=='apply.php' || $pageName=='payment-status.php' || $pageName=='application.php' || $pageName=='success.php'){}else{?>
     <li class="nav-item">
      <a class="nav-link" href="#Projects">Projects</a>
     </li>
     <?php } ?>
     
     <?php if($pageName=='apply.php' || $pageName=='payment-status.php' || $pageName=='application.php' || $pageName=='success.php'){ }else{?>
     <li class="nav-item">
      <a class="nav-link" href="#Contact">Contact</a>
     </li>
     <?php } ?>
     
    </ul>
   </div>
  </nav>
 </div>
</header>