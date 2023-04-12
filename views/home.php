<?php

include 'process-time.php';
include '../model/Post.php';
$post = new Post();
$posts = $post->showPost();

$content = '
  <h2>Urologická ordinace</h2>
   <p>Ambulantní zařízení poskytující komplexní ambulantní diagnostickou a léčebně preventivní péči v oblasti urologie.</p>

   <!-- <p style="height: 230px;"></p> -->
   <div class="aktuality">
    <h2>Aktuality:</h2>
      <div class="messages_for_clients">
        <!--tady budou zpravy pro klienty od doktorky, dovolena atd.-->';
        
        foreach ($posts as $post) {
            $content .= '
            <table class="table-posts">
                <tr>
                    <td>' . date("d.m.Y", strtotime($post["created_at"])) . '</td>
                    <td class="cell-highlight">' . $post["message"] . '</td>
                </tr>
            </table>';
         }
         $content .= '
        </div>
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
