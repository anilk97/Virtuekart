  
    <script src="zoomSlider3.js" type="text/javascript"></script>
    <link href="themes32/1/zoomslider.css" rel="stylesheet" type="text/css" />
     <script type="text/javascript">
        //The following script is for custom navigation buttons.
        function switchAutoAdvance() {
            zoomSlider.switchAuto();
            switchPlayPauseClass();
        }
        function switchPlayPauseClass() {
            var auto = document.getElementById('auto');
            if (auto) {
                var isAutoPlay = zoomSlider.getAuto();
                auto.className = isAutoPlay ? "navPause" : "navPlay";
                auto.title = isAutoPlay ? "Pause" : "Play";
            }
        }
        switchPlayPauseClass();


        //Change the captionEffect. It is recommended to set { captionEffect: "fade" } directly through the zoomSliderOptions in the javascript file instead of using the approach below
        zoomSlider.changeOptions({ captionEffect: "fade" });

    </script>
 

   
    <div id="wrapper"  >
    
        <div id="zoom-slider" style="height:280px; margin-top:0px; width:1045px; ">
            <img src="images/slider2.png" alt="" height="300" width="1050" />
            <img src="images/slider1.png" alt="" height="300" width="1050" />
           
                <img src="images/slider4.png" alt="" height="300" width="1050" /></a>
        </div>
        <!--The following are custom navigation buttons-->
        <div style="width:1027px;background:black;padding: 4px 8px 8px 10px; border-radius:0 0 6px 6px; text-align:right; margin-left:2px;">
            <div style="float:left; width:50px;">
                <a onClick="zoomSlider.previous()" class="navPrev"></a>
                <a id='auto' onClick="switchAutoAdvance()"></a>
                <a onClick="zoomSlider.next()" class="navNext"></a>
            </div>
            <span id="thumbs" style="  width:500px;">
                <span><img src="images/slider2.png" height="35" width="70" /></span>
                <span><img src="images/slider1.png" height="35" width="70" /></span>
                <span><img src="images/slider4.png"height="35" width="70"  /></span>
              
                                 

            </span>
        </div>
        <!--The following are HTML captions-->
       
    </div>
   
   
