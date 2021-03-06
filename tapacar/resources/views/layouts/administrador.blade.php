<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    
    <script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="../assets/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="../assets/source/jquery.fancybox.css?v=2.1.5" media="screen" />




   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();

        $('.btn-delete').click(function() {
         var id = $(this).data('id');
         var form = $('#form-delete');
         var action = form.attr('action').replace('USER_ID', id);
         var row =  $(this).parents('tr');
         
         row.fadeOut(1000);
                  $.post(action, form.serialize(), function(result) {
            if (result.success) {
               setTimeout (function () {
                  row.delay(1000).remove();
                  alert(result.msg);
               }, 1000);                
            } else {
               row.show();
            }
         }, 'json');
      });

    });
      
   

    </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Aministrador</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      <!--  <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li> -->
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-user"></i> Administrador de Slider</a>
                       
                        <li>
                            <a href="tables.html"><i class="fa fa-tags"></i> Administrador de Articulos</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Reportes</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-list-alt"></i> Catalogos de Imagenes</a>
                        </li>
                       
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
</body>

</html>
