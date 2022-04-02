<?php
    session_start();

    if(isset($_POST['simpan'])){
        $tanggal = $_POST['tanggal'];
        $jam = $_POST['jam'];
        $lokasi = $_POST['lokasi'];
        $suhu = $_POST['suhu'];
        $nama = $_SESSION['username'];
        $text = $tanggal . "," . $jam . "," . $lokasi . "," . $suhu . "</tr> \n";
        $data = "catatan/$nama.txt";
        $dirname = dirname($data);
        if(!is_dir($dirname)){
            mkdir($dirname, 0755, true);
        }
        $fp = fopen($data, 'a+');
        if(fwrite($fp,$text)){
            echo '<script>alert("Catatan berhasil disimpan!");</script>';
        }
    }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="gambar/pesawat.png">
    <!-- Custom CSS -->
    <link href="assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .menu-link:hover {
            color: #ffce55;
        }

        .judul-halaman {
            color: #ffce55;
            padding-bottom: 20px;
            font-weight: 400;
            line-height: 30px
        }

        .dark-logo {
            width: 182px;
            height: 52px;
            margin-left: 8px;
            margin-top: 8px;
        }

        #kampret1 #kampret2 #sidebarnav :hover span,
        #kampret1 #kampret2 #sidebarnav :hover i {
            color: #ffce55 !important;
        }

        #kampret1 #kampret2 #sidebarnav li:hover a {
            border-left: 3px solid #ffce55 !important;
        }

        #navbarSupportedContent {
            background: linear-gradient(to right, #ffce55 0%, #ffe880 100%) !important;
        }

        .page-breadcrumb .breadcrumb .breadcrumb-item a {
            color: #ffce55 !important;
        }

        #namauser {
            margin-left: 805px;
        }

        #navbarDropdown {
            color: black;
        }

        h2 {
            margin-left: 25px;
            margin-top: 10px;
            color: #ffce55;
        }

        .ngisi {
            margin-left: 80px;
        }

        .btn1 {
            margin-top: 10px;
            border: none;
            outline: none;
            height: 50px;
            width: 40%;
            background-color: #ffce55;
            color: black;
            border-radius: 4px;
        }

        .btn1:hover {
            background: white;
            border: 1px solid;
            color: #ffce55;
        }

        table {
            width: 94%;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="gambar/tulisanpesawat.png" alt="homepage" class="dark-logo" />

                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav" id="namauser">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username'] ?>
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div id="kampret1" class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav id="kampret2" class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="home.php" aria-expanded="false"><i class="me-3 fas fa-home" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="isidata.php" aria-expanded="false">
                                <i class="me-3 fa fa-edit" aria-hidden="true"></i><span class="hide-menu">Isi Data</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="catatan.php" aria-expanded="false"><i class="me-3 fas fa-book" aria-hidden="true"></i><span class="hide-menu">Catatan</span></a></li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="logout.php" class="btn btn-warning text-white mt-4"><i class="me-3 fas fa-arrow-circle-left" aria-hidden="true"></i>Logout</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="judul-halaman mb-0 p-0 kuning">Isi Data</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item bretkum"><a href="home.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Isi Data</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <tr>
                                    <td>
                                        <div class="text">
                                            <img src="gambar/letter.png" alt="" width="50" style="margin-left: 25px;">
                                            <h2 style="display: inline;">Silahkan Isi Data</h2>
                                        </div>
                                    </td>
                                </tr>
                            </div>
                            <div class="card-body">
                                <table align="center" height="300px" width="50%" class="keseluruhan">
                                    <td>
                                        <form action="" method="POST">
                                            <table align="center" class="ngisi">
                                                <tr>
                                                    <td>Tanggal</td>
                                                    <td><input class="form-control m-3" type="date" name="tanggal"></td>
                                                </tr>
                                                <tr>
                                                    <td>Jam</td>
                                                    <td><input class="form-control m-3" type="time" name="jam"></td>
                                                </tr>
                                                <tr>
                                                    <td>Lokasi</td>
                                                    <td><input class="form-control m-3" type="text" name="lokasi"></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Customer</td>
                                                    <td><input class="form-control m-3" type="text" name="suhu"></td>
                                                </tr>

                                                <tr>
                                                    <td></td>
                                                    <td align="right"><input type="submit" name="simpan" value="Simpan" class="btn1"></td>
                                                </tr>
                                            </table>

                                        </form>
                                    </td>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a> & Akbar Maulana Febriansyah
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/app-style-switcher.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="js/custom.js"></script>
        <!--This page JavaScript -->
        <!--flot chart-->
        <script src="assets/plugins/flot/jquery.flot.js"></script>
        <script src="assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>