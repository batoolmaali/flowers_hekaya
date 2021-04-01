@include('Layout.headadmin')
   @if(!isset(Auth::user()->email))
            <script>
                window.location = "/Drsalah/login";
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
            <div class="username desk_inline"> مرحبا ({{Auth::user()->name}})</div>
            <div class="buttons text-right desk">
                <a href="logoutadmin">
                    <img src="{{asset('assets/images/logout.png')}}">
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
        @include('Layout.menu')
            <div class="levels_body" style="padding-left:2%;padding-right:2%;">
             @include('Pages.system_user.addsystem_user')
            @include('Pages.system_user.editsystem_user')
            <div id="grid"  class="k-rtl"></div> 
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
                                  url: "readsystem_user" 
                               }
                               
                           },
                         serverPaging: false,
                         pageSize:8,
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
                       { field: "name" ,title:"الاسم"},
                       { field: "email" ,title:"البريد الالكتروني"},
                       { field: "role" ,title:"الصلاحية"},
                       { field: "active" ,title:"الحالة"},
                       { field: "id" ,title:" ", width: "250px" , template: "<a title='Edit user' class='k-button k-button-icontext' name='${id}'  onclick='popedit(this)'>تعديل  </a> <a title='Active' class='k-button k-button-icontext'  href='activeuser/${id}'>تفعيل</a> <a title='DisActive' class='k-button k-button-icontext' href='disactiveuser/${id}'>إيقاف</a> <a title='Show Ticket' href='usersystem_ticket/${id}'><i class=' label-danger ico feather icon-aperture'></i></a>"},
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
                    messages: {
                     display: "مشاهدة {0}-{1} من {2} عنصر" ,
                     empty: "لا يوجد عناصر",
                     itemsPerPage: "عنصر في الصفحة"
                     }
                  },
               sortable: true,
               filterable: true,
               navigable: true,    
               resizable: true,
                 filterable: {
    messages: {
        info: " ", // sets the text on top of the Filter menu
        filter: "تصفية", // sets the text for the "Filter" button
        clear: "إلغاء", // sets the text for the "Clear" button

        // when filtering boolean numbers
        isTrue: "صحيح", // sets the text for "isTrue" radio button
        isFalse: "خاطئ", // sets the text for "isFalse" radio button

        //changes the text of the "And" and "Or" of the Filter menu
        and: "و",
        or: "أو"
    },
    operators: {
        //filter menu for "string" type columns
        string: {
            eq: "مطابق ل",
            neq: "غير مطابق ل ",
            startswith: "يبدأ ب",
            contains: "يحتوي على",
            endswith: "ينتهي ب"
        },
        //filter menu for "number" type columns
        number: {
            eq: "يساوي",
            neq: "لا يساوي",
            gte: "أكبر من أو يساوي",
            gt: "أكبر من أو يساوي",
            lte: "أقل من أو لا يساوي",
            lt: "أقل من "
        },
        //filter menu for "date" type columns
       
        //filter menu for foreign key values
        enums: {
            eq: "يساوي",
            neq: "لا يساوي "
        }
    }
}
                       
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