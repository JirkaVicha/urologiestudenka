<?php

include 'process-time.php';

$content = '
                <h2>Naše ordinace</h2>
                <p>
                    <img src="https://urologiestudenka.cz/img/ordinace1.jpg" alt="foto ordinace" width="500">
                </p>
                <p>
                    <img src="https://urologiestudenka.cz/img/ordinace2.jpg" alt="foto ordinace" width="500">
                </p>
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
        