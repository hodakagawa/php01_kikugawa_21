<?php
if (isset($_GET['line'])) {
    $line_to_delete = $_GET['line']; // 削除する行番号を取得

    $file_path = "data/data.txt";
    $lines = file($file_path, FILE_IGNORE_NEW_LINES); // ファイルの内容を行ごとの配列として読み込む

    if (isset($lines[$line_to_delete])) { // 削除する行が存在する場合
        unset($lines[$line_to_delete]); // その行を削除
        $lines = array_values($lines); // インデックスを再設定
        file_put_contents($file_path, implode(PHP_EOL, $lines)); // ファイルに内容を書き込む
    }
}

header("Location: read.php"); // read.phpにリダイレクト
?>

