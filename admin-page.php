<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}

include 'process-admin.php';
$post = new Post();
$post->insertPost();
$post->deletePost();
$posts = $post->showPost();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin page</title>
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
      <div class="admin-form">
      <h4>Zprava pro klienty:</h4>
      <!--Form for inserting messages to the clients-->
      <form action="" method="post">
        <textarea id="post" name="post" rows="5" cols="40" placeholder="Zadejte zpravu..." required></textarea>
        <input type="submit" name="insert" value="Vlozit">
      </form>
      </div>

      <!--Tady bude mozne posty mazat-->
      <div class="posts" action="">
      <?php foreach ($posts as $post): ?>
       <form method="post">
          <input type="hidden" name="post_id" value="<?= $post['id']; ?>">
            <table class="table-posts">
                <tr>
                    <td><?= date('d.m.Y', strtotime($post['created_at'])); ?></td>
                    <td><?= $post['message']; ?></td>
                    <td><button type="submit" name="delete" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></td>
                </tr>
            </table>
          </form>
        <?php endforeach; ?>
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
          <h3>Telefon</h3>
          <h4>tel: 605 880 937</h4>
          <h3>Email</h3>
          <a href="mailto:urol.studenka@seznam.cz">urol.studenka@seznam.cz</a>
    </aside>

    </div> <!-- #main -->
      </div> <!-- #main-container -->

      <div class="footer-container">
        <footer class="wrapper">
          <h3>©2023 Urologie MUDr. Sobková Lenka <span class="login"><a href="index.php">Uvodni stranka</a></span></h3>
        </footer>
      </div>

    <script src="js/vendor/jquery-1.11.2.min.js"></script>

  </body>
</html>