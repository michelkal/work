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
    <link rel="stylesheet" href="css/datatables/dataTables.bs.min.css">
    <link rel="stylesheet" href="css/datatables/autoFill.bs.min.css">
    <link rel="stylesheet" href="css/datatables/fixedHeader.bs.css">
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="basicExample" class="table table-striped table-condensed table-bordered no-margin">
                                    <thead style="background: #333f88; color: #fff;">
                                        <tr>
                                            <th>Reference</th>
                                            <th>Currency</th>
                                            <th>Date of Creation</th>
                                            <th>Release Date</th>
                                            <th>Capital</th>
                                            <th>Growth</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Reference</th>
                                            <th>Currency</th>
                                            <th>Date of Creation</th>
                                            <th>Release Date</th>
                                            <th>Capital</th>
                                            <th>Growth</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>7879H65KL</td>
                                            <td>Naira/BTC</td>
                                            <td>01/02/2017</td>
                                            <td>15/02/2017</td>
                                            <td>100,000.00</td>
                                            <td>10,000.00 (10%)</td>
                                            <td><span class="label label-warning">In progress</span></td>
                                        </tr>
                                        <tr>
                                            <td>7879H65KL</td>
                                            <td>Naira/BTC</td>
                                            <td>01/02/2017</td>
                                            <td>15/02/2017</td>
                                            <td>100,000.00</td>
                                            <td>150,000.00 (100%)</td>
                                            <td><span class="label label-success">Completed</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>Copyright Arise Admin <span>2016</span></footer>
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollup/jquery.scrollUp.js"></script>
    <script src="js/sparkline/sparkline.js"></script>
    <script src="js/sparkline/custom-sparkline.js"></script>
    <script src="js/databars/jquery.databar.js"></script>
    <script src="js/databars/custom-databars.js"></script>
    <script src="js/datatables/dataTables.min.js"></script>
    <script src="js/datatables/dataTables.bootstrap.min.js"></script>
    <script src="js/datatables/autoFill.min.js"></script>
    <script src="js/datatables/autoFill.bootstrap.min.js"></script>
    <script src="js/datatables/fixedHeader.min.js"></script>
    <script src="js/datatables/custom-datatables.js"></script>
    <script src="js/custom.js"></script>
    </body>
    </html>