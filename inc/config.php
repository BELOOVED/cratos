<?php

require_once 'mobile.class.php';

ob_start();
session_start();
error_reporting(0);
date_default_timezone_set('Europe/Istanbul');
ini_set('date.timezone', 'Europe/Istanbul');

// Database Info
const DB_HOST = "localhost";
const DB_LOGIN = "admin_grand";
const DB_PASS = "Zl2w063c_";
const DB_NAME = "admin_grand";
const SYSNAME = 'Grandpashabet';
const ENV = 'prod';

const ADMIN_PATH = 'admin';
const USERID = '2019046834481';

include "providers.php";

// Connecting Database
$db = new Mysqli(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
if ($db->connect_errno) {
  die('Mysql connection is incorrect');
}
$db->set_charset("utf8");

global $db;

// Get user data
$user_id = intval($_SESSION['user_id']);
if (!empty($user_id)) {
  $us = $db->query("SELECT * from users where id='$user_id'")->fetch_assoc();
}





// Get main table from database
$main = $db->query("SELECT * FROM `main` WHERE '1'")->fetch_assoc();



if (isset($_SESSION['admin_login'])){
  $kk = $_SESSION['admin_login'];
  $main1 = $db->query("SELECT * FROM admin_users WHERE admin_login = '$kk'")->fetch_assoc();
}
// Admin logged status
$admin = false;
if (!(empty($_SESSION['admin_login']))){
  if ($_SESSION['admin_login'] == $main1['admin_login'] && $_SESSION['admin_password'] == $main1['admin_password']) {
    $admin = true;
  }
}



$papara = $db->query("SELECT * FROM limits WHERE name = 'Papara'")->fetch_assoc();
$havale = $db->query("SELECT * FROM limits WHERE name = 'havale'")->fetch_assoc();
$bitcoin = $db->query("SELECT * FROM limits WHERE name = 'Bitcoin'")->fetch_assoc();
$payfix = $db->query("SELECT * FROM limits WHERE name = 'Payfix'")->fetch_assoc();
$creditcard = $db->query("SELECT * FROM limits WHERE name = 'Creditcard'")->fetch_assoc();
$mefete = $db->query("SELECT * FROM limits WHERE name = 'Mefete'")->fetch_assoc();

// Mobile device detection
$detect = new Mobile_Detect;
$mobile = $detect->isMobile();

// Odds Api
function findCache($link, $md = true, $must = false)
{
  $link = $_SERVER['DOCUMENT_ROOT'] . '/cache/' . ($md == true ? md5($link) : $link);
  $fp = fopen($link, 'r');
  $content = fread($fp, filesize($link));
  fclose($fp);
  $content = json_decode($content, true);
  if ($content['time'] > time() || $md == false || $must == true) {
    return $content['content'];
  } else {
    return false;
  }
}

function writeCache($link, $content, $time = 60, $md = true)
{
  $link = $_SERVER['DOCUMENT_ROOT'] . '/cache/' . ($md == true ? md5($link) : $link);
  $fp = fopen($link, 'w');
  fwrite($fp, json_encode(array('time' => (time() + $time), 'content' => $content), JSON_UNESCAPED_UNICODE));
  fclose($fp);
  return true;
}
function ramd($pe)
{
  $rand = rand(100, $pe * 100);
  $num = number_format($rand / 100, 2, '.', '');
  return $num;
}

class Betapi
{
  public $api = '';
  function __construct($api)
  {
    $this->api = $api;
  }
  function getSource($url)
  {
    $cache = findCache($url);
    if ($cache != false) {
      return $cache;
    }
    $ch = curl_init($this->api . $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $_SERVER['HTTP_HOST']);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 YaBrowser/18.11.1.716 Yowser/2.5 Safari/537.36');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $source = curl_exec($ch);
    if ($source == 'error' || $source == 'wrong' || empty($source)) {
      return findCache($url, true, true);
    }
    writeCache($url, $source, 150);
    return $source;
  }
}

$betapi = new Betapi('https://grapibot.herokuapp.com');


$paystring = '[{"image":"bank-transfer.png","name":"Banka Transferi","limit":"Min. TRY: 1.00 / Max. TRY: 10,000.00","limitkey":"havale","slug":"havale","status":0},{"image":"deposit-264.png","name":"Papara Yatırım","limit":"Min. TRY: 20.00 / Max. TRY: 15,000.00","limitkey":"papara","slug":"papara","status":0},{"image":"deposit-777.png","name":"Payfix Yatırım","limit":"Min. TRY: 25.00 / Max. TRY: 10,000.00","limitkey":"payfix","slug":"payfix","status":0},{"image":"deposit-582.png","name":"QR ve Cepbank Yatırım","limit":"Min. TRY: 20.00 / Max. TRY: 5,000.00","limitkey":"cepbank","slug":"cepbank","status":0},{"image":"deposit-313.png","name":"Anında Havale Yatırım","limit":"Min. TRY: 50.00 / Max. TRY: 20,000.00","limitkey":"aninda-havale","slug":"havale","status":0},{"image":"deposit-412.png","name":"Envoy Hızlı Havale Yatırım","limit":"Min. TRY: 100.00 / Max. TRY: 10,000.00","limitkey":"hizli-havale","slug":"havale","status":0},{"image":"deposit-185.png","name":"Anında BTC Yatırım","limit":"Min. TRY: 20.00 / Max. TRY: 20,000.00","limitkey":"bitcoin","slug":"bitcoin","status":0},{"image":"deposit-575.png","name":"Otomatik Havale İle Yatırım Form","limit":"Min. TRY: 1.00 / Max. TRY: 10,000.00","limitkey":"otomatik-havale","slug":"havale","status":0},{"image":"deposit-1187.png","name":"Heetpay Deposit","limit":"Min. TRY: 50.00 / Max. TRY: 10,000.00","limitkey":"heetpay","slug":"guncelleniyor","status":1},{"image":"deposit-266.png","name":"Jet QR ile Para Yatır","limit":"Min. TRY: 20.00 / Max. TRY: 5,000.00","limitkey":"jetqr","slug":"guncelleniyor","status":1},{"image":"deposit-521.png","name":"Envoy Hızlı QR Yatırım","limit":"Min. TRY: 20.00 / Max. TRY: 5,000.00","limitkey":"evonyqr","slug":"guncelleniyor","status":1},{"image":"deposit-568.png","name":"Anında QR Yatırım","limit":"Min. TRY: 50.00 / Max. TRY: 5,000.00","limitkey":"anindaqr","slug":"guncelleniyor","status":1},{"image":"deposit-545.png","name":"Anında Mefete Yatırım","limit":"Min. TRY: 5.00 / Max. TRY: 10,000.00","limitkey":"mefete","slug":"guncelleniyor","status":1},{"image":"deposit-87.png","name":"Neropay Para Yatırım","limit":"Min. TRY: 100.00 / Max. TRY: 10,000.00","limitkey":"neropay","slug":"guncelleniyor","status":1},{"image":"deposit-13.png","name":"Astropay Para Yatırım","limit":"Min. TRY: 10.00 / Max. TRY: 10,000.00","limitkey":"astropay","slug":"guncelleniyor","status":1},{"image":"deposit-672.png","name":"Youpaycoin Yatırım","limit":"Min. TRY: 50.00 / Max. TRY: 10,000.00","limitkey":"yupacoin","slug":"guncelleniyor","status":1},{"image":"deposit-183.png","name":"QR ve Referans Kod Yatırım","limit":"Min. TRY: 20.00 / Max. TRY: 4,000.00","limitkey":"qr","slug":"guncelleniyor","status":1},{"image":"deposit-227.png","name":"Kredi Kartı Yatırımı - Form","limit":"Min. TRY: 50.00 / Max. TRY: 5,000.00","limitkey":"kredikarti","slug":"guncelleniyor","status":1}]';
