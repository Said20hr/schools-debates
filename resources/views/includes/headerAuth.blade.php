<header class="">
    <nav class="navbar navbar-expand-lg  bg-secondary " dir="rtl">
        <div class="container col-md-8">
            <a class="navbar-brand" href="">
                <img class="logo" src="{{ URL::asset('images/debate-logo2.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto " id="navbarResponsive">
                <ul class="navbar-nav  mr-auto">

                    @if((request()->is('login')))
                    <li class="nav-item  text-right">
                        <a class="btn2 btn-outline-primary text-center p-tb-10 lh-40 p-lr-35" href="{{route('register')}}"  >
                            تسجيّل
                        </a>
                    </li>
                    @endif
                        @if((request()->is('register')))
                    <li class="nav-item text-right">
                        <a class="btn2 btn-outline-primary text-center p-tb-10 lh-40 p-lr-35" href="{{route('login')}}"  >
                            دخول
                        </a>
                    </li>
                        @endif

                </ul>
            </div>
        </div>
    </nav>
</header>
