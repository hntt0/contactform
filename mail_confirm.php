<?php
$name = $_POST["username"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$coment = $_POST["coment"];
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>無題ドキュメント</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
	<h1>お問合わせ内容確認</h1>
	<form action="insert.php" method="post" class="formbox">
		<p class="check">お問い合わせ内容はこちらで宜しいでしょうか？<br>
		よろしければ「登録します」押してください。</p>
		<label>名前</label>
		<p class="box"><?php echo $name;?></p>
		<label>メールアドレス</label>
		<p class="box"><?php echo $mail;?></p>
		<label>年齢</label>
		<p class="box"><?php echo $age;?></p>
		<label>コメント</label>
		<p class="box"><?php echo $coment;?></p>
		<div class="box1">
		<a href="index.html" class="back">戻って修正する</a>
		</div>
		<input type="submit" value="登録します" class="sousin">
		<input type="hidden" value="<?php echo $name?>" name="username">
		<input type="hidden" value="<?php echo $mail?>" name="mail">
		<input type="hidden" value="<?php echo $age?>" name="age">
		<input type="hidden" value="<?php echo $coment ?>" name="coment">
		</form>
</body>
</html>