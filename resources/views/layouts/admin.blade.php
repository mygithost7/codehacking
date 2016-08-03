<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>

    <link href="/css/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.ncsu.edu/brand-assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="admin-page">

<div id="wrapper container-fluid">
    <div class="row">

        <!-- Navigation -->
        {{--<nav class="navbar navbar-default navbar-static-top" role="navigation" style="">--}}
        <div class="col-sm-12" style="background-color:lavender;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Home</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user da-fw"></i> <i class="fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                        <li class="divder"></li>
                        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3" style="background-color:lavender;">

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="/admin"><i class="fa fa-dashboard fa-fw"> Dashboard</i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/users">All Users</a></li>
                                <li><a href="/users/create">Create User</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Posts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/users">All Posts</a></li>
                                <li><a href="/users/create">Create Post</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Categories<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/users">All Categories</a></li>
                                <li><a href="/users/create">Create Category</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Media<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="/users">All Media</a></li>
                                <li><a href="/users/create">Upload Media</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Charts <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="float.html">Float Chats</a>
                                </li>
                                <li>
                                    <a href="marris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw">Tables</i></a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-table fa-fw">Forms</i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>UI Elements <span class="fa arrow"></span></a>
                            <ul class="nav na-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav na-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>

                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a class="active" href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                        </li>


                    </ul>

                </div>
            </div>

            {{--</nav>--}}

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/profile"><i class="fa fa-dashboard fa-fw"></i>Profile</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Posts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="">All Posts</a>
                                </li>
                                <li>
                                    <a href="">Create Post</a>
                                </li>


                            </ul>
                        </li>

                    </ul>

                </div>


            </div>
        </div>
    <!-- Page Content -->
        <div class="col-sm-9" style="background-color:#cce6ff;">
            <h1 class="page-header"></h1>
            @yield('content')
        </div>
    </div>

</div>
<!-- /page-wrapper -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdn.ncsu.edu/brand-assets/bootstrap/js/bootstrap.min.js"></script>

@yield('footer')


</body>
</html>