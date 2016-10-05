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
    //    playVideo()
        alert('test');
   //      return false;
    });

    }
 document.addEventListener("app.Ready", register_event_handlers, false);
})();
