<?php

class Util {
	
	public static function setDisplayErr() {
		// エラー表示設定
		ini_set("display_errors", "On");
		error_reporting(E_ALL);
	}

	public static function sessionStart() {
		session_start();
		session_set_cookie_params(0, '/team-c/team-c/');
	}

}

?>