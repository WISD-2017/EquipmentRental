
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>勤益科技大學-體育器材租借  @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">



</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <img src="http://www.shejiye.com/uploadfile/icon/2017/0203/shejiyeicontfsx34hwwkc.png" width="60px" height="60px">
        &nbsp&nbsp&nbsp
        <a href="{{url('/')}}" style="font-weight:bold; font-family: 微軟正黑體; font-size:22px; color: #FFFFFF; text-decoration:none;">勤益科技大學-體育器材租借</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">

                @guest
                    <a class="nav-link" style="font-size: 14px; font-family: 王漢宗細黑體繁;" href="{{ route('login') }}">登入</a>
                @else
                    <a class="nav-link" style="font-size: 14px; font-family: 王漢宗細黑體繁;" href="{{ route('apply.showapply') }}">租借情形</a>
                    <li class="dropdown">

                        <a href="#" class="nav-link" style="font-size: 14px; font-family: 王漢宗細黑體繁;" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                          歡迎!   {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a href="{{url('') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    登出
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    @yield('content')
</div>
<!-- /.container -->

<!-- Footer -->
<!--<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
<!--</footer>-->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
