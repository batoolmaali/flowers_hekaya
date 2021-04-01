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
                        <div class="col-3 text-right hidden-xs">رقم الهوية الوطنية: <span class="req">*</span></div>
                        <div class="col-sm-12 col-md-8">
                            <input type="text" maxlength="10" id="id_card" type="text" placeholder="رقم الهوية الوطنية" class="form-control font-arial" name="id_card" value="{{ old('id_card') }}" autofocus>
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
                        <div class="col-3 text-right hidden-xs">رقم الجوال: <span class="req">*</span></div>
                        <div class="col-sm-12 col-md-8">
                            <div class="relative">

                                <div class="relative">
                                    <input type="text" id="mob_num phone" maxlength="9" type="text" placeholder="رقم الجوال" class="form-control font-arial" name="phone" value="{{ old('phone') }}" autofocus>

                                    <div class="phoneCode">
                                        <div class="flag1">
                                            <img src="{{ asset('assets\images\flag.png')}}">
                                        </div>
                                        <div class="code1 font-arial">+966</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-3 text-right hidden-xs">البريد الإلكتروني: <span class="req">*</span></div>
                        <div class="col-sm-12 col-md-8">

                            <input type="email" id="email" placeholder="البريد الإلكتروني" class="form-control font-arial" name="email" value="{{ old('email') }}" autofocus>

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
                        <div class="row ">
                            <div class="col-3 text-right hidden-xs"></div>
                            <div class="col-sm-12 col-md-8 text-left">
                                <label for="a">
                                    <input type="checkbox" name="terms" id="a" class="radio" style="display: inherit;">
								</label>
                                    بالضغط على الزر أنت موافق على
                                    <a class="trigger_popup_fricc" style="border-bottom:solid 1px #fff">الشروط والاحكام</a>
                                    للمسابقة
                                    <span class="req">*</span>
								
								<div class="hover_bkgr_fricc">
									<span class="helper"></span>
									<div>
										<div class="popupCloseButton">X</div>
										<p style="font-size: 14px !important;">
                        الشروط الواردة أدناه تتضمن شروط وأحكام مسابقة ريالي وتشكل جزءاً لا يتجزأ منها. وعليه، فإن الاشتراك فيها يعني الموافقة والالتزام التام بهذه الشروط والأحكام وبما يترتب عليها : <br>
                        تحتفظ الوزارة بحق إلغاء أو تمديد أو تعديل مجريات المسابقة أو شروطها أو أحكامها بموافقة سدكو والقائمين عليها من دون إشعار مسبق ولا يحق للمشارك الاعتراض. <br>
                        أي تغييرات تجري على المسابقة سوف يتم نشرها على الموقع الرسمي للمسابقة. <br>
                        كل المشاركات التي تُقدم تخضع للمراجعة والتدقيق وذلك للتأكد من مدى أهليتها وتوافقها مع المعايير والتوجه العام والشروط والأحكام. <br>
                        في حال طرأت الحاجة، يحق للإدارة المطالبة بالمزيد من المعلومات أو الوثائق لدعم المشاركة أو التحقق من المصداقية. <br>
                        على جميع المشاركين الالتزام بمواعيد بدء وانتهاء المدة المحددة لتقديم المشاركات. <br>
                        يُقرّ المشارك/ة أنّه قد اطّلع ووافق على شروط وأحكام المسابقة قبل المشاركة، ويعد التقديم على المسابقة إقرارًا بقبول الشروط والأحكام. <br>
                        أي مشاركة يثبت انتهاكها لحقوق الملكية الفكرية أو حقوق النشر سواء بالسرقة أو التقليد فسيتم استبعادها سواء قبل عملية التصفيات أو بعدها، وسوف يعرض صاحب المشاركة نفسه للمساءلة القانونية. <br>
                        يحق لإدارة المسابقة نشر ما يرونه مناسباً من المعلومات المدخلة في نموذج التسليم عن المشاركين خلال أي مرحلة من المسابقة لأهداف ترويجية.
                        إدارة المسابقة تلتزم بعدم إفشاء أي معلومات شخصية تخص المشاركين لأي طرف ثالث، ويستثنى من ذلك المطالبات القانونية من الجهات الحكومية المختصة. <br>
                        يحقّ لإدارة المسابقة عدم منح الجائزة للفائز الأساسي واختيار فائز بديل عنه إذا ما تبيّن، لأسباب معتبرة تمتلكها إدارة المسابقة، عدم أهليّة المتسابق وفقاً للشروط والأحكام أو التوجه العام للمسابقة. <br>
                        في حالة إقصاء مشارك/ة من المسابقة، يحق لإدارة المسابقة اختيار مشارك بديل. وفي هذه الحالة، يتم اختيار مشارك من قبل لجنة التحكيم وفق المعايير ذاتها التي تمّ على أساسها اختيار المشارك الأساسي. <br> <br>
                        <strong>شروط المتسابقين : </strong><br>
                        أن يكون المشترك/ة في المرحلة الإبتدائية (الصفوف العليا) <br>
                        يلتزم المشارك بالمصداقية التامة في جميع مراحل المسابقة. <br>
                        لا يحق المشاركة بنفس العمل أو نسخه أو تكراره أو اقتباسه من مشارك لمشارك آخر، وفي حال حدوث ذلك يتم إلغاء المشاركة. <br>
                        يتعهد المشارك بأن تكون جميع المعلومات المقدمة من طرفه صحيحة وكاملة ومُحدَّثة. <br>
                        يمكن لكل مشارك الانسحاب من المسابقة في أي مرحلة قبل تاريخ ١ ديسمبر ٢٠١٩ بشرط إرسال إيميل لطلب الاستبعاد من المراحل المتبقّية. <br>
</p>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>

                        </div>
                    </div>

                    <div>

                        <button type="submit" class="roundBtn">
                            سجــل
                        </button>

                    </div>

                </form>
                <div class="big">
                    لديك حساب؟
                </div>
                <div>
                    <a href="login" class="small">تسجيل دخول</a>
                </div>
            </div>
        </div>
    </div>

    @include('Layout.includefooter')
</body>

</html>