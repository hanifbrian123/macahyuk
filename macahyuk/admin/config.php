<?php
define("BASEPATH", $_SERVER["DOCUMENT_ROOT"] . "/macahyuk/macahyuk/admin");
define("BASEURL", "http://localhost/macahyuk/macahyuk/admin");
define("TAKROKAROAN", "http://localhost/macahyuk/macahyuk");

require_once $_SERVER["DOCUMENT_ROOT"] . "/macahyuk/macahyuk/admin/database.php";

session_start();

if($_SESSION['lkadndbasdkalsdabsha'] == hash('sha256', 'User')) {
    header("Location: ". TAKROKAROAN . "/");
    exit;
}

if(!isset($_SESSION['kanjsbdhiadbasndksandaiuwfajjsabdbasgdabasdj'])) {
    header("Location: ". TAKROKAROAN . "/login.php");
    exit;
}

// var_dump($_SESSION);