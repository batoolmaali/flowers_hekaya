@include('Layout.head')
 
<body class="formsBody" style="height:auto !important;">
    <img src="{{asset('assets/images/forms_apple_white.png')}}" class="onlyMob abs_bg_mob1">
    <img src="{{asset('assets/images/stages_apple.png')}}" class="onlyMob abs_bg_mob2">
    <div class="box blue1 w50 text-center">
        <div class="box-logo">
            <a href=".">
                <img src="{{asset('assets/images/logo.png')}}">
            </a>
        </div>
        <div class="box-border font26">
            <h3>Login</h3>
            @if(isset(Auth::user()->email))
            <script>
                window.location = "/{{config('app.name')}}/home";
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

            <form class="mt-4" method="POST" action="{{ url('checklogin') }}" onsubmit="return validate(this)">
                {{ csrf_field() }}
                <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-3 text-right hidden-xs">User name: <span class="req">*</span></div>
                    <div class="col-sm-12 col-md-8">
                        <input type="email" placeholder="user name" class="font-arial" name="email" value="{{ old('email') }}" autofocus>
                    </div>
                </div>
                <div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-3 text-right hidden-xs">Password: <span class="req">*</span></div>
                    <div class="col-sm-12 col-md-8">
                        <div class="relative">
                            <input type="password" name="password" class="font-arial" placeholder="password">
                            
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" class="roundBtn">
                     Login
                    </button>

                </div>
            </form>
        </div>
    </div>
</body>

</html>