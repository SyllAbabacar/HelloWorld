<?php

session_start();

define('DNS', 'mysql:host=localhost;dbname=newdbcourtage');
define('USER', 'root');
define('PASS', '');

//include_once 'Define.php';
class DB {

    private static $cnx;

    public static function connect() {
        if (!self::$cnx) {
            self::$cnx = new PDO(DNS, USER, PASS);
            self::$cnx->exec("SET CHARACTER SET utf8");
            self::$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$cnx;
    }

}
