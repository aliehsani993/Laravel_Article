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


<div class="card mt-4">
    <h5 class="card-header bg-success">جستجو</h5>
    <div class="card-body">

        <form class="m-0" action="{{route('search.post')}}" method="post">
        {!! csrf_field() !!}
        <!-- Search Widget -->



                    <div class="input-group">

                        <input name="keyword" type="text" class="form-control" placeholder="جستجو کن">
                        <span class="input-group-btn">
                        </span>
                    </div>

            <button class="btn btn-secondary" type="submit">! برو </button>
        </form>


</div>
</div>


<!-- Categories Widget -->
<div id="to-center" class="card my-4">

</div>

<div class="card bg-primary" >

        <h5 class="card-header">دسته بندی | (      <a class="green" href="{{route('category.form.get')}}">اضافه کردن تگ</a>)   </h5>


    <ul class="list-group">
        @foreach($category as $categor)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{route('article.filtercategory.get',['id'=>$categor->name])}}" class="badge badge-primary badge-pill">5</a>
            <a href="{{route('article.filtercategory.get',['id'=>$categor->name])}}" class=" ">{{$categor->name}}</a>

        </li>
        @endforeach
    </ul>
</div>


    <div class="card bg-warning mt-3" >

        <h5 class="card-header">نویسندگان</h5>


        <ul class="list-group">
            @foreach($writers as $writer)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('article.filtercategory.get',['id'=>$categor->name])}}" class="badge badge-warning badge-pill">5</a>
                    <a href="{{route('article.filterwriter.get',["id"=>$writer->id])}}" class="badge badge-warning badge-pill">{{$writer->name}}</a>


                </li>
            @endforeach
        </ul>
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
