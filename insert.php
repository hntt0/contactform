<?php
$name = $_POST["username"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$coment = $_POST["coment"];

define("HOST", "localhost");
define("DB_NAME", "task00");
define("USER", "root");
define("PASS", "root");
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET 'utf8'");
 
try {
    $pdo = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS, $options);
 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 
    $sql = "insert into contacform(name, mail, age, comments) values(:name, :mail, :age, :comments)";
    $stmt = $pdo->prepare($sql);
	$stmt->bindValue(":name", $name, PDO::PARAM_STR);
	$stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
	$stmt->bindValue(":age", $age, PDO::PARAM_STR);
	$stmt->bindValue(":comments", $coment, PDO::PARAM_STR);
	$stmt->execute();

} catch (Exception $e) {
    echo $e->getMessage();
}

	
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>無題ドキュメント</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
		<h1>お問い合わせフォーム</h1>
	<form action="insert.php" method="post" class="formbox">
		<p class="thankyou">お問い合わせ有難うございました。
		３営業日以内に担当者よりご連絡差し上げます。</p>
		</form>
</body>
</html>