<?php

// ファイルの読み込み
require_once('Models/Task.php');
// データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
$deadline = $_POST['deadline'];
$currrentTime = date("Y/m/d H:i:s");

// DBへのデータ保存
$task = new Task();
$task->create([$title, $contents, $currentTime, $deadline]);


// リダイレクト
header('location: index.php');
exit;