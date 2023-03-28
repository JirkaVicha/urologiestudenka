<?php

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

include 'layout.php';
?>
