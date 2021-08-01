<header>
    <nav class="navbar navbar-expand-lg fixed-top bg-secondary">
        <div class="container">
            <a class="navbar-brand" href="">
                <img class="logo" src="{{ URL::asset('images/debate-logo2.png')}}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button"
                    data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navs-top">
                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }} p-t-5">
                        <a class="nav-link" href="{{route('home')}}">الرئيسية</a>
                    </li>
                    <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }} p-t-5">
                        <a class="nav-link" href="{{route('about.index')}}">من نحن ؟</a>
                    </li>
                    <li class="nav-item {{ (request()->is('member')) ? 'active' : '' }} p-t-5">
                        <a class="nav-link" href="{{route('member.index')}}">اعضاء النادي</a>
                    </li>
                    <li class="nav-item {{ (request()->is('event')) ? 'active' : '' }} p-t-5">
                        <a class="nav-link" href="{{route('event.index')}}">الفعاليات</a>
                    </li>
                    <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }} p-t-5">
                        <a class="nav-link" href="{{route('contact.index')}}">اتصل بنا</a>
                    </li>
                    <li class="nav-item {{ (request()->is('blog')) ? 'active' : '' }} p-t-5">
                        <a class="nav-link" href="{{route('blog.index')}}">آخر الأخبار</a>
                    </li>
                    @guest
                        <li class="nav-item text-right d-flex my-lg-0 my-3">
                            <a class="btn btn-outline-primary text-center p-tb-7  p-lr-35 ml-4" href="{{route('login')}}"  >
                                دخول
                            </a>
                            <a class="btn btn-primary text-center p-tb-7  p-lr-35 ml-4" href="{{route('register')}}"  >
                                تسجيّل
                            </a>
                        </li>
                    @else
                        <li class="nav-item p-tb-5 text-right">
                            <a href="{{route('user.index')}}" class="btn btn-outline-primary text-center p-tb-7 p-lr-25" >
                                عضويتي
                            </a>
                        </li>
                        <li class="nav-item p-tb-5 text-right">

                            <form action="{{ url('/logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary text-center p-tb-7 p-lr-25 fs-18">
                                    تسجيل الخروج
                                </button>
                            </form>
                        </li>

                    @endguest


                </ul>
            </div>
        </div>
    </nav>
</header>
