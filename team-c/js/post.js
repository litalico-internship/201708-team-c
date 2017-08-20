
$(function () {
	$("#select_emotion").change(function () {
		var color = {
			interesting: 'yellow',
			happy: 'green',
			sad: 'blue',
			tired: 'purple',
			angry: 'red'
		};
		var emotion = $("select option:selected").val();
		$("body").removeAttr("class");
		$("body").addClass(color[emotion]);
		$(".submit_emotion").css({ color: " " });
	});
});