<script>
                function EshowMe() {
               var Ecategory = document.getElementById('Ehidden-div');
            
               if(Ecategory.style.display == '' || Ecategory.style.display == 'none'){
                    Ecategory.style.display = 'block';
               }
               else {
                    Ecategory.style.display = 'none';
               }
            }
            </script>
            <script>
                    function Ehideme() {
                   var Ecategory = document.getElementById('Ehidden-div');
                
                   if(Ecategory.style.display == '' || Ecategory.style.display == 'none'){
                        Ecategory.style.display = 'block';
                   }
                   else {
                        Ecategory.style.display = 'none';
                   }
                }
            </script>
            <script >  
                    function popedit(atts)
                   {
                       $name = atts.name;
                       xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange=function()
                        {
                           if (xmlhttp.readyState==4 && xmlhttp.status==200)
                            {
                                 var data = JSON.parse(xmlhttp.responseText);
                                 console.log(data);
                                 document.getElementById("Eid").value=data.data[0].id;
                                 document.getElementById("Estory_name").value=data.data[0].story_name;
                                 document.getElementById("Eis_active").value=data.data[0].is_active;
                                
                               }
                       }     
                           xmlhttp.open("GET", "/{{config('app.name')}}/getstory/" + atts.name , true);
                           xmlhttp.send();
                           EshowMe();
                         }
        </script>
            <style>
        .k-window-titlebar .k-window-actions {
    position: absolute;
    top: 4px;
    left: 6px;
    right: auto;
}
.k-edit-label
{
    text-align:left;
}
.bbtn {
    float: left;
    padding-left: 1%;
    direction: ltr;
}
    </style>
            <div  id="Ehidden-div" style="display:none;">
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
             <div class="k-window-titlebar k-header" style="margin-top: -53.2667px;">&nbsp;<span class="k-window-title">Edit</span>
               <div class="k-window-actions"><a role="button" href="#" onclick='Ehideme()' class="k-window-action k-link">
                   <span role="presentation" class="k-icon k-i-close"></span></a></div></div>
                        <div  class="k-popup-edit-form k-window-content k-content" style="width:100% !important" data-role="window" tabindex="0">   
                                       <form method="POST" action="/{{config('app.name')}}/editstory" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="text"  name="Eid" id="Eid" style="display:none;">
                                             
                                                <div class="k-edit-form-container">
                                     
                         <div class="row" style="margin-left: 0px;margin-right: 0px;">
                              
                
                            </div>
                             <div class="row" style="margin-left: 2%;margin-right: 0px;">
                                  
                                           <div class="col-md-6">
                                        <div class="k-edit-label">
                                            <label for="mname">isActive</label>
                                            <br>
                                            <select required class="k-input k-textbox" name="Eis_active" id="Eis_active" style="padding-left: 3%;">
                                             
                                                  <option value='1'>Active</option>
                                                   <option value='0'>Inactive</option>
                                                 
                                           </select>       
                                        </div>
                                 </div>
                                   <div class="col-md-6">
                             <div class="k-edit-label">
                                 
                                            <label for="mname"> Story Name </label>
                                            <br>
                                            <input required type="text" class="k-input k-textbox" name="Estory_name" id="Estory_name"  data-required-msg="is required.">
                                        </div>
                                        </div>     
                             </div>
                                
                              
                            <div class="bbtn">
                        <input type="submit" id="btnleft" class="k-button k-button-icontext k-primary k-grid-update"   name="submitadd" value="Edit" >
                   <a onclick='Ehideme()' id="btnleft" class="k-button k-button-icontext k-grid-cancel" href="#">
                   Cancel</a>
                    </div>
                        </form>
                </div></div></div>
            </div>
            
            