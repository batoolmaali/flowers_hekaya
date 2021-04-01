@include('Layout.head')

<body class="formsBody">
    <img src="{{asset('assets/images/forms_apple_white.png')}}" class="onlyMob abs_bg_mob1">
    <img src="{{asset('assets/images/stages_apple.png')}}" class="onlyMob abs_bg_mob2">

    <div class="box blue1 w50 text-center">
        <div class="box-logo">
            <a href="#">
                <img src="{{asset('assets/images/logo.png')}}">
            </a>
        </div>
        <div class="box-border font26">
            <h3>تسجيل الدخول</h3>
            @if(isset(Auth::user()->email))
              @if(Auth::user()->role=1)
               <script>
                window.location = "admindashboard1";
               </script>
               @endif
                @if(Auth::user()->role=2)
               <script>
                window.location = "admindashboard2";
               </script>
               @endif
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert" style="float:left;">×</button>
                <strong>{{ $message }}</strong>
                @if ($message=='الرجاء تفعيل الحساب')
                <a href="/riyal/sendcode" class="roundBtn">
                    تفعيل الحساب </a>
                @endif
            </div>
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

            <form class="mt-4" method="POST" action="checkloginadmin" onsubmit="return validate(this)">
                {{ csrf_field() }}
                <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-3 text-right hidden-xs">البريد الالكتروني: <span class="req">*</span></div>
                    <div class="col-sm-12 col-md-8">
                        <input type="email" placeholder="البريد الالكتروني" class="font-arial" name="email" value="{{ old('email') }}" autofocus>
                    </div>
                </div>
                <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-3 text-right hidden-xs">كلمة المرور: <span class="req">*</span></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="relative">
                            <input type="password" name="password" class="font-arial" placeholder="كلمة المرور">
                            <img src="{{asset('assets/images/eye.png')}}" class="revealer">
                        </div>
                    </div>
                </div>


                <div>
                    <button type="submit" class="roundBtn">
                        تسجيل الدخول
                    </button>

                </div>
            </form>
        
            <img src="../riyal/assets/images/charstages.png" class="onlyMob char_reset">
        </div>
    </div>

    @include('Layout.includefooter')
</body>

</html>