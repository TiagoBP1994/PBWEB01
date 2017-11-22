<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbP
 *
 * @author Michal
 */
abstract class DbP {
    const DBHOST = 'localhost';
    const DBUSER = 'root';
    const USERPWD = '';
    const DB = 'epicO';
    const DSN = "mysql:host=".self::DBHOST.";dbname=".self::DB;
}
