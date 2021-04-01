@include('Layout.head')
<style>
    .headerSpacer
    {
        display:none;
    }
</style>
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
        @include('Layout.menu1')
            <div class="levels_body" style="padding-left:2%;padding-right:2%;">
             <div class="box blue1 w50 text-center">
             
        <div class="box-border font26">
            <form class="mt-4" method="POST" action="{{ url('getwinner') }}" onsubmit="return validate(this)">
                {{ csrf_field() }}
                

                <div>
                    <button type="submit" class="roundBtn">
                    Get Winner
                    </button>

                </div>
            </form>
               @isset($winner)
                 <table style="width: 100%;
    direction: ltr;">
                     <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Score</th>
  </tr>
        <tr>
    <th>{{$winner[0]->player_id}}</th>
    <th>{{$winner[0]->player_data}}</th>
    <th>{{$winner[0]->score}}</th>
  </tr>
                 </table>
                @endisset
            </div>
                        
            </div>
                </div>
        </div>
    </div>


@include('Layout.includefooteradmin')
    @endif
</body>
</html>