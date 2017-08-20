

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
			5: '0.9'
		};
		/*
				rgba_code = $("body").css('background-color');
				//rgba(100,100,100,0.9)
				console.log('rgba');
				console.log(rgba_code);
				code = rgba_code.match(/(\d+,)+\d*(.\d)/);
				//'100,100,100,0.9'
				
				console.log('code部分');
				console.log(code);
				new_code = code[0].replace(/\d+(\.\d)*$/, '0.2');
				//'100,100,100,0.8'
				//new_code = new_code.match(/\d+(.*)$/)[1].replace(', ', '')
				//'0.8'
				console.log('新カラーコード');
				console.log(new_code);
				//codeの
				'100, 100, 100, 0.8'.replace(/new_code/, '0.5');
				$("body").css('background-color').replace(/new_code/, '0.5');
				if (rgba_code.match(/\,/).index == 3) {
					//alphaある前提
		
				} else {
					//rgbのみの場合
		
				}
				;
				*/
		addAlpha($("body"), emotion_level[$(this).val()]);
	});
});