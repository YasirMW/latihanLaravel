

<?php
//session_start();
//modular memanggil file dari folder tampleate
use Resources\Views\header;
use Resources\Views\sidebar;
use Resources\Views\topbar;

?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 align="center" class="h3 mb-2 text-gray-800">Selamat Datang Supar, kamu disini sebagai Admin
                    </h1>
                    
                </div>
                <br>
                <div class="card-header py-3">
                            <h3 align="center" class="m-0 font-weight-bold text-primary">Film Yang Tersedia</h3>
                        </div>

                        <div align="center" class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <img src="../assets/img/aq.jpg" alt="" width="150" height="240"></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Ejen Ali The Movie<br><br><a href="V_ulas.php?id=1"class="btn btn-info btn-icon-split">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        <span class="text">Ulas</span></a></div>
                                    

                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

    <br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br> <br><br><br><br>            <!-- /.container-fluid -->
<?php
    use Resources\Views\footer;
?>