<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);

}

$flg = 0;
$name = $_POST["name"];
$mail = $_POST["mail"];

 
//File書き込み
//課題は
//名前とメールの変数をカンマ区切りの文字列にしてファイルにかきこめるようにする

$file = fopen("data.text","a");	// ファイル読み込み
fwrite($file,$name.",".$mail."\r\n");
fclose($file);
?>


?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?php echo h($name); ?>
EMAIL： <?php echo h($mail); ?>

<?php
    if($flg == 0){
?>
    <button>登録</button>
<?php
    }

?>


<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>