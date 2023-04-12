<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}

include 'process-time.php';
include '../model/Post.php';
$post = new Post();
$post->insertPost();
$post->deletePost();
$posts = $post->showPost();


$content = '
      <div class="admin-form">
      <h4>Zpráva pro klienty:</h4>
      <!--Form for inserting messages to the clients-->
      <form action="" method="post">
        <textarea id="post" name="post" autofocus="autofocus" rows="8" cols="40" placeholder="Zadejte zprávu..." required></textarea>
        <input type="submit" name="insert" value="Vložit">
      </form>
      </div>

      <!--Tady bude mozne posty mazat-->
      <div class="posts" action=""> ';
      
      foreach ($posts as $post) {
        $content .= '
       <form method="post">
          <input type="hidden" name="post_id" value="' . $post['id'] . '">
            <table class="table-posts">
                <tr>
                    <td>' . date('d.m.Y', strtotime($post['created_at'])) . '</td>
                    <td>' . $post['message'] . '</td>
                    <td><button type="submit" name="delete" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></td>
                </tr>
            </table>
          </form>';
       }
       $content .= '
      </div>
';

$time = '
<form method="post">
  <table>
    <tbody>
      <tr>
        <td><strong>Pondělí</strong></td>
        <td><input type="text" class="text-center" name="monday_start" value="' . $monday_start . '"></td>
        <td><input type="text" class="text-center" name="monday_end" value="' . $monday_end . '"></td>
        <td></td>
      </tr>
      <tr>
        <td><strong>Středa</strong></td>
        <td><input type="text" class="text-center" name="wednesday_start" value="' . $wednesday_start . '"></td>
        <td><input type="text" class="text-center" name="wednesday_end" value="' . $wednesday_end . '"></td>
        <td></td>
      </tr>
      <tr>
        <td><strong>Pátek</strong></td>
        <td><input type="text" class="text-center" name="friday_start" value="' . $friday_start . '"></td>
        <td><input type="text" class="text-center" name="friday_end" value="' . $friday_end . '"></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <input type="submit" name="vlozit" value="Vložit">
</form>
';


include 'layout.php';
?>
                
    