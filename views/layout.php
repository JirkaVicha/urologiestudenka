<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Urologická ambulance - Studénka</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://urologiestudenka.cz/src/main.css">
</head>
<body>

<div class="header-container">
 <header class="wrapper clearfix">
  <img src="https://urologiestudenka.cz/img/ico_main.png" alt="Urologie MUDr. Sobková Lenka" height="74" width="74" style="float: left; padding: 10px 15px 0 0;"/>
   <h1 class="title">Urologická ambulance<br /><span style="font-size: 0.6em;">MUDr. Sobková Lenka</span></h1>
    <nav>
     <ul>
      <li><a href="https://urologiestudenka.cz/views/home.php">Hlavní stránka</a></li>
      <li><a href="https://urologiestudenka.cz/views/naseordinace.php">Naše ordinace</a></li>
     </ul>
    </nav>
 </header>
</div>

<div class="main-container">
    <div class="main wrapper clearfix">
    
    <article>
        <?php echo $content; ?>
    </article>
     

    <aside>
    <h3>Ordinační hodiny</h3>
        <?php echo $time; ?>
    </table>
    <br/>
    <strong>Ke každému vyšetření je nutné se předem TELEFONICKY objednat!</strong>
    <h2><i class="fa-solid fa-square-phone"></i> 605 880 937</h2>
    <h3><i class="fa-solid fa-envelope"></i> <a href="mailto:urol.studenka@seznam.cz">urol.studenka@seznam.cz</a></h3>
    <h3><i class="fa-solid fa-map"></i> <a href="https://urologiestudenka.cz/views/kdenasnajdete.php">Jak se k nám dostat?</a></h3>
</aside>

    </div> <!-- #main -->
</div> <!-- #main-container -->

<div class="footer-container">
    <footer class="wrapper">
        <h3>©2023 Urologie MUDr. Sobková Lenka
        <span class="login"><a href="login.php">Login</a></span></h3>
    </footer>
</div>

<!-- <script src="js/vendor/jquery-1.11.2.min.js"></script> -->

  
</body>
</html>