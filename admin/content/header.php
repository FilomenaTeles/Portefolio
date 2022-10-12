<header class="text-center">

      <?php 
       session_start();
       if(isset($_SESSION['id'])){ 
          include('nav.php');
         }else{
            ?>
            <nav class="container-fluid bg-secondary pb-4">
                
                <p class="text-center">Faça login</p>
                
            </nav>
            <?php

         } ?>
</header>

<main>
<div class="container">
   