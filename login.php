<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LogIn</title>
  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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
      <div class="login-form">
      <h4>Prihlasit se pro vlozeni aktuality pro klienty:</h4>
      <!--Form for login to the admin page-->
      <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Jmeno" required>
        <input type="password" name="password" placeholder="Heslo" required>
        <input type="submit" name="submit" value="Login">
      </form>
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
          <h3>©2023 Urologie MUDr. Sobková Lenka
          <span class="login"><a href="login.php">Login</a></span></h3>
        </footer>
      </div>

    <script src="js/vendor/jquery-1.11.2.min.js"></script>

  </body>
</html>