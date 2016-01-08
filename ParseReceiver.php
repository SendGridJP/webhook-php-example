<?php
  $fileName = "parse.log";
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 受信したPOSTの内容をログファイルに記録
    // multipart/form-data
    $data = print_r($_POST, true);
    file_put_contents($fileName, $data, FILE_APPEND);
    // 添付ファイル情報
    $files = print_r($_FILES, true);
    file_put_contents($fileName, $files, FILE_APPEND);
    // 添付ファイルの保存
    // foreach($_FILES as &$file) {
    //   if (is_uploaded_file($file["tmp_name"])) {
    //     if (move_uploaded_file($file["tmp_name"], "files/".$file["name"])) {
    //       chmod("files/".$file["name"], 0644);
    //     }
    //   }
    // }
    echo "Success";
  }
