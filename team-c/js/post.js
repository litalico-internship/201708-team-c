

function addAlpha(target, alpha_lev) {
	$(function () {
		var oldBGColor = target.css('background-color'),
			newBGColor = oldBGColor.replace(/[^,]+(?=\))/, alpha_lev);
		console.log(oldBGColor);
		console.log(newBGColor);
		target.css({ backgroundColor: newBGColor });
	});
}

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
		$("body").removeAttr("style");
		$("body").addClass(color[emotion]);
		$(".submit_emotion").css({ color: " " });
	});

	$(".input_range").change(function () {
		var emotion_level = {
			1: '0.2',
			2: '0.4',
			3: '0.6',
			4: '0.8',
			5: '1.0'
		};
		console.log($("body").css('background-color'));
		rgba_code = "";
		if (rgba_code.match(/\,/).index == 3) {
			//alphaある前提
		} else {
			//rgbのみの場合

		}
		;
		addAlpha($("body"), emotion_level[$(this).val()]);
	});
});