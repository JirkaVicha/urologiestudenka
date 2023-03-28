<?php

$content = '
      <div class="login-form">
      <h4>Prihlasit se pro vlozeni aktuality pro klienty:</h4>
      <!--Form for login to the admin page-->
      <form action="process-login.php" method="post">
        <input type="text" name="username" autofocus="autofocus" placeholder="Jmeno" required>
        <input type="password" name="password" autofocus="autofocus" placeholder="Heslo" required>
        <input type="submit" name="submit" value="Login">
      </form>
      </div> 
';

include 'layout.php';
?>
                
   