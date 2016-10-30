<?php
/**
 * Created by PhpStorm.
 * User: Jeremy
 * Date: 2016/10/28
 * Time: 00:22
 */
include_once("system.class.inc.php");
$dbtype = "mysql";
$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "csutdqgzxzx";
$connDB = new ConnDB($dbtype,$host,$user,$pwd,$dbname);
$conn = $connDB->GetConnld();
$adminDB = new AdminDB();
$subStr = new SubStr();
?>