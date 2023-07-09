<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください

function h($value){
    return htmlspecialchars($value, ENT_QUOTES);
}

$name = h($_POST["name"]);
$mail = h($_POST["mail"]);
$age = h($_POST["age"]);
$job = h($_POST["job"]);
$prefecture = h($_POST["prefecture"]);

//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$age.",".$job.",".$prefecture;

//File書き込み
$file = fopen("data/data.txt","a");
fwrite($file, $str."\n");
fclose($file);
?>
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>
