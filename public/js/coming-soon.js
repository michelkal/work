function setHeights() {
	var a = $(window).height();
	$(".slide").height(a)
}

function addSticky() {
	$(".slide").each(function() {
		var a = $(this).offset().top;
		window.scrollY >= a ? $(this).addClass("fix-it") : $(this).removeClass("fix-it")
	})
}! function(a) {
	a.fn.countdown = function(b, c) {
		function d() {
			var b = Date.parse(e.date) / 1e3,
			d = Math.floor(a.now() / 1e3);
			b <= d && (c.call(this), clearInterval(interval));
			var f = b - d,
			g = Math.floor(f / 86400);
			f -= 60 * g * 60 * 24;
			var h = Math.floor(f / 3600);
			f -= 60 * h * 60;
			var i = Math.floor(f / 60);
			f -= 60 * i, 1 == g ? thisEl.find(".timeDays").text("day") : thisEl.find(".timeDays").text("days"), 1 == h ? thisEl.find(".timeHours").text("hour") : thisEl.find(".timeHours").text("hours"), 1 == i ? thisEl.find(".timeMinutes").text("minute") : thisEl.find(".timeMinutes").text("minutes"), 1 == f ? thisEl.find(".timeSeconds").text("second") : thisEl.find(".timeSeconds").text("seconds"), "on" == e.format && (g = String(g).length >= 2 ? g : "0" + g, h = String(h).length >= 2 ? h : "0" + h, i = String(i).length >= 2 ? i : "0" + i, f = String(f).length >= 2 ? f : "0" + f), thisEl.find(".days").text(g), thisEl.find(".hours").text(h), thisEl.find(".minutes").text(i), thisEl.find(".seconds").text(f)
		}
		thisEl = a(this);
		var e = {
			date: null,
			format: null
		};
		b && a.extend(e, b), d(), interval = setInterval(d, 1e3)
	}
}(jQuery), $("#countdown").countdown({
	date: "1 March 2017 12:00:00",
	format: "on"
}, function() {
	alert("We're Out Now")
}), setHeights(), $(window).resize(function() {
	setHeights()
}), $(window).scroll(function() {
	addSticky()
});