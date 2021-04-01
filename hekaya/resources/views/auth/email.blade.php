@include('Layout.head')

<body class="formsBody">
    <div class="abs_bg1 desk"></div>
    <div class="abs_bg2 desk"></div>
    <img src="{{asset('assets/images/forms_apple_white.png')}}" class="onlyMob abs_bg_mob1">
    <img src="{{asset('assets/images/stages_apple.png')}}" class="onlyMob abs_bg_mob2">
    

    <div class="box blue1 w50 text-center">
        <div class="box-logo">
            <a href=".">
                <img src="{{asset('assets/images/logo.png')}}">
            </a>
        </div>
        <div class="box-border font26">
            <br><br>
            <h3>اعادة تعيين كلمة المرور</h3>

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert" style="float:left;">×</button>
                <strong>{{ $message }}</strong>

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
            <form class="mt-4" method="POST" action="/riyal/sendemail" onsubmit="return validate(this)">
                {{ csrf_field() }}

                <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-3 text-right hidden-xs">البريد الالكتروني: <span class="req">*</span></div>
                    <div class="col-sm-12 col-md-8">
                        <input type="email" placeholder="البريد الالكتروني" class="font-arial" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <br><br>
                <div>
                    <button type="submit" class="roundBtn">
                        إرسـال
                    </button>

                </div>
            </form>
            <div class="mt-2">
                <a href="/riyal/login" class="big">تذكرت معلوماتك؟</a>
            </div>
            <div>
                <a href="/riyal/register" class="roundBtn2">سجـل</a>
            </div>
            <img src="../riyal/assets/images/charstages.png" class="onlyMob char_reset">
        </div>
    </div>
    @include('Layout.includefooter')
</body>

</html>