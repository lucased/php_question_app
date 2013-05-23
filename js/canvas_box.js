function draw_box() {
	var a_canvas = document.getElementById("a");
	var a_context = a_canvas.getContext("2d");
	a_context.fillRect(50, 40, 100, 100);
}

function draw_line() {
	var b_canvas = document.getElementById("a");
	var b_context = b_canvas.getContext("2d");

	for(x = 0.5; x < 500; x += 10) {
		b_context.moveTo(x, 0);
		b_context.lineTo(x, 375);
	}

	for(y = 0.5; y < 375; y += 10) {
		b_context.moveTo(0, y);
		b_context.lineTo(375, y);
	}

	b_context.strokeStyle = "#eee";
	b_context.stroke();
}

draw_line();

