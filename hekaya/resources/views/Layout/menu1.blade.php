@if (isset(Auth::user()->name ))
         <div class="levelsMenu">
                <div class="mob mb-4">
                    <div class="username">Hello ({{Auth::user()->name}})</div>
                    <a href="/riyal/updateinfo"><img src="{{asset('assets/images/settings_mob.png')}}"></a>
                </div>
                <a href="/{{config('app.name')}}/story">
                    <img src="{{asset('assets/images/icon-home.png')}}">
                    <span>Story</span>
                </a>
                <a href="/{{config('app.name')}}/winner" class="active">
                    <img src="{{asset('assets/images/icon-results.png')}}">
                    <span>Winner</span>
                </a>
                <a href="/{{config('app.name')}}/active_level">
                    <img src="{{asset('assets/images/icon-results.png')}}">
                    <span>Active Level</span>
                </a>
                <div class="mob mt-4">
                    <a href="/{{config('app.name')}}/logout"><img src="{{asset('assets/images/logout_mob.png')}}"></a>
                </div>
            </div>
        @else
           <script>
                window.location = "login";
            </script>
            @endif