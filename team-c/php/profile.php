<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>プロフィール</title>
    
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
		<!-- ユーザのプロフィールと感情遷移グラフ -->
		<div id="profile_container">
			<!-- ユーザのプロフィール -->
			<div class="user_block">
				<div class="user_icon"><i class="fa fa-user-circle-o fa-4x" aria-hidden="true"></i></div><!--
				--><div class="user_name_home_block">
					<div class="user_name">ゆーざー名</div>
					<div class="user_home">hogehogeHAGEHAGE学園</div>
				</div>
			</div>
			<!-- ユーザの感情遷移グラフ -->
			<div class="graph_block">
				<div class="graph">
		    		
				</div>
				<div class="time_axis">

				</div>
				<a class="button day_button" href="#">1 Day</a><!--
				--><a class="button week_button" href="#">1 Week</a>
			</div>
		</div>

		<!-- ユーザのタイムライン -->
		<div id="timeline_container">

		</div>

	</body>
</html>	