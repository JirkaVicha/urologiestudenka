<?php 
include 'process-admin.php';
$post = new Post();
$posts = $post->showPost();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Urologická ambulance - Studénka</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="header-container">
 <header class="wrapper clearfix">
  <img src="img/ico_main.png" alt="Urologie MUDr. Sobková Lenka" height="74" width="74" style="float: left; padding: 10px 15px 0 0;"/>
   <h1 class="title">Urologická ambulance<br /><span style="font-size: 0.6em;">MUDr. Sobková Lenka</span></h1>
    <nav>
     <ul>
      <li><a href="kdenasnajdete.php">Kde nás najdete</a></li>
      <li><a href="naseordinace.php">Naše ordinace</a></li>
     </ul>
    </nav>
 </header>
</div>

<div class="main-container">
    <div class="main wrapper clearfix">

<article>
  <h2>Urologická ordinace</h2>
   <p>Ambulantní zařízení poskytující komplexní ambulantní diagnostickou a léčebně preventivní péči v oblasti urologie.</p>

   <!-- <p style="height: 230px;"></p> -->
   <div class="aktuality">
    <h2>Aktuality:</h2>
      <div class="messages_for_clients">
        <!--tady budou zpravy pro klienty od doktorky, dovolena atd.-->
        <?php foreach ($posts as $post): ?>
            <table class="table-posts">
                <tr>
                    <td><?= date('d.m.Y', strtotime($post['created_at'])); ?></td>
                    <td class="cell-highlight"><?= $post['message']; ?></td>
                </tr>
            </table>
            <?php endforeach; ?>
        </div>
    </div>
</article>
                

<aside>
    <h3>Ordinační hodiny</h3>
    <table>
        <tbody>
        <tr>
            <td><strong>Pondělí</strong></td>
            <td>&nbsp; 8:00</td>
            <td> - 12:00</td>
            <td></td>
        </tr>
        <tr>
            <td><strong>Středa</strong></td>
            <td>&nbsp; 15:00</td>
            <td> - 17:00</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td><strong>Pátek</strong></td>
            <td>&nbsp; 8:00</td>
            <td> - 12:00</td>
            <td></td>
        </tr>
        </tbody>
    </table>
    <br/>
    <strong>Ke každému vyšetření je nutné se předem TELEFONICKY objednat!</strong>
    <h2><i class="fa-solid fa-square-phone"></i> 605 880 937</h2>
    <h3><i class="fa-solid fa-envelope"></i> <a href="mailto:urol.studenka@seznam.cz">urol.studenka@seznam.cz</a></h3>
</aside>

    </div> <!-- #main -->
</div> <!-- #main-container -->

<div class="footer-container">
    <footer class="wrapper">
        <h3>©2023 Urologie MUDr. Sobková Lenka
        <span class="login"><a href="login.php">Login</a></span></h3>
    </footer>
</div>

<script src="js/vendor/jquery-1.11.2.min.js"></script>

  
</body>
</html>