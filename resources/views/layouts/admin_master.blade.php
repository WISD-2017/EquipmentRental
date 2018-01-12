<html lang="en" class="gr__blackrockdigital_github_io"><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

</head>

<body data-gr-c-s-loaded="true">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container" style="margin-left: -5.5%;">
        <img src="http://www.shejiye.com/uploadfile/icon/2017/0203/shejiyeicontfsx34hwwkc.png" width="60px" height="60px">
        &nbsp&nbsp&nbsp
        <a href="{{url('/')}}" style="font-weight:bold; font-family: 微軟正黑體; font-size:22px; color: #FFFFFF; text-decoration:none; margin-left: -68%">勤益科技大學-體育器材租借</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>



<div id="wrapper" class="toggled">

    <!-- Sidebar -->
    <div id="sidebar-wrapper" style="margin-top: 15px">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                        <a href="#"></a>
                        </li>
            <li>
                <a href="{{url('/manage')}}" style="font-family: 微軟正黑體;font-size: 20px">器材管理</a>
            </li>
            <li>
                <a href="{{url('/check')}}" style="font-family: 微軟正黑體;font-size: 20px">申請審核</a>
            </li>
            <li>
                <a href="{{url('/record')}}" style="font-family: 微軟正黑體;font-size: 20px">租借記錄</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    @yield('content')
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>




</body></html>