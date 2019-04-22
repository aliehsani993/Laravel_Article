<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>the first project ME :)</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog-home.css" rel="stylesheet">

</head>

<body>
@if(session('message'))
<div class="alert alert-success text-center">
    <strong> {{session('message')}}</strong>
</div>
@endif


@include('Navbar')


<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h2 id="to-center" class="my-4">@yield('title')
                <small></small>
            </h2>
        @yield('formAddTag')
        @yield('formregister')
        @yield('postwriter')
        @yield('formlogin')
        @yield('Home')
        @yield('Formview')
        @yield('Article')
        @yield('FormEdite')

<!-- Pagination -->
        @yield('pagination')

</div>

<!-- Sidebar Widgets Column -->
<div id="to-center" class="col-md-4">
<form action="{{route('search.post')}}" method="post">
    {!! csrf_field() !!}
<!-- Search Widget -->
<div class="card my-4">
<h5 class="card-header">جستجو</h5>
<div class="card-body">
<div class="input-group">

<input name="keyword" type="text" class="form-control" placeholder="جستجو کن">
<span class="input-group-btn">
<button class="btn btn-secondary" type="submit">! برو </button>
</form>
</span>


</div>
</div>
</div>

<!-- Categories Widget -->
<div id="to-center" class="card my-4">
<h5 class="card-header">دسته بندی | (      <a class="green" href="{{route('category.form.get')}}">اضافه کردن تگ</a>)   </h5>
<div class="card-body">
<div class="row">
<div class="col-lg-6">

   <ul class="list-unstyled mb-0">
       @foreach($category as $categor)
       <li >
           <a href="{{route('article.filtercategory.get',['id'=>$categor->name])}}">{{$categor->name}}</a>
       </li>
       @endforeach


   </ul>

</div>

<div class="col-lg-6">
   <ul class="list-unstyled mb-0">

   </ul>
</div>
</div>
</div>
</div>



    <div id="to-center" class="card my-4">
        <h5 class="card-header">نویسندگان</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 ">
                    <ul class="list-unstyled mb-0 text-center">
                        @foreach($writers as $writer)
                            <li class="text-center">
                                <a href="{{route('article.filterwriter.get',["id"=>$writer->id])}}">{{$writer->name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="to-center" class="card my-4">
        <h5 class="card-header">  آرشیو</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">Web Design</a>
                        </li>
                        <li>
                            <a href="#">HTML</a>
                        </li>
                        <li>
                            <a href="#">Freebies</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">JavaScript</a>
                        </li>
                        <li>
                            <a href="#">CSS</a>
                        </li>
                        <li>
                            <a href="#">Tutorials</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <!-- Side Widget -->
<div id="to-center" class="card my-4">
<h5 class="card-header">سایدبار</h5>
<div class="card-body">
You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
</div>
</div>

</div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

@include('Footer')

<!-- Bootstrap core JavaScript -->
<script src="/css/vendor/jquery/jquery.min.js"></script>
<script src="/css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
