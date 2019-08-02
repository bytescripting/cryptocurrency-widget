<?php
use \Curl\Curl;
session_start();
define('DS', DIRECTORY_SEPARATOR);

function writeJSON($name, $data) {
  $myfile = fopen($name, "w") or die("Hata!");
  fwrite($myfile, json_encode($data, JSON_PRETTY_PRINT));
  fclose($myfile);
}

// 1 minute cache
$fileName = 'db/dataJSON-'.date('d.m.Y H:i').'.json';
if (file_exists($fileName)) {
  $coins = json_decode(file_get_contents($fileName));
} else {
  include('vendor/autoload.php');

  $curl = new Curl();
  $curl->get("http://api.openmarketcap.com/api/v1/tokens?size=367");

  $coins = (array) $curl->response;
  $coins = (array) $coins['data'];
  writeJSON($fileName, $coins);
}
// alloweds first element must be 0
$alloweds = explode(',', "0,btc,eth,xrp,bch,ltc,bnb,usdt,eos,bsv,xlm,neo,etc,ont,mkr,xem,btg,doge,vet,qtum,pax,dcr,hedg,omg");
?>
