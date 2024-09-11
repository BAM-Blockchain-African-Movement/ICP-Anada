<?php 
    session_start();
    if( empty($_SESSION["email"]) ){
        header("Location: ./login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Employee Management System</title>
    <link href="../resorce/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js"></script>
   <script src="http://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <!-- <script src="../js/block.js"></script> -->
    
    
    <style> 
    .hidden {
        display: none;
    }
    .counterup .box1{
    width: 100%;
    height: 100px;
    background: #00C0EF;
    padding: 10px 10px;
    margin-bottom: 30px;
    color: #fff;

}
.counterup .box2{
    background: #00A65A;
    width: 100%;
    height: 100px;
    padding: 10px 10px;
    margin-bottom: 30px;
    color: #fff;
}
.counterup .box3{
    background: #DD4B39;
    width: 100%;
    height: 100px;
    padding: 10px 10px;
    margin-bottom: 30px;
    color: #fff;
}
.counterup .box4{
    background: #F39C12;
    width: 100%;
    height: 100px;
    padding: 10px 10px;
    margin-bottom: 30px;
    color: #fff;
}
.counterup .box:hover{
    transform: scale(1.1);
     -webkit-transition: ease .5s all;
    -moz-transition: ease .5s all;
    -ms-transition: ease .5s all;
    -o-transition: ease .5s all;
    transition: ease .5s all;
}
.counterup .box .icon{
    width: 15%;
    float: right;
}
.counterup .box .text{
    width: 85%;
    float: left;
}
.counterup .box i{
    font-size: 30px;
    color: #ddd;
    margin-top: 20px;
}
.counterup .box span{
    margin-right: 5px;
}
.counterup .box h2{
    font-weight: bold;
    margin-top: 10px;
    color: #fff;
}
.counterup .box h4 a{
    text-decoration: none;
    text-transform: capitalize;
    
    margin-top: 0;
    color: #fff;
}
    </style>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

     





    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">

             <div class="brand-logo">
                <a >
                    <marquee behavior="" direction="">
                        <span class="brand-title" style="font-size:25px; color:white;">
                            A.N.A.D.A 
                        </span>
                    </marquee>
                </a>
            </div> 
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
               <div class="text-center">
                <h2 class="pt-3">ANADA <span style="font-size:20px;">(Agence de Numérique d'Authentification des Documents Administratifs)</span></h2>
                 </div>
                
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                   <br> <br>       
                    <li>
                        <a href="./dashboard.php"  >
                            <i class="icon-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li><hr>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Gestion des actes de naissance</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add_an.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Ajouter</span></a></li>
                            <li><a href="./con_an.php"> <i class="fa fa-eye menu-icon"></i><span class="nav-text">Consulter</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Gestion des actes de mariage</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add_am.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Ajouter</span></a></li>
                            <li><a href="./con_am.php"> <i class="fa fa-eye menu-icon"></i><span class="nav-text">Consulter</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Gestion des actes de décès</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add_ad.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Ajouter</span></a></li>
                            <li><a href="./con_ad.php"> <i class="fa fa-eye menu-icon"></i><span class="nav-text">Consulter</span></a></li>
                        </ul>
                    </li><hr>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Gestion des certificats de nationalité</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add_cn.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Ajouter</span></a></li>
                            <li><a href="./con_cn.php"> <i class="fa fa-eye menu-icon"></i><span class="nav-text">Consulter</span></a></li>
                        </ul>
                    </li><hr>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-folder menu-icon"></i><span class="nav-text">Gestion des diplômes</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add_d.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Ajouter</span></a></li>
                            <li><a href="./con_d.php"> <i class="fa fa-eye menu-icon"></i><span class="nav-text">Consulter</span></a></li>
                        </ul>
                    </li><hr>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-briefcase menu-icon"></i><span class="nav-text">Gestion des contrats de travail</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add_ct.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Ajouter</span></a></li>
                            <li><a href="./con_ct.php"> <i class="fa fa-eye menu-icon"></i><span class="nav-text">Consulter</span></a></li>
                        </ul>
                    </li><hr>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-home menu-icon"></i><span class="nav-text">Gestion des titres fonctiers</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add_t.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Ajouter</span></a></li>
                            <li><a href="./con_t.php"> <i class="fa fa-eye menu-icon"></i><span class="nav-text">Consulter</span></a></li>
                        </ul>
                    </li><hr>

                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Liste des usagers</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-employee.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Add Usager</span></a></li>
                            <li><a href="./manage-employee.php"> <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Usager</span></a></li>
                            <!-- <li><a href="./"> <i class="fa fa-bar-chart menu-icon"></i><span class="nav-text">Salary Table</span></a></li> -->

                        </ul>
                    </li>

                    <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-address-card-o menu-icon"></i><span class="nav-text">Admin</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./add-admin.php"> <i class="icon-plus menu-icon"></i><span class="nav-text">Add Admin</span></a></li>
                            <li><a href="./manage-admin.php"> <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Admins</span></a></li>
                        </ul>
                    </li><hr>

                    <li>
                    
                    <!-- <li>
                        <a href="./manage-leave.php" >
                            <i class="fa fa-tasks menu-icon"></i><span class="nav-text">Manage Employee Leave</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="./profile.php"  >
                            <!-- <img src="https://icon-library.net//images/icon-profile/icon-profile-20.jpg" width="14"> -->
                            <i class="fa fa-user menu-icon"></i><span class="nav-text"> Profile</span>
                        </a>
                    </li>   
                    <li>
                        <a href="./logout.php" >
                            <i class="icon-logout menu-icon"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>              
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">



        <div class="modal fade" id="showModal" data-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div id="modalHead" class="modal-header">
                    <button id="modal_cross_btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span  aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p id="addMsg" class="text-center font-weight-bold"></p>
                </div>
                <div class="modal-footer ">
                    <div class="mx-auto">
                        <a type="button" id="linkBtn" href="#" class="btn btn-primary" >Add Expense For the Day</a>
                        <a type="button" id="closeBtn" href="#" data-dismiss="modal" class="btn btn-primary">Close</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
            <!-- row -->

            <div class="container-fluid">

            