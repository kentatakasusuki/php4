<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>社員登録</title>
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
		<div class="col-md-2">
<h2>管理メニュー</h2>
<ul>
<li><a href="https://hystericend.sakura.ne.jp/takasusukisample3/">社員登録</a></li>
<li><a href="https://hystericend.sakura.ne.jp/takasusukisample3/login.php">ログイン画面</a></li>
</ul>
		</div>
		
		<div class="col-md-10">
<h2>社員登録</h2>
<form action="therapist_regist_check.php" method="POST" class="form-horizontal">		
	<div class="form-group">
		<label class="col-sm-1 control-label" for="InputEmail">名前</label>
		<div class="col-sm-5">
			<input  type="text" name="cont1" class="form-control" id="InputEmail" >
		</div>
		<label class="col-sm-1 control-label" for="InputEmail">役職</label>
		<div class="col-sm-5">
		<select class="form-control" id="InputSelect" name="cont2">
				<option value="1">管理ユーザー</option>
				<option value="2">一般ユーザー</option>
		</select>	
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-1 control-label" for="InputEmail">LOGINID</label>
		<div class="col-sm-5">
			<input  type="text" name="cont3" class="form-control" id="InputEmail" >
		</div>
		<label class="col-sm-1 control-label" for="InputEmail">LOGINPASS</label>
		<div class="col-sm-5">
			<input  type="text" name="cont4" class="form-control" id="InputEmail" >
		</div>
		
	</div>
<input type="submit" value="登録">
</form>
</div>
		
		</div>
</div>


 </main>
<footer>
</footer>
  
</body>
</html>