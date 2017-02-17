<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Arise Admin Dashboard">
    <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Themeforest, Bootstrap, C3 Graphs, D3 Graphs, NVD3 Graphs, Admin Skin, Black Admin Dashboard, Grey Admin Dashboard, Dark Admin Dashboard, Simple Admin Dashboard, Simple Admin Theme, Simple Bootstrap Dashboard, Invoice, Tasks, Profile">
    <meta name="author" content="Ramji">
    <link rel="shortcut icon" href="img/fav.png">
    <title>Dashboard - Admin Dashboard - Arise Admin Panel, Arise Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
    <link href="fonts/icomoon/icomoon.css" rel="stylesheet">
    <link href="css/c3/c3.css" rel="stylesheet">
    <link href="css/nvd3/nv.d3.css" rel="stylesheet">
    <link href="css/horizontal-bar/chart.css" rel="stylesheet">
    <link href="css/heatmap/cal-heatmap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/circliful/circliful.css">
    <link href="css/users.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/odometer.css">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <header>
        <a href="index-2.html" class="logo"><img src="img/logo.png" alt="Arise Admin Dashboard Logo"></a>
        <ul id="header-actions" class="clearfix">
            <li class="list-box hidden-xs dropdown"><a id="drop2" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-warning2"></i> </a><span class="info-label blue-bg">5</span>
                <ul class="dropdown-menu imp-notify">
                    <li class="dropdown-header">You have 3 notifications</li>
                    <li>
                        <div class="icon"><img src="img/thumbs/user10.png" alt="Arise Admin"></div>
                        <div class="details"><strong class="text-danger">Rogie King</strong> <span>Firefox is a free, open-source web browser from Mozilla.</span></div>
                    </li>
                </ul>
            </li>

            <li class="list-box hidden-xs dropdown"><a id="drop3" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-archive2"></i> </a><span class="info-label red-bg">3</span>
                <ul class="dropdown-menu progress-info">
                    <li class="dropdown-header">You have 7 pending tasks</li>
                    <li>
                        <div class="progress-info"><strong class="text-warning">Urgent</strong> <span>Bug Fix #123</span> <span class="pull-right">60%</span></div>
                        <div class="progress progress-xs no-margin">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span></div>
                        </div>
                    </li>
                    <li class="dropdown-footer">See all the tasks</li>
                </ul>
            </li>

            <li class="list-box user-admin dropdown">
                <div class="admin-details">
                    <div class="name">Sean</div>
                    <div class="designation">System Admin</div>
                </div><a id="drop4" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-account_circle"></i></a>
                <ul class="dropdown-menu sm">
                    <li class="dropdown-content"><a href="profile.html">Edit Profile</a> <a href="forgot-pwd.html">Change Password</a> <a href="styled-inputs.html">Settings</a> <a href="login.html">Logout</a></li>
                </ul>
            </li>
        </ul>

    </header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><i class="icon-blur_on"></i>Dashboard</a></li>
                    <li class=""><a href="#"><i class="icon-blur_on"></i>My Account</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="dashboard-wrapper">
        <div class="container-fluid">
            <div class="top-bar clearfix">
                <div class="row gutter">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="page-title">
                            <h3>Platform Name</h3>
                            <p>Welcome <strong>Username</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="panel">
                        <div class="panel-header">
                            <div class="alert alert-success alert-transparent">
                                <i class="icon-user2"></i><strong>Create a free account to the community of helpers</strong>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="col-md-6">
                                        <div class="icheckbox_square-green"><input tabindex="9" type="checkbox" id="square-checkbox-1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="styled-input-wrapper">
                                            <div class="input-icon">
                                                <i class="icon-user3"></i>
                                            </div>
                                            <div class="styled-input">
                                                <div class="form-group">
                                                    <label for="userName">Enter Your Name</label>
                                                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    
                </div>
            </div>
        </div>
        <footer>Copyright Arise Admin <span>2016</span></footer>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/sparkline/retina.js"></script>
        <script src="js/sparkline/custom-sparkline.js"></script>
        <script src="js/scrollup/jquery.scrollUp.js"></script>
        <script src="js/d3/d3.v3.min.js"></script>
        <script src="js/d3/d3.powergauge.js"></script>
        <script src="js/d3/gauge.js"></script>
        <script src="js/d3/gauge-custom.js"></script>
        <script src="js/c3/c3.min.js"></script>
        <script src="js/c3/c3.custom.js"></script>
        <script src="js/nvd3/nv.d3.js"></script>
        <script src="js/nvd3/nv.d3.custom.boxPlotChart.js"></script>
        <script src="js/nvd3/nv.d3.custom.stackedAreaChart.js"></script>
        <script src="js/horizontal-bar/horizBarChart.min.js"></script>
        <script src="js/horizontal-bar/horizBarCustom.js"></script>
        <script src="js/gaugemeter/gaugeMeter-2.0.0.min.js"></script>
        <script src="js/gaugemeter/gaugemeter.custom.js"></script>
        <script src="js/heatmap/cal-heatmap.min.js"></script>
        <script src="js/heatmap/cal-heatmap.custom.js"></script>
        <script src="js/odometer/odometer.min.js"></script>
        <script src="js/odometer/custom-odometer.js"></script>
        <script src="js/circliful/circliful.min.js"></script>
        <script src="js/circliful/circliful.custom.js"></script>
        <script src="js/peity/peity.min.js"></script>
        <script src="js/peity/custom-peity.js"></script>
        <script src="js/custom.js"></script>
    </body>
    </html>