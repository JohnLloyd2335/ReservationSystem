<?php 
    require '../app/config/connect.php';
    require '../app/controllers/admin/rooms/add_room.php';
    //login, register handler
    require '../app/controllers/admin/rooms/edit_room.php';

    if(isset($_POST['edit_settings'])){

        $welcome_text = $_POST['welcome_text'];
        $quotes = $_POST['quotes'];
        $welcome_text = $_POST['welcome_text'];
        $quotes = $_POST['quotes'];

        $filename1 = $_FILES["logo"]["name"];
        $tempname1 = $_FILES["logo"]["tmp_name"];
        $folder1 = "../ahhh/img/" . $filename1;

        $filename2 = $_FILES["background"]["name"];
        $tempname2 = $_FILES["background"]["tmp_name"];
        $folder2 = "../ahhh/img/" . $filename2;

        $filename3 = $_FILES["slider_1"]["name"];
        $tempname3 = $_FILES["slider_1"]["tmp_name"];
        $folder3 = "../ahhh/img/" . $filename3;

        $filename4 = $_FILES["slider_2"]["name"];
        $tempname4 = $_FILES["slider_2"]["tmp_name"];
        $folder4 = "../ahhh/img/" . $filename4;

        $filename5 = $_FILES["slider_3"]["name"];
        $tempname5 = $_FILES["slider_3"]["tmp_name"];
        $folder5 = "../ahhh/img/" . $filename5;

        $filename6 = $_FILES["slider_4"]["name"];
        $tempname6 = $_FILES["slider_4"]["tmp_name"];
        $folder6 = "../ahhh/img/" . $filename6;

        $filename7 = $_FILES["slider_5"]["name"];
        $tempname7 = $_FILES["slider_5"]["tmp_name"];
        $folder7 = "../ahhh/img/" . $filename7;

        $filename8 = $_FILES["slider_6"]["name"];
        $tempname8 = $_FILES["slider_6"]["tmp_name"];
        $folder8 = "../ahhh/img/" . $filename8;

        



    
        
    
        // Get all the submitted data from the form
        $sql = "UPDATE sys_settings SET logo='$filename1',background='$filename2',welcome_text='$welcome_text',quotes='$quotes',welcome_text='$welcome_text', quotes='$quotes' ,slider_1='$filename3',slider_2='$filename4',slider_3='$filename5',slider_4='$filename6',slider_5='$filename7',slider_6='$filename8' WHERE sys_settings_id = 1";
    
        // Execute query
        mysqli_query($con, $sql);
    
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname1, $folder1) && move_uploaded_file($tempname2, $folder2) && move_uploaded_file($tempname3, $folder3) && move_uploaded_file($tempname4, $folder4) && move_uploaded_file($tempname5, $folder5) && move_uploaded_file($tempname6, $folder6) && move_uploaded_file($tempname7, $folder7) && move_uploaded_file($tempname8, $folder8)){
                echo "<h3>  Updated successfully!</h3>";
        } else {
            echo "<h3>  Failed to upload image!</h3>";
        }

        // if (move_uploaded_file($tempname1, $folder1)) {
        //     if (move_uploaded_file($tempname2, $folder2)){
        //         echo "<h3>  Updated successfully!</h3>";
        //     }
        //     else{
        //         echo "<h3>  Failed to upload image!</h3>";
        //     }
            
        // } else {
        //     echo "<h3>  Failed to upload image!</h3>";
        // }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../ahhh/img/tablogo.png">
    <title>Ha-Boogies Archer Resort - Services</title>

    <!-- Custom fonts for this template -->
    <link href="boost/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="boost/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="boost/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Ha-Boogies Archer</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="reservations.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reservations</span></a>
            </li>
            <hr class="sidebar-divider">

            <!-- Heading -->
            
            <!-- Nav Item - Tables -->
            <li class="nav-item ">
                <a class="nav-link" href="../admin/services.php">
                    <i class="fas fa-fw fa-briefcase"></i>
                    <span>Services</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../admin/rooms.php">
                    <i class="fas fa-fw fa-bed"></i>
                    <span>Rooms</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../admin/cottage.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Cottage</span></a>
            </li>
            <hr class="sidebar-divider">

            <!-- Heading -->
            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="../admin/posts.php">
                    <i class="fas fa-fw fa-camera-retro"></i>
                    <span>Posts</span></a>
            </li>
                        <hr class="sidebar-divider">

            <!-- Heading -->
            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="../admin/account.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Accounts</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="../admin/archive.php">
                    <i class="fas fa-fw fa-archive"></i>
                    <span>Archive</span></a>
            </li>
            <li class="nav-item  active">
                <a class="nav-link" href="../admin/settings.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    

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

                        <!-- Nav Item - Alerts -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i> -->
                                <!-- Counter - Alerts -->
                                <!-- <span class="badge badge-danger badge-counter">3+</span> -->
                            <!-- </a> -->
                            <!-- Dropdown - Alerts -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div> -->
                        </li>

                        <!-- Nav Item - Messages -->
                        <!-- <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i> -->
                                <!-- Counter - Messages -->
                                <!-- <span class="badge badge-danger badge-counter">7</span>
                            </a> -->
                            <!-- Dropdown - Messages -->
                            <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="boost/img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="boost/img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="boost/img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div> -->
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Haji Jazrez</span>
                                <img class="img-profile rounded-circle"
                                    src="boost/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Settings</h1>
                    <br>
                   
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body ">
                            <?php 
                            $select_settings = $con->query("SELECT * FROM sys_settings WHERE sys_settings_id=1");
                            while($row = $select_settings->fetch_assoc()):
                            ?>
                                <div class="row d-flex justify-content-around align-items-center">
                                <div class="col   d-flex flex-column justify-content-around align-items-center">
                                        <img src="../ahhh/img/<?php echo $row['logo']?>" alt="" height="300" width="300">
                                        <h4 class="text-muted mt-4">Logo</h4>
                                    </div>
                                    <div class="col   d-flex flex-column justify-content-around align-items-center">
                                        <img src="../ahhh/img/<?php echo $row['background']?>" alt="" height="300" width="300">
                                        <h4 class="text-muted mt-4">Background</h4>
                                    </div>
                                </div>
                                
                                <div class="row mt-5">
                                     
                                    <div class="col">
                                        <img src="../ahhh/img/<?php echo $row['slider_1']?>" alt="" height="300" width="300">
                                    </div>
                                        
                                    <div class="col">
                                        <img src="../ahhh/img/<?php echo $row['slider_2']?>" alt="" height="300" width="300">
                                    </div>

                                    <div class="col">
                                        <img src="../ahhh/img/<?php echo $row['slider_3']?>" alt="" height="300" width="300">
                                    </div>

                                </div>

                                <div class="row mt-5">
                                     
                                    <div class="col">
                                        <img src="../ahhh/img/<?php echo $row['slider_4']?>" alt="" height="300" width="300">
                                    </div>
                                        
                                    <div class="col">
                                        <img src="../ahhh/img/<?php echo $row['slider_5']?>" alt="" height="300" width="300">
                                    </div>

                                    <div class="col">
                                        <img src="../ahhh/img/<?php echo $row['slider_6']?>" alt="" height="300" width="300">
                                    </div>

                                </div>

                                <div class="d-flex justify-content-center align-items-center"><h4 class="text-muted my-2 text-center mt-2">Slider</h4></div>

                                <div class="row mt-5">
                                    <div class="col">
                                        <label>Welcome Text</label>
                                        <textarea name="" id="" readonly cols="5" rows="5" class="form-control"><?php echo $row['welcome_text']; ?>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col">
                                        <label>Quotes</label>
                                        <textarea name="" id="" readonly cols="5" rows="5" class="form-control"><?php echo $row['quotes']; ?>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col">
                                        <label>Welcome Text 1</label>
                                        <textarea name="" id="" readonly cols="5" rows="5" class="form-control"><?php echo $row['welcome_text']; ?>
                                        </textarea>
                                    </div>
                                </div>
                              

                                <div class="row mt-5">
                                    <div class="col">
                                        <label>Quote 1</label>
                                        <textarea name="" id="" readonly cols="5" rows="5" class="form-control"><?php echo $row['quotes']; ?>
                                        </textarea>
                                    </div>
                                </div>

                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modalEdit<?php echo $row['sys_settings_id'] ?>">Update</button>
                                </div>


                                <?php endwhile; ?>
                        </div>

                    </div>

                                                    <!-- Modal -->
                                                    <?php 
                                                    $select_settings = $con->query("SELECT * FROM sys_settings WHERE sys_settings_id=1");
                                                    while($row = $select_settings->fetch_assoc()):
                                                    ?>
                                                    <div class="modal fade" id="modalEdit<?php echo $row['sys_settings_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Settings</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body col-md-12">
                                            <form action="settings.php" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="row col-md-12">

                                                    <div class="row col-md-6">
                                                        <label>Logo</label>
                                                        <input type="file" name="logo" id="" class="form-control" required>
                                                    </div>

                                                    <div class="row col-md-6">
                                                        <label>Background</label>
                                                        <input type="file" name="background" id="" class="form-control" required>
                                                    </div>
                                                    

                                                    <div class="row col-md-6">
                                                        <label>Welcome Text</label>
                                                        <textarea name="welcome_text" id="" cols="5" rows="5" class="form-control"><?php echo $row['welcome_text']; ?></textarea>
                                                    </div>
                                                    <br/>
                                                    <div class="row col-md-6">
                                                        <label>Quotes</label>
                                                        <textarea name="quotes" id="" cols="5" rows="5" class="form-control"><?php echo $row['quotes']; ?></textarea>
                                                    </div>

                                                    <!-- <div class="row col-md-6">
                                                        <label>Welcome Text 1</label>
                                                        <textarea name="welcome_text" id="" cols="5" rows="5" class="form-control"><?php echo $row['welcome_text']; ?></textarea>
                                                    </div>

                                                    <div class="row col-md-6">
                                                        <label>Quote 1</label>
                                                        <textarea name="quotes" id="" cols="5" rows="5" class="form-control"><?php echo $row['quotes']; ?></textarea>
                                                    </div> -->

                                                    <div class="row col-md-12">
                                                    <div class="row col-md-6">
                                                        <label>Slider 1</label>
                                                        <input type="file"  id="" class="form-control" name="slider_1" required>
                                                    </div>

                                                    <div class="row col-md-6">
                                                        <label>Slider 2</label>
                                                        <input type="file"  id="" class="form-control" name="slider_2" required>
                                                    </div>

                                                    <div class="row col-md-6">
                                                        <label>Slider 3</label>
                                                        <input type="file"  id="" class="form-control" name="slider_3" required>
                                                    </div>

                                                    <div class="row col-md-6">
                                                        <label>Slider 4</label>
                                                        <input type="file"  id="" class="form-control" name="slider_4" required>
                                                    </div>

                                                    <div class="row col-md-6">
                                                        <label>Slider 5</label>
                                                        <input type="file"  id="" class="form-control" name="slider_5" required>
                                                    </div>

                                                    <div class="row col-md-6">
                                                        <label>Slider 6</label>
                                                        <input type="file"  id="" class="form-control" name="slider_6" required>
                                                    </div>

                                                </div> 
                                                    </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="edit_settings" class="btn btn-primary">Save</button>
                                        </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                                <!-- Modal -->
                    <!-- Add-->
                    <div class="modal fade" id="modalAddService" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Room</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><h6>Room Name</h6></label>
                    <input class="form-control auth-input w-100 p-2" type="text" id="roomname" name="roomname" placeholder="Room Name.." value="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><h6>Room Price</h6></label>
                    <input class="form-control auth-input w-100 p-2" type="text" id="roomprice" name="roomprice" placeholder="Room Price.." value="">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><h6>Room Description</h6></label>
                    <textarea class="form-control" name="roomdescription" id="roomdescription" rows="3" placeholder="Room Description.."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><h6>Image Upload</h6></label>
                    <br><input class="form-control" type="file" name="image" id="image" required>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="addRoomButton" class="btn btn-success" value="Add">
            </div>
            </div>
        </div>
    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../app/controllers/auth/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="boost/vendor/jquery/jquery.min.js"></script>
    <script src="boost/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="boost/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="boost/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="boost/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="boost/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="boost/js/demo/datatables-demo.js"></script>
    <script>
      function tableSearch() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }       
        }
      }

    function openModal(i) {
        $('#exampleModal' + i).modal('show');
    }

    function openEditModal(i) {
        $('#modalEdit' + i).modal('show');
    }

    function openApproveModal(i) {
        $('#modalApprove' + i).modal('show');
    }

    function openRejectModal(i) {
        $('#modalReject' + i).modal('show');
    }

    function openPayModal(i) {
        $('#modalPay' + i).modal('show');
    }
    function openViewPostModal(i) {
        $('#modalPost' + i).modal('show');
    }

    function openAccounts() {
        window.open("../admin/account.php", "_self");
    }

    function openReservations() {
        window.open("../admin/reservations.php", "_self");
    }

    function openAddServiceModal() {
        $('#modalAddService').modal('show');
      }

    function openDashboard() {
        window.open("../admin/dashboard.php", "_self");
    }

    function doMath(i) { 
      cashchange = document.getElementById("change");
      cashchange.value = i;
    }
    function openDeleteModal(i) {
        $('#modalDelete' + i).modal('show');
    }
    </script>
</body>

</html>