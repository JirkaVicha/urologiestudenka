<?php

class Database {
  private static $db_server = 'localhost';
  private static $username = 'root';
  private static $password = '';
  private static $db_name = 'urology';

  public static function connect() {
    $db = new mysqli(self::$db_server, self::$username, self::$password, self::$db_name);
    if ($db->connect_error) {
      die('Connection failed: ' . $db->connect_error);
    }
    $db->query("SET NAMES 'utf8'");
    return $db;
  }
}

