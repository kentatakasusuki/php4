<?php
  session_start();
?>

<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>社員ページトップ</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title></title>
    <!-- BootstrapのCSS読み込み -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="./js/bootstrap.min.js"></script>
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="./css/base.css" rel="stylesheet">
</head>
<body>
<main>
<div class="container-fluid">
	<div class="row">
	
<?

	define('PVL_DIR_COMN_PATH','./system/'); //comnフォルダまでのpath(必ず設定して下さい)
	require_once(PVL_DIR_COMN_PATH.'config/app_conf.php');

try {
    /* リクエストから得たスーパーグローバル変数をチェックするなどの処理 */
$_ = function($s){return $s;};//展開用
    // データベースに接続
    $pdo = new PDO("mysql:host={$_(PVL_DB_HOSTNAME)};dbname={$_(PVL_DB_DBNAME)};charset=utf8",PVL_DB_USER,PVL_DB_PASSWD,
[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
])
;

$id =$_POST["cont1"];

$stmt2 = "SELECT * FROM takasample WHERE `loginid` = `$id`";
$stmt = $pdo->query("SELECT * FROM takasample WHERE `loginid` = \"$id\"");
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {

   $arg["data2"][]=$row;
}

if(empty($arg["data2"])){
	$flag = 1;
}elseif (password_verify($_POST['cont2'],$arg["data2"][0]["loginpass"])){
	$flag = 0;
	
}else{
	$flag = 2;
	
}
//セッション管理

$_SESSION['id'] = $arg["data2"][0]["id"];
$_SESSION['name'] = $arg["data2"][0]["name"];
$_SESSION['career'] = $arg["data2"][0]["career"];

} catch (PDOException $e) {

	echo("接続エラーです。");
}	

?>  



<?
switch($flag){
    case 1:?>
<p>LOGINIDが正しくありません。</p>
<p><a class="btn btn-default" href="login.php" role="button">認証画面に戻る。</a>
<?
	break; //switch文から抜ける。
    case 2: //$valの値が2の時実行される。
?>
<p>LOGINPASSWORDが正しくありません。</p>
<p><a class="btn btn-default" href="login.php" role="button">認証画面に戻る。</a>

<?
    break; //switch文から抜ける.
    default: //$valの値が上記に当てはまらない場合に時実行される。
?>
	<div class="col-md-2">
<h2>社員ページトップ</h2>
<ul>
<li><a href="https://hystericend.sakura.ne.jp/takasusukisample3/todolist1.php">TODOLISTを書く</a></li>
<li><a href="https://hystericend.sakura.ne.jp/takasusukisample3/todolist2.php">TODOLISTを見る</a></li>
<li><a href="https://hystericend.sakura.ne.jp/takasusukisample3/logout.php">ログアウト</a></li>
</ul>
		</div>
		
		<div class="col-md-10">
<p>ログイン完了しました。</p>
<p><?= $_SESSION['name'] ?>さん：

<?
switch($_SESSION['career']){
	case 1:
	$msg="管理ユーザー";
	break;
	case 2:
	$msg="一般ユーザー";
	break;
}

echo ($msg);

 ?></p>

<?}?>










	</div>
		
		</div>
</div>


 </main>
<footer>
</footer>
  
</body>
</html>