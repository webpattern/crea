var ap_instances = new Array();

function ap_stopAll(playerID) {
	for(var i = 0;i<ap_instances.length;i++) {
		try {
			if(ap_instances[i] != playerID) document.getElementById("audioplayer" + ap_instances[i].toString()).SetVariable("closePlayer", 1);
			else document.getElementById("audioplayer" + ap_instances[i].toString()).SetVariable("closePlayer", 0);
		} catch( errorObject ) {
			// stop any errors
		}
	}
}

function ap_registerPlayers() {
	var objectID;
	var objectTags = document.getElementsByTagName("object");
	for(var i=0;i<objectTags.length;i++) {
		objectID = objectTags[i].id;
		if(objectID.indexOf("audioplayer") == 0) {
			ap_instances[i] = objectID.substring(11, objectID.length);
		}
	}
}

var ap_clearID = setInterval( ap_registerPlayers, 100 );


var audio=document.querySelector("audio");
audio.volume=0.1;

		var audio1 = document.getElementById("sound-1");
		$(".logo img").mouseenter(function() {
		audio1.play();

});


/*$(".logo img").mouseenter(function() {

    $("#sound-" + Math.ceil(Math.random() * 9))[0].play();

});*/



/*$(".but_cart button").mouseenter(function(){
        $("<audio></audio>").attr({
                'src':'audio/bom1.mp3',
                'volume': 0.1,
                'autoplay':'autoplay'
        }).appendTo("body");
});*/

/*$(".nav_menu1").mouseenter(function(){
        $("<audio></audio>").attr({
                'src':'audio/aau.mp3',
                'audio.volume':0.1,
                'autoplay':'autoplay'
        }).appendTo("body");
});

$(".nav_menu2").mouseenter(function(){
        $("<audio></audio>").attr({
                'src':'audio/aau.mp3',
                'audio.volume':0.1,
                'autoplay':'autoplay'
        }).appendTo("body");
});

$(".nav_menu3").mouseenter(function(){
        $("<audio></audio>").attr({
                'src':'audio/aau.mp3',
                'audio.volume':0.1,
                'autoplay':'autoplay'
        }).appendTo("body");
});

$(".nav_menu4").mouseenter(function(){
        $("<audio></audio>").attr({
                'src':'audio/aau.mp3',
                'audio.volume':0.1,
                'autoplay':'autoplay'
        }).appendTo("body");
});*/


