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
@yield('formlogin')
@yield('formregister')
@include('Navbar')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h2 id="to-center" class="my-4">@yield('titr')
                <small></small>
            </h2>

        </div>



    </div>
</div>




<!-- Side Widget -->



<!-- /.container -->

@include('Footer')

<!-- Bootstrap core JavaScript -->
<script src="/css/vendor/jquery/jquery.min.js"></script>
<script src="/css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
