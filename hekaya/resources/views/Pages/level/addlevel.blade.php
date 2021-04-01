<script>
        function showMe() {
            
         var category = document.getElementById('hidden-div');
       if(category.style.display == '' || category.style.display == 'none'){
            category.style.display = 'block';
       }
       else {
            category.style.display = 'none';
       }
    }
    </script>
    <script>
            function hideme() {
           var category = document.getElementById('hidden-div');
        
           if(category.style.display == '' || category.style.display == 'none'){
                category.style.display = 'block';
           }
           else {
                category.style.display = 'none';
           }
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
     <div class="k-header k-grid-toolbar" style="
    width: 100%;
    padding-top: 1%;
    padding-left: 2%;
    ">
    <button type="button" onclick="showMe()" class="k-button k-button-icontext k-grid-add" style="float:left;">Add New +</button>	
    </div>
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
     <div class="k-window-titlebar k-header" style="margin-top: -53.2667px;">&nbsp;<span class="k-window-title">Add</span>
       <div class="k-window-actions"><a role="button" href="#" onclick='hideme()' class="k-window-action k-link">
           <span role="presentation" class="k-icon k-i-close"></span></a></div></div>
                <div  class="k-popup-edit-form k-window-content k-content" style="width:100% !important" data-role="window" tabindex="0">   
                  <form method="POST" action="/{{config('app.name')}}/addlevel" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="text"  name="story_id" id="story_id" style="display:none;" value="{{$id}}" >
                        <div class="k-edit-form-container">
                           
                                <div class="row" style="margin-left: 2%;margin-right: 0px;">
                                    <div class="col-md-6">
                             <div class="k-edit-label">
                                 
                                            <label for="mname">Version </label>
                                            <br>
                                            <input required type="number" min="1" class="k-input k-textbox" name="version"  data-required-msg="is required.">
                                        </div>
                                        </div>
                                    <div class="col-md-6">
                             <div class="k-edit-label">
                                 
                                            <label for="mname"> Level Name </label>
                                            <br>
                                            <input required type="text" class="k-input k-textbox" name="level_name"  data-required-msg="is required.">
                                        </div>
                                        </div>
                                          
                                       
                                  <div class="col-md-6">
                             <div class="k-edit-label">
                                 
                                            <label for="mname"> Story Text </label>
                                            <br>
                                         <textarea name="story_text" class="k-input k-textbox" id="next"></textarea>
                                        </div>
                                        </div>
                                            <div class="col-md-6">
                                        <div class="k-edit-label">
                                            <label for="mname">isActive</label>
                                            <br>
                                            <select required class="k-input k-textbox" name="is_active" style="padding-left: 3%;">
                                             
                                                  <option value='1'>Active</option>
                                                   <option value='0'>Inactive</option>
                                         
                                           </select>       
                                        </div>
                                         
                                 </div>
                                 </div>
                                  <div class="row" style="margin-left: 2%;margin-right: 0px;">
                                    
                                         <div class="col-md-6">
                                         <div class="k-edit-label">
                                 
                                            <label for="mname">Image Story</label>
                                            <br>
                                          <input type="file" name="image_story" id="logo" accept="image/*" >   
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                         <div class="k-edit-label">
                                 
                                            <label for="mname">Image Level</label>
                                            <br>
                                          <input type="file" name="image_level" id="logo" accept="image/*" >   
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                         <div class="k-edit-label">
                                 
                                            <label for="mname">Bundle link</label>
                                            <br>
                                          (Android) <input type="file" name="bundle_link" id="logo"  >   
										  <br>
										  (IOS) <input type="file" name="bundle_link_ios" id="logo"  >   
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                             <div class="k-edit-label">
                                 
                                            <label for="mname"> Bundle Name </label>
                                            <br>
                                    <input required type="text" class="k-input k-textbox" name="bundle_name"  data-required-msg="is required.">
                                        </div>
                                        </div>
                                         
                                         
                                    </div>
                              
           <div class="bbtn">
                        <input type="submit" id="btnleft" class="k-button k-button-icontext k-primary k-grid-update"   name="submitadd" value="Add" >
                   <a onclick='hideme()' id="btnleft" class="k-button k-button-icontext k-grid-cancel" href="#">
                  Cancel</a>
                    </div>
                </form>
     </div></div>  </div>
    </div>
    
    