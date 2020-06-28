<?php

// ファイルの読み込み
require_once('Models/Task.php');

// データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
$deadline = $_POST['deadline'];
$id = $_POST['id'];

// DBへのデータ保存
$task = new Task();
$task->update([$title, $contents, $deadline, $id]);

// リダイレクト
header('location:index.php');
exit;
