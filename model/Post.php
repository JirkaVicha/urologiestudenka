<?php

include 'db.php';

class Post {

  protected $post;
  protected static $db;
  protected $id;

  public function __construct() {
    self::$db = Database::connect();
  }

  public function setPost($post) {
    $this->post = $post;
    return $this;
  }

  public function getPost() {
    $post = $this->post;
    return $post;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    $id = $this->id;
    return $id;
  }

  public function insertPost() {
    if (isset($_POST['insert'])) {
      $this->setPost($_POST['post']);
      $stmt = self::$db->prepare("INSERT INTO post (message) VALUES (?)");
      $stmt->bind_param('s', $this->post);
      $stmt->execute();
      self::$db->close();
      header('Location: ../views/home.php');
      exit;
      }
    }

  public function showPost() {
    $stmt = self::$db->query("SELECT id, message, 
                            DATE_FORMAT(created_at, '%d-%m-%Y') AS created_at 
                            FROM post ORDER BY id ASC");
    return $stmt;
  }

  public function deletePost() {
    if (isset($_POST['delete'])) {
      $post_id = $_POST['post_id'];
      $stmt = self::$db->prepare("DELETE FROM post WHERE id = ?");
      $stmt->bind_param("i", $post_id);
      $stmt->execute();
      return $stmt;
    }
  }
}



