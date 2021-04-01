@include('Layout.headadmin')
     @if(!isset(Auth::user()->email))
            <script>
                window.location = "loginadmin";
            </script>
    @endif
      @if(Auth::user()->role!=1)
            <script>
                window.location = "loginadmin";
            </script>
    @endif
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
         @include('admin.show')
        <div class="levels_page">
            <div class="levelsMenu">
                <div class="mob mb-4">
                    <div class="username">مرحبا ({{Auth::user()->name}})</div>
                    <a href="/riyal/updateinfo"><img src="{{asset('assets/images/settings_mob.png')}}"></a>
                </div>
                <a href="admindashboard1" class="">
                    <img src="{{asset('assets/images/icon-home.png')}}">
                    <span>كل المشتركين</span>
                </a>
                <a href="notvoted">
                    <img src="{{asset('assets/images/icon-results.png')}}">
                    <span>لم يتم التصويت</span>
                </a>
               
                <a href="voted" class="active">
                    <img src="{{asset('assets/images/icon-levels.png')}}">
                    <span>تم التصويت</span>
                </a>
                

                <div class="mob mt-4">
                    <a href="logout"><img src="{{asset('assets/images/logout_mob.png')}}"></a>
                </div>
            </div>
            <div class="levels_body" style="padding-left:2%;padding-right:2%;">
                  <div id="grid" class="k-rtl"></div> 
                    <script>
             $(function()
                {
                 
                   $("#grid").kendoGrid({
                                       
                           edit: function(e) {
                           e.container.find("label[for=id]").parent("div .k-edit-label").hide();
                           e.container.find("label[for=id]").parent().next("div .k-eadit-field").hide();
        
                              },
                       dataSource: 
                       {
                       
                           transport:
                           {
                               
                               read: 
                               {
                                  dataType: "json",
                                  url: "readadmin12" 
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
                       { field: "name" ,title:"اسم المتقدم"},
                       { field: "path",filterable:false,title:"الفيديو",template: "<a name='${path}' onclick='showMe(this)'><i  class='fa fa-play-circle-o playbtn' aria-hidden='true'></i></>"},
                        {field: "result1" , title:"نتيجة المرحلة الأولى " } ,
                       {field: "result2" , title: "نتيجة المرحلة الثانية"}

                       ],
                      editable:
                       {  mode: "popup",
                       confirmation: true,
                        confirmDelete: "Yes"
                        } ,
                       
                       // dataBound: ColorMeBad,                
                pageable: {
                      pageSize: 15,
                      messages: {
                     display: "مشاهدة {0}-{1} من {2} عنصر" ,
                     empty: "لا يوجد عناصر"
                     }
                         },
               sortable: true,
               filterable: true,
               navigable: true,
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
            </div>
        </div>
    </div>


@include('Layout.includefooteradmin')
</body>
</html>