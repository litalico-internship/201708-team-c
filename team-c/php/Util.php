<?php

class Util {
	// emotion_type -> phrase
	public static $phrase = array(
		'interesting' => '楽しい',
		'happy' => 'うれしい',
		'sad' => '悲しい',
		'tired' => 'つかれる',
		'angry' => 'むかつく'
	);

	// emotion_type -> color
	public static $color = array(
		'interesting' => 'yellow',
		'happy' => 'green',
		'sad' => 'blue',
		'tired' => 'purple',
		'angry' => 'red'
	);

	public static function setDisplayErr() {
		// エラー表示設定
		ini_set("display_errors", "On");
		error_reporting(E_ALL);
	}

	public static function sessionStart() {
		session_start();
		session_set_cookie_params(0, '/team-c/team-c/');
	}

	public static function h($str) {
		return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
	}

}

?>