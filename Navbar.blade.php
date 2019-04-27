<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">اولین پروژه من</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">

                    <a class="nav-link" href="#">
                        <span class="sr-only">(current)</span>


                    </a>
                </li>
                 @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/logout')}}">  خروج</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('myarticles.get')}}">  مقاله های من </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.form.get')}}"> مقاله+</a>
                </li>

                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register')}}"> ثبت نام</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/login')}}">ورود</a>
                    </li>

                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">دسته بندی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.all.get')}}">خانه</a>
                </li>
            </ul>
        </div>
    </div>
</nav>