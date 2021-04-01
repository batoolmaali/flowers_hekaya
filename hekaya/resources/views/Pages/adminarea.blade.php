@include('Layout.headadmin')
     @if(!isset(Auth::user()->email))
            <script>
                window.location = "login";
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
        <div class="levels_page">
        @include('Layout.menu')
            <div class="levels_body" style="padding-left:2%;padding-right:2%;">
                  <section class="stages" id="stages">
                      <div class="row">
                  <div class="boxes1">
            	<a href="system_user" >
                    <div class="box1 purble">
                        <div class="box-border">
                            <div class="box-right"></div>
                            <div class="box-left"> مستخدمي النظام</div>
                        </div>
					
					
                    </div>
					</a>
				</div>
				   <div class="boxes2">
            	<a href="labrotary">
                    <div class="box1 purble">
                        <div class="box-border">
                            <div class="box-right"></div>
                            <div class="box-left">المختبرات</div>
                        </div>
					
					
                    </div>
					</a>
				</div>
				 <div class="boxes2">
            	<a href="spending">
                    <div class="box1 purble">
                        <div class="box-border">
                            <div class="box-right"></div>
                            <div class="box-left">المصاريف</div>
                        </div>
					
					
                    </div>
					</a>
				</div>
				 <div class="boxes1">
            	<a href="reports">
                    <div class="box1 purble">
                        <div class="box-border">
                            <div class="box-right"></div>
                            <div class="box-left">التقارير</div>
                        </div>
					
					
                    </div>
					</a>
				</div>
				</div>
                    </section>                        <!-- body  end -->
            </div>
        </div>
    </div>


@include('Layout.includefooteradmin')
</body>
</html>