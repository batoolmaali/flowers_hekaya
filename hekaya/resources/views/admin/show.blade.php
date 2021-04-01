<script>
        function showMe(atts) {
       var user = document.getElementById('hidden-div');
    
       if(user.style.display == '' || user.style.display == 'none'){
            user.style.display = 'block';
       }
       else {
            user.style.display = 'none';
       }
       console.log(atts.name);
       vid=document.getElementById('vid');
       vid.src=atts.name;
       vid.load();
    }
</script>
    <script>
            function hideme() {
           var user = document.getElementById('hidden-div');
        
           if(user.style.display == '' || user.style.display == 'none'){
                user.style.display = 'block';
           }
           else {
                user.style.display = 'none';
           }
           vid=document.getElementById('vid');
          vid.src='';
           vid.load();
        }
    </script>
    <div  id="hidden-div" style="display:none;">
    <div class="k-widget k-window" data-role="draggable" style="padding-top: 53.2667px;
    min-width: 90px;
    min-height: 50px;
    top: 2%;
    left: 10%;
    touch-action: none;
    z-index: 10003;
    opacity: 1;
    transform: scale(1);
    width: 80%;">
     <div class="k-window-titlebar k-header" style="margin-top: -53.2667px;">&nbsp;
       <div class="k-window-actions"><a role="button" href="#" onclick='hideme()' class="k-window-action k-link">
           <span role="presentation" class="k-icon k-i-close"></span></a></div></div>
               <div class="k-popup-edit-form k-window-content k-content" style="width:100% !important;padding: 0px;margin: 0px;" data-role="window" tabindex="0">   
                        <div class="k-edit-form-container" style="
    width: 100%;
">
                            <div class="row" style="/* margin-left: 0px; *//* margin-right: 0px; *//* padding: 4%; */width: 100%;padding: 0px;margin: 0px;">
                                <video id="vid" nocontrols style="
    width: 100%;
" autoplay ><source  type="video/mp4"></video>
     
                
        </div></div></div>
    </div>
	</div>
    
    