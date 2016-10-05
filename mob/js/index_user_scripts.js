/*jshint browser:true */
/*global $ */(function()
{
 "use strict";
 /*
   hook up event handlers
 */
 function register_event_handlers()
 {


     /* listitem  {{entry.category}} */
    $(document).on("click", ".uib_w_3", function(evt)
    {
      evt.preventDefault();
        playVideo()
        alert('test');
   //      return false;
    });

    }
 document.addEventListener("app.Ready", register_event_handlers, false);
})();

   function playVideo()
        {
            //this function launches default video player and plays the video.mp4 file.
            intel.xdk.player.playPodcast("http://labs.qnimate.com/video.mp4");
        }

        document.addEventListener("intel.xdk.player.podcast.start", function(){
            //started playing video
         //   alert("start");

        }, false);

        document.addEventListener("intel.xdk.player.podcast.stop", function(){
            //video finished or player closed
        //    alert("stop");
        }, false);

        document.addEventListener("intel.xdk.player.podcast.error", function(){
            //error occured therefore video cannot be played
      //      alert("error");
        }, false);

        document.addEventListener("intel.xdk.player.podcast.busy", function(){
            //another video is already being played
       //     alert("busy");
        }, false);
