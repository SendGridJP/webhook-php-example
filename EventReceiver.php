<?php
  $fileName = "event.log";
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 受信したPOSTの内容をログファイルに記録
    $body = file_get_contents('php://input');
    $json = json_decode($body);
    foreach($json as &$event) {
      file_put_contents($fileName, print_r($event, true), FILE_APPEND);
    }
    echo "Success";
  }
