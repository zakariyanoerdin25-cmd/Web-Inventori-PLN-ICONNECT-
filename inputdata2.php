<?php
session_start();
require 'function.php';


?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Input material </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inputdata.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-bolt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SALDO MATERIAL PLN ICON <sup>+</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                home
            </div>

           <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="stokbarang.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Tentang Kami</span></a>
            </li>
 
             <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="inputdata.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tali Timbo</span></a>
            </li>

             <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="inputdata2.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Haleyora</span></a>
            </li>

             <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="inputdata3.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Sarana Infrakstur Bersama</span></a>
            </li>

             <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="inputdata4.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Gerbang Sinergi Prima</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

             <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
             <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <a href="exportexcel.php" class="btn btn-success mb-3">
                Download Excel
                   </a>
                </ul>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        
                        
                            

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                         <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                          
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                                
                                 </a>
                            
                            
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
             

                <!-- Begin Page Content -->
                <div class="container-fluid">

                <form method="post" style="display:inline;">
               <button type="submit" name="resetdata1" 
                class="btn btn-danger"
                   onclick="return confirm('Yakin mau hapus SEMUA data?')">
              Hapus data
             </button>
           </form>
                   

                    <!-- Content Row -->
                    <div class="row">
            
                    <!-- Content Row -->

                    <div class="row">

                        <div class="container-fluid">

    <div class="row">


        <!-- Begin Page Content -->
                <div class="container-fluid">
                        
                        </div>
                              </div> 
                               
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Material HALEYORA</h6>

        <!-- Tombol Modal -->
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            + Input Data
        </button>
    </div>

    <div class="card-body">
        <div class="table-responsive" style="overflow-x:auto;">

<table class="table table-bordered text-center" style="min-width:1200px;">
    <thead class="bg-primary text-white">
        <tr>
            <th>NAMA TIM</th>
            <th>KABEL 50</th>
            <th>KABEL 100</th>
            <th>KABEL 150</th>
            <th>KABEL 250</th>
            <th>ONT RAISECOM</th>
            <th>ONT HUAWEI</th>
            <th>ONT FIBERHOME</th>
            <th>STB</th>
            <th class="bg-dark">TOTAL MATERIAL</th> <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
    <?php
    // Ambil data dari database
    $data_material = mysqli_query($conn, "SELECT * FROM inputdata2");
    while($row = mysqli_fetch_assoc($data_material)){
        $idb = $row['id']; 

        // HITUNG TOTAL PER BARIS (Horizontal)
        $total_per_tim = (int)$row['KABEL50'] + 
                         (int)$row['KABEL100'] + 
                         (int)$row['KABEL150'] + 
                         (int)$row['KABEL250'] + 
                         (int)$row['ONTRAISECOM'] + 
                         (int)$row['ONTHUAWEI'] + 
                         (int)$row['ONTFIBERHOME'] + 
                         (int)$row['STB'];
    ?>
        <tr>
            <td><?= $row['NAMATIM']; ?></td>
            <td><?= $row['KABEL50']; ?></td>
            <td><?= $row['KABEL100']; ?></td>
            <td><?= $row['KABEL150']; ?></td>
            <td><?= $row['KABEL250']; ?></td>
            <td><?= $row['ONTRAISECOM']; ?></td>
            <td><?= $row['ONTHUAWEI']; ?></td>
            <td><?= $row['ONTFIBERHOME']; ?></td>
            <td><?= $row['STB']; ?></td>
            
            <td class="font-weight-bold bg-light"><?= number_format($total_per_tim, 0, ',', '.'); ?></td>
            
            <td>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?= $idb; ?>">
                    <i class="fas fa-edit"></i> Edit
                </button>
            </td>
        </tr>

        <div class="modal fade" id="editModal<?= $idb; ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data Tim: <?= $row['NAMATIM']; ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form method="post">
                        <div class="modal-body text-left">
                            <input type="hidden" name="id_material2" value="<?= $idb; ?>">
                            
                            <div class="form-group">
                                <label>NAMA TIM</label>
                                <input type="text" name="namatim" value="<?= $row['NAMATIM']; ?>" class="form-control" required>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label>KABEL 50</label>
                                    <input type="number" name="kabel50" value="<?= $row['KABEL50']; ?>" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label>KABEL 100</label>
                                    <input type="number" name="kabel100" value="<?= $row['KABEL100']; ?>" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label>KABEL 150</label>
                                    <input type="number" name="kabel150" value="<?= $row['KABEL150']; ?>" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label>KABEL 250</label>
                                    <input type="number" name="kabel250" value="<?= $row['KABEL250']; ?>" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>ONT RAISECOM</label>
                                    <input type="number" name="ont_raisecom" value="<?= $row['ONTRAISECOM']; ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label>ONT HUAWEI</label>
                                    <input type="number" name="ont_huawei" value="<?= $row['ONTHUAWEI']; ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label>ONT FIBERHOME</label>
                                    <input type="number" name="ont_fiberhome" value="<?= $row['ONTFIBERHOME']; ?>" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>STB</label>
                                <input type="number" name="stb" value="<?= $row['STB']; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="update_material2" class="btn btn-success">Simpan Perubahan</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
    </tbody>
</table>
</div>
         </div>
    </div>
                    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Inputdata</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form method="post">
      <div class="modal-body">

        <input type="text" name="namatim" placeholder="NAMA TIM" class="form-control" required><br>
        <input type="number" name="kabel50" placeholder="KABEL 50" class="form-control"><br>
        <input type="number" name="kabel100" placeholder="KABEL 100" class="form-control"><br>
        <input type="number" name="kabel150" placeholder="KABEL 150" class="form-control"><br>
        <input type="number" name="kabel250" placeholder="KABEL 250" class="form-control"><br>
        <input type="number" name="ONTRaisecom" placeholder="ONT RAISECOM" class="form-control"><br>
        <input type="number" name="ONTHuawei" placeholder="ONT HUAWEI" class="form-control"><br>
        <input type="number" name="ONTFiberhome" placeholder="ONT FIBER" class="form-control"><br>
        <input type="number" name="STB" placeholder="STB" class="form-control"><br>

        <button type="submit" name="addnew1" class="btn btn-primary">
            Simpan   
        </button>
      </div>
      </form>
    </div>
  </div>
</div>

</div>

</form>
        <!-- Modal footer -->
        <div class="modal-footer">
        </div>
        
      </div>
    </div>
  </div>
</html>
