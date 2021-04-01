@include('Layout.head')

<body class="formsBody">
    <div>
        <div class="abs_bg3 desk"></div>
        <div class="abs_bg2 desk"></div>
        <img src="{{asset('assets/images/forms_apple_white.png')}}" class="onlyMob abs_bg_mob1">
        <img src="{{asset('assets/images/stages_apple.png')}}" class="onlyMob abs_bg_mob2">

        <div class="box blue1 w50 text-center">
            <div class="box-logo">
                <a href=".">
                    <img src="{{ asset('assets\images\logo.png')}}">
                </a>
            </div>
            <div class="box-border font26">
                <h3>حساب جديد</h3>
                @if(isset(Auth::user()->email))
                <script>
                    window.location = "/home";
                </script>
                @endif

                @if (count($errors) > 0)
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert" style="float:left;">×</button>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="mt-4" method="POST" action="register1" onsubmit="return validate(this)">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-3 text-right hidden-xs">الاسم الكامل: <span class="req">*</span></div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" id="name" type="text" placeholder="الاسم الكامل" class="form-control" name="name" value="{{ old('name') }}" autofocus>
                        </div>
                    </div>
                 
                    <div class="row">
                        <div class="col-3 text-right hidden-xs">اسم المدرسة: <span class="req">*</span></div>
                        <div class="col-sm-12 col-md-8">

                            <input type="text" id="school_name" type="text" placeholder="اسم المدرسة" class="form-control font-arial" name="school_name" value="{{ old('school_name') }}" autofocus>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 text-right hidden-xs">منطقه التعليم: <span class="req">*</span></div>
                        <div class="col-sm-12 col-md-8">

                            <input type="text" id="education_area" type="text" placeholder="منطقه التعليم" class="form-control font-arial" name="education_area" value="{{ old('education_area') }}" autofocus>
                        </div>
                    </div>
                 

                    <div class="row">
                        <div class="col-3 text-right hidden-xs">كلمة المرور: <span class="req">*</span></div>
                        <div class="col-sm-12 col-md-8">

                            <div class="relative">
                                <input type="password" id="password" placeholder="كلمة المرور" class="form-control font-arial" name="password" value="{{ old('password') }}" autofocus>
                                <img src="{{asset('assets/images/eye.png')}}" class="revealer">
                            </div>

                        </div>
                    </div>


                  
                   

                    <div>

                        <button type="submit" class="roundBtn">
                           تحديث المعلومات 
                        </button>

                    </div>

                </form>
            </div>
        </div>
    </div>

    @include('Layout.includefooter')
</body>

</html>