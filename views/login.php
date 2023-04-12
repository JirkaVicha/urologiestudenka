<?php

include 'process-time.php';

$content = '
      <div class="login-form">
      <h4>Přihlásit pro vložení aktuality pro klienty:</h4>
      <!--Form for login to the admin page-->
      <form action="process-login.php" method="post">
        <input type="text" name="username" autofocus="autofocus" placeholder="Jméno" required>
        <input type="password" name="password" autofocus="autofocus" placeholder="Heslo" required>
        <input type="submit" name="submit" value="Login">
      </form>
      </div> 
';

$time = '

<table>
  <tbody>
    <tr>
      <td><strong>Pondělí</strong></td>
      <td>&nbsp; &nbsp; ' . $monday_start . ':00</td>
      <td> - ' . $monday_end . ':00</td>
      <td></td>
    </tr>
    <tr>
      <td><strong>Středa</strong></td>
      <td>&nbsp; ' . $wednesday_start . ':00</td>
      <td> - ' . $wednesday_end . ':00</td>
      <td></td>
    </tr>
    <tr>
      <td><strong>Pátek</strong></td>
      <td>&nbsp; &nbsp; ' . $friday_start . ':00</td>
      <td> - ' . $friday_end . ':00</td>
      <td></td>
    </tr>
  </tbody>
</table>

';

include 'layout.php';
?>
                
   