<?php
setlocale(LC_ALL, 'id_ID');
$halaman = "Data Siswa";
?>                 
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Barokah Siswa - <?= $halaman ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('siswa')}}/img/favicon.png">
    <link rel="stylesheet" href="{{asset('siswa')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('siswa')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('siswa')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('siswa')}}/css/metisMenu.css">
    <link rel="stylesheet" href="{{asset('siswa')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('siswa')}}/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('siswa')}}/css/typography.css">
    <link rel="stylesheet" href="{{asset('siswa')}}/css/default-css.css">
    <link rel="stylesheet" href="{{asset('siswa')}}/css/styles.css">
    <link rel="stylesheet" href="{{asset('siswa')}}/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{asset('siswa')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('siswa')}}//images/icon/favicon.ico">
    <link rel="stylesheet" href="{{asset('siswa')}}//css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('siswa')}}//css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('siswa')}}//css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('siswa')}}//css/metisMenu.css">
    <link rel="stylesheet" href="{{asset('siswa')}}//css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('siswa')}}//css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('siswa')}}//css/typography.css">
    <link rel="stylesheet" href="{{asset('siswa')}}//css/default-css.css">
    <link rel="stylesheet" href="{{asset('siswa')}}//css/styles.css">
    <link rel="stylesheet" href="{{asset('siswa')}}//css/responsive.css">
    <link rel="stylesheet" type="text/css" href="{{asset('siswa')}}//css/styles.css">
    <link rel="stylesheet" type="text/css" href="{{asset('siswa')}}//fontawesome/css/all.min.css">
    <style>
        @font-face {
            font-family: speedbeast;
            src: url("{{asset('siswa')}}//fonts/SpeedBeast.ttf");
        }
          #font {
            font-family: speedbeast;
            font-size: 30px;
        }

          .dropdown {
            position: relative;
            display: inline-block;
        }

          .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 0.5rem;
            right: 0;
        }

          .dropdown-content a {
            text-decoration: none;
            display: block;
        }

          .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
          .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    <!-- modernizr css -->
    <script src="{{asset('siswa')}}//js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="/"><img src="{{asset('siswa')}}/images/icon/cash.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                        <li>
                            
                            <a href="/"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                            <li><a href="/tambah"><i class="ti-receipt"></i> <span>Tambah Data Siswa</span></a></li>
                            <li><a href="/list"><i class="ti-receipt"></i> <span>Data Siswa Terdaftar</span></a></li>                           
                            
                        </li>
                           
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="main-content" style="min-height: 692px;">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            
                            
                            <li class="settings-btn">
                                <i class="ti-settings"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?= $halaman; ?></h4>
                            <ul class="breadcrumbs pull-left">
                                <li><span>Page </span></li>
                                <li></li>
                                <li><span> / </span></li>
                                <li></li>
                                <li><span> <?= $halaman; ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="{{asset('siswa')}}/img/undraw_profile.svg" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Barokah<i class="fa fa-angle-down"></i></h4>                    </div>
                    </div>
                </div>
            </div>                   
                <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <a href="/tambah" class="btn btn-primary btn-lg mb-3">
                                        <span class="text"><i class = "fa fa-plus"></i></span><span> Tambah Siswa</span>
                                    </a> 
                                <h4 class="header-title">Tabel Data Siswa</h4>
                                <div class="single-table datatable-primary">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">NIS</th>
                                                    <th scope="col">Nama Siswa</th>
                                                    <th scope="col">Tempat Lahir</th>
                                                    <th scope="col">Tanggal Lahir</th>
                                                    <th scope="col">Asal Sekolah</th>
                                                    <th scope="col">No. Telepon</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                        <tbody>
                                        
                                    <?php
                                    $no = 1;
                                    ?>
                                    @foreach($dataSiswa as $s)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$s->nis}}</td>
                                                <td>{{$s->nama}}</td>
                                                <td>{{$s->tempat_lahir}}</td>
                                                <td><?= date("d F Y", strtotime($s->tgl_lahir)) ?></td>
                                                <td>{{$s->sekolah}}</td>
                                                <td>+62 <?= substr($s->notelp, -12, -8) . "-" . substr($s->notelp, -8, -4) . "-" . substr($s->notelp, -4)?></td>
                                                <td>{{$s->alamat}}</td>
                                                <td><ul class="d-flex justify-content-center">
                                                            <li class="mr-3"><a href="/edit?id={{$s->nis}}" title="Edit" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                            <li><form action="{{ route('siswa.delete', ['nis' => $s->nis]) }}" method="POST" class="user">
                                                            @csrf
                                                            @method('DELETE')
                                                                <button type="submit" onclick="confirm('Apakah anda yakin mau menghapus data ini?')" title="Hapus" class="text-danger" style="background: none; border: none; padding: 0; cursor: pointer;"><i class="ti-trash"></i></button></form></li>
                                                        </ul></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                                        
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
</div>
    </div>

        <footer>
            <div class="footer-area" style = "text-align : center;">
                <p>© Copyright 2024. All right reserved. Created by <a href="contact.php">FAY Team</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
            <!-- page container area end -->
    <!-- offset area start -->
   
    <!-- offset area end -->
    <!-- jquery latest version -->

    <script src="{{asset('siswa')}}/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('siswa')}}/js/popper.min.js"></script>
    <script src="{{asset('siswa')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('siswa')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('siswa')}}/js/metisMenu.min.js"></script>
    <script src="{{asset('siswa')}}/js/jquery.slimscroll.min.js"></script>
    <script src="{{asset('siswa')}}/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{asset('siswa')}}/js/line-chart.js"></script>
    <!-- all bar chart activation -->
    <script src="{{asset('siswa')}}/js/bar-chart.js"></script>
    <!-- all pie chart -->
    <script src="{{asset('siswa')}}/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="{{asset('siswa')}}/js/plugins.js"></script>
    <script src="{{asset('siswa')}}/js/scripts.js"></script>
    @if(session('successTambah'))
    <script>
        alert('{{ session('successTambah') }}');
    </script>
@endif
    @if(session('successUpdate'))
    <script>
        alert('{{ session('successUpdate') }}');
    </script>
@endif
</body>

</html>