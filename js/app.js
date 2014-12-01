(function(){

	var songs = [];
	var song_index;
	var video;
	var app;

	function clicked(e){
		e.preventDefault();
	}

	function play(file){
		file = "uploads/" + file;

		if(video.canPlayType('video/mp4; codecs="mp4a.40.2"')){
			file += ".mp3";
		}else if(video.canPlayType('video/ogg; codecs="vorbis"')){
			file += ".ogg";
		}

		video.setAttribute("src",file);
		video.play();
		console.log(file);
	}

	function init(){
		// video = document.getElementsByTagName("video")[0];
		// app = document.querySelector(".app");
		// start = document.querySelector(".start");

		// Array.prototype.forEach.call(app.getElementsByTagName("a"),function(a){
		// 	a.addEventListener("click",clicked);
		// 	console.log(songs);
		// }
	}

	init();
})();
