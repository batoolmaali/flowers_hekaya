@include('Layout.headadmin')
     @if(!isset(Auth::user()->email))
            <script>
                window.location = "login";
            </script>
@else
<body>
    <input type="hidden" value="{{Auth::user()->id}}"  id="user_id">
    <div id="app">
        <div class="headerSpacer"></div>
        <header>
            <div class="logo">
                <a href="#">
                    <img src="{{asset('assets/images/logo.png')}}">
                </a>
            </div>
            <div class="username desk_inline"> Hello ({{Auth::user()->name}})</div>
            <div class="buttons text-right desk">
                <a href="logoutadmin">
                 Logout
                </a>
               
            </div>
            <div class="mobMenu">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="levelsHeaderDashes"></div>
        </header>
        <div class="levels_page">
        @include('Layout.menu2')
            <div class="levels_body" style="padding-left:2%;padding-right:2%;">
           
            @include('Pages.active_level.editactive_level')
            <div id="grid"></div> 
        <script>
             $(function()
                {
                 
                   $("#grid").kendoGrid({
                                       
                           edit: function(e) {
                           e.container.find("label[for=id]").parent("div .k-edit-label").hide();
                           e.container.find("label[for=id]").parent().next("div .k-edit-field").hide();
        
                              },
                       dataSource: 
                       {
                       
                           transport:
                           {
                               
                               read: 
                               {
                                  dataType: "json",
                                  url: "/{{config('app.name')}}/readactive_level" 
                               }
                           },
                         serverPaging: false,
                         pageSize:50,
                       schema: 
                           {
                             data: "data",
                              model: 
                               {
                                   id: "id",
                                   fields: 
                                   {
                                   
                                   }
                           },
                           total: function(response) {
                              return $(response.data).length;
                            }
                           } 
         
                       },
                       columns: [
                       { field: "id" ,title:"Level ID"},
                       { field: "statusname" ,title:"isActive"},
                       { field: "id" ,title:" ", width: "250px" , template: "<a class='k-button k-button-icontext' name='${id}'  onclick='popedit(this)'>Edit </a>"},
                     
                        ],
                      editable:
                       {  mode: "popup",
                       confirmation: true,
                        confirmDelete: "Yes"
                        } ,
                      
                       // dataBound: ColorMeBad,                
                 pageable: {
                    alwaysVisible: false,
                    pageSizes: [10, 25, 50, 100],
                    
                  },
               sortable: true,
               filterable: true,
               navigable: true,    
               resizable: true,
                 filterable: true
                   });
              
               
              });
        
           function textareaEditor(container, options) 
       {
           $('<textarea data-bind="value: ' + options.field + '" cols="29" rows="5"></textarea>')
               .appendTo(container);
       }
       function categoryDropDownEditor(container, options) {
                    $('<input required name="' + options.field + '"/>')
                        .appendTo(container)
                        .kendoDropDownList({
                            autoBind: false,
                            dataTextField: "title",
                            dataValueField: "title",
                            dataSource: _typedatasource1
                        });
                } 
    </script> 

                                            <!-- body  end -->
            </div>
        </div>
    </div>


@include('Layout.includefooteradmin')
    @endif
</body>
</html>