/*jshint -W117 */
/*jshint -W098 */

function draw(o, pt) {
	ctx.beginPath();
	if(o instanceof Point) {
		log("DrawDot: " + o);
		ctx.arc(o.x,o.y,lineWidth()/2,0,2*Math.PI);
		ctx.fill();
	} else if(o instanceof Vector) {
		log("DrawVector: " + o);
		var headlen = o.mag() / 10;   // length of head in pixels
		var angle = Math.atan2(o.dy,o.dx);
		ctx.moveTo(o.o.x, o.o.y);
		ctx.lineTo(o.t.x, o.t.y);
		ctx.lineTo(o.t.x-headlen*Math.cos(angle-Math.PI/6),o.t.y-headlen*Math.sin(angle-Math.PI/6));
		ctx.moveTo(o.t.x, o.t.y);
		ctx.lineTo(o.t.x-headlen*Math.cos(angle+Math.PI/6),o.t.y-headlen*Math.sin(angle+Math.PI/6));
		ctx.stroke();
	} else if(o instanceof Line) {
		log("DrawLine: " + o);
		if(o.dx === 0) {
			ctx.moveTo(o.o.x, 0);
			ctx.lineTo(o.t.x, h);
		} else if(o.dy === 0) {
			ctx.moveTo(0, o.o.y);
			ctx.lineTo(w, o.t.y);
		} else {
			var yreps1;
			var xreps1;
			var yreps2;
			var xreps2;
			if(o.dy > 0) {
				yreps1 = o.o.y/o.dy;
				yreps2 = (h-o.o.y)/o.dy;
			} else {
				yreps2 = -o.o.y/o.dy;
				yreps1 = -(h-o.o.y)/o.dy;
			}
			if(o.dx > 0) {
				xreps1 = o.o.x/o.dx;
				xreps2 = (w-o.o.x)/o.dx;
			} else {
				xreps2 = -o.o.x/o.dx;
				xreps1 = -(w-o.o.x)/o.dx;
			}
			var minreps1 = Math.min(yreps1,xreps1);
			var minreps2 = Math.min(yreps2,xreps2);
			var pt1 = new Point(o.o.x-(minreps1*o.dx), o.o.y-(minreps1*o.dy));
			var pt2 = new Point(o.o.x+(minreps2*o.dx), o.o.y+(minreps2*o.dy));
			ctx.moveTo(pt1.x,pt1.y);
			ctx.lineTo(pt2.x,pt2.y);
		}
		ctx.stroke();
	} else if(typeof o === "string") {
		log("DrawString: " + o);
		ctx.fillText(o,pt.x,pt.y);
	}
}

function drawGrid(sz,strokeStyle,lineWidth) {
	var i;
	sz = typeof sz !== 'undefined' ? sz : 30;
	strokeStyle = typeof style !== 'undefined' ? style : "#AAF";
	lineWidth = typeof style !== 'undefined' ? style : 1;
	var lastStrokeStyle = ctx.strokeStyle;
	ctx.strokeStyle = strokeStyle;
	var lastLineWidth = ctx.lineWidth;
	ctx.lineWidth = lineWidth;
	for(i=0;i<w;i+=sz) {
		ctx.beginPath();
		ctx.moveTo(i,0);
		ctx.lineTo(i,h);
		ctx.stroke();
	}
	for(i=0;i<h;i+=sz) {
		ctx.beginPath();
		ctx.moveTo(0,i);
		ctx.lineTo(w,i);
		ctx.stroke();
	}
	ctx.beginPath();
	ctx.moveTo(0,0);
	ctx.lineTo(Math.min(w,h),Math.min(w,h));
	ctx.stroke();
	ctx.strokeStyle = lastStrokeStyle;
	ctx.lineWidth = lastLineWidth;
}
