<?php

class Database {
  private static $db_server = 'localhost'; //sql........z
  private static $username = 'root'; // urol.......8
  private static $password = ''; // H.....7
  private static $db_name = 'urology'; // uro........8

  public static function connect() {
    $db = new mysqli(self::$db_server, self::$username, self::$password, self::$db_name);
    if ($db->connect_error) {
      die('Connection failed: ' . $db->connect_error);
    }
    $db->query("SET NAMES 'utf8'");
    return $db;
  }
}

