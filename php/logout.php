<?php
	//セッション
	session_start();
	//data-change.phpを呼出し、「PHPの定数」と，「HTMLのname属性」を対応付ける
	require_once "data-change.php";

	if(isset($_SESSION[USER_ID])) {
	  $message = "ログアウトしました。";
	} else {
	  $message = "セッションがタイムアウトしました。";
	}
	// セッション変数のクリア
	$_SESSION = array();

	// セッションクリア
	@session_destroy();

	header("Location: ../editor.php");
	exit();
?>
