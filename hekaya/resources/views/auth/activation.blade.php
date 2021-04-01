@include('Layout.head')

<body class="formsBody">
    <div class="abs_bg1"></div>
    <div class="abs_bg2"></div>

    <div class="box blue1 w50 text-center">
        <div class="box-logo">
            <a href=".">
                <img src="{{asset('assets/images/logo.png')}}">
            </a>
        </div>
        <div class="box-border font26">
            <br><br>
            <h3>الرجاء ادخال رمز التحقق الذي تم ارساله بالبريد الالكتروني</h3>
                @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert" style="float:right;">×</button>
                <strong>{{ $message }}</strong>
               
            </div>
            @endif
            <form class="mt-4" method="POST" action="/riyal/active1" onsubmit="return validate(this)">
                {{ csrf_field() }}

                <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-3 text-right hidden-xs">رمز التحقق:  <span class="req">*</span></div>
                    <div class="col-sm-12 col-md-8">
                        <input type="text" placeholder="رمز التحقق" class="font-arial" name="email" value="{{ old('email') }}">
                    </div>
                </div>
                <br><br>
                <div>
                    <button type="submit" class="roundBtn">
                        إرسـال
                    </button>

                </div>
            </form>

        </div>
    </div>
    @include('Layout.includefooter')
</body>

</html>