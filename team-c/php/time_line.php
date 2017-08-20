<?php 
require_once realpath(dirname(__FILE__) ) . "/DataBase.php";
require_once realpath(dirname(__FILE__) ) . "/Util.php";

$userId = 1;
$db = new DataBase();

// get current emotion type
$sql = 'SELECT * FROM emotion_posts ' .
		'WHERE  user_id = :user_id '.
		'ORDER BY created DESC LIMIT 1';
$params = array(
	'user_id' => $userId
);
$emotionType = $db->query($sql, $params)[0]['emotion_type'];

// get same emotion TimeLine 
$sql = 'SELECT * FROM emotion_posts ' .
		"WHERE emotion_posts.emotion_type = ':emotion_type' ".
		'ORDER BY created DESC';
$params = array(
	'emotion_type' => $emotionType
);
$emotionTL = $db->query($sql, $params);

// get current TimeLine
$sql = 'SELECT * FROM emotion_posts ' .
		'ORDER BY created DESC';
$currentTL = $db->query($sql);

?>

<!DOCTYPE html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>タイムライン</title>

	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

	<!-- CSS Reset -->
	<link rel="stylesheet" href="https://cdn.rawgit.com/necolas/normalize.css/master/normalize.css">

	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="https://cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">

	<!-- You should properly set the path from the main file. -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/time_line.css">
	<link rel="stylesheet" type="text/css" href="../css/profile.css">
	<link rel="stylesheet" type="text/css" href="../css/post.css">

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<!-- original js file -->
	<script type="text/javascript" src="../js/time_line.js"></script>
	<script type="text/javascript" src="../js/profile.js"></script>
	<script type="text/javascript" src="../js/post.js"></script>

	<!-- fontawesome -->
	<script src="https://use.fontawesome.com/8135123537.js"></script>

</head>

<body>
	<div class="select_time_line">
		<a class="button button-outline" href="#">みんなのTL</a>
		<a class="button button-outline" href="#">おんなじTL</a>
	</div>
	<div class="wrapper_time_line">
		<?php foreach ($currentTL as $key => $val) : ?>
		<!--一つのブロック始まり -->
		<div class="a_block_time_line green">
			<div class="sentence_time_line">
				<a>
					<p><?php echo Util::h($val['reason']) . '、' . Util::h($val['emotion_type']); ?></p>
				</a>
			</div>
			<div class="icon_time_line">
				<a><i class="fa fa-hand-peace-o" aria-hidden="true"></i> 1</a>
				<a><i class="fa fa-star-o" aria-hidden="true"></i>13</a>
				<a><i class="fa fa-hand-peace-o" aria-hidden="true"></i>45</a>
				<a><i class="fa fa-reply reply" aria-hidden="true"></i></a>
			</div>
		</div>
		<!--一つのブロッック終わり -->
		<?php endforeach ?>
	</div>
	<div class="post_float_button white ">
		<a>+</a>
	</div>
</body>

</html>