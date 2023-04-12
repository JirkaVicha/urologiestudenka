<?php 

include 'process-time.php';

$content = '
            <h2>Adresa</h2>
            <p>Nase Urologická ambulance se nachazi v casti Butovice, 
                v blizkosti obchodu Lidl a cerpaci stanice Orlen 
                (pres kruhovy objezd smerem k pomniku obetem zelezn. nestesti).</p>
            <p>Butovická 365<br/>742 13 Studénka</p>
            <p>(zdravotní středisko)</p>

            <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1290.1103017193652!2d18.0501234567298!3d49.7066484485588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4713e91085d8c1b1%3A0x1edcd5c075b07250!2zQnV0b3ZpY2vDoSAzNjUsIEJ1dG92aWNlLCA3NDIgMTMgU3R1ZMOpbmthLCDEjGVza28!5e0!3m2!1scs!2suk!4v1495557660612" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
        