<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbH
 *
 * @author Michal
 */

require_once 'DbP.inc.php';

class DbH {
    private static $instance = FALSE;
    private static $dbh;

    private function __construct() {
        try {
            self::$dbh = new PDO(DbP::DSN, DbP::DBUSER, DbP::USERPWD);
            self::$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            printf("<p>Connect failed for following reason: <br/>%s</p>\n",
                $e->getMessage());
        }
    }

    public static function getDbH() {
        if (! self::$instance) {
            self::$instance = new DbH();
        }
        return self::$dbh;
    }
}
