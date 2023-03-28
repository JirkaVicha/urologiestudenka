<?php

class Database {
  private static $db_server = 'localhost'; //sql4.webzdarma.cz
  private static $username = 'root'; // urologiestud8658
  private static $password = ''; // Hsls.3327
  private static $db_name = 'urology'; // urologiestud8658

  public static function connect() {
    $db = new mysqli(self::$db_server, self::$username, self::$password, self::$db_name);
    if ($db->connect_error) {
      die('Connection failed: ' . $db->connect_error);
    }
    $db->query("SET NAMES 'utf8'");
    return $db;
  }
}

