var vid, playbtn, seekslider, curtimetext, durtimetext;
var myclose = false;

function intializePlayer(){
	// Set object references
	vid = document.getElementById("my_video");
	playbtn = document.getElementById("playpausebtn");
	seekslider = document.getElementById("seekslider");
	curtimetext = document.getElementById("curtimetext");
	durtimetext = document.getElementById("durtimetext");
	// Add event listeners
	playbtn.addEventListener("click",playPause,false);
	seekslider.addEventListener("change",vidSeek,false);
	vid.addEventListener("timeupdate",seektimeupdate,false);
}


function playPause(){
	if(vid.paused){
		vid.play();
		playbtn.innerHTML = "Pause";
	} else {
		vid.pause();
		playbtn.innerHTML = "Play";
	}
}

function vidSeek(){
	var seekto = vid.duration * (seekslider.value / 100);
	vid.currentTime = seekto;
}

function seektimeupdate(){
	var nt = vid.currentTime * (100 / vid.duration);
	seekslider.value = nt;
	var curmins = Math.floor(vid.currentTime / 60);
	var cursecs = Math.floor(vid.currentTime - curmins * 60);
	var durmins = Math.floor(vid.duration / 60);
	var dursecs = Math.floor(vid.duration - durmins * 60);
	if(cursecs < 10){ cursecs = "0"+cursecs; }
	if(dursecs < 10){ dursecs = "0"+dursecs; }
	if(curmins < 10){ curmins = "0"+curmins; }
	if(durmins < 10){ durmins = "0"+durmins; }
	curtimetext.innerHTML = curmins+":"+cursecs;
	durtimetext.innerHTML = durmins+":"+dursecs;
	if(curmins==durmins && cursecs==dursecs)
	{
	  document.getElementById("video_player_box").style.display = "none";
         document.getElementById("question_box").style.display = "block";
	}
}

function update_min()
{

var currentbal = document.getElementById('curtimetext').value;
    //start the ajax
    $.ajax({
        url: "updatevideotime",  
        type: "GET",
          //pass data like this 
        data: {currentbal:currentbal.val()},    
        cache: false,
        success: function(data) {  
        if (data=="1")
        $('#message').html("<h2>Current balance has been updated!</h2>") 
        } 

    });    
 return "All data that you have entered will be lost!";
}
function mymessage()
{
    return "Do you really want to leave our brilliant application?";
   //if we return nothing here (just calling return;) then there will be no pop-up question at all
   //return;
}
window.onload = intializePlayer;
window.onbeforeunload = function (e) {
// Your logic to prepare for 'Stay on this Page' goes here 

    return "Please click 'Stay on this Page' and we will give you candy";
};