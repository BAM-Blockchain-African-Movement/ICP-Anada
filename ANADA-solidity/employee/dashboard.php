<?php 
    require_once "include/header.php";
?>
<?php

    // database connection
    require_once "../connection.php";
?>

<div class="container">

    <div class="row counterup">
        <div class="col-md-3 col-sm-3 col-xs-12 control">
            <div class="box box2">
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="text">
                    <h3><span class="counter">
                        
                        <?php
                               $res = mysqli_query($conn, "select * from employee");
                                $count = mysqli_num_rows($res);
                                echo $count;
                        ?>
                        </span></h3>
                    <h4><a href="#">Nombre d'utilisateurs</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 control">
            <div class="box box3">
                <div class="icon">
                    <i class="fa fa-address-card-o"></i>
                </div>
                <div class="text">
                    <h3><span class="counter">
                        
                        <?php
                               $res = mysqli_query($conn, "select * from acte");
                                $count = mysqli_num_rows($res);
                                echo $count;
                        ?>
                        </span></h3>
                    <h4><a href="#">Nombre d'Actes de naissance</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 control">
            <div class="box box4">
                <div class="icon">
                    <i class="fa fa-address-card-o"></i>
                </div>
                <div class="text">
                    <h3><span class="counter">
                        
                        <?php
                               $res = mysqli_query($conn, "select * from acte_m");
                                $count = mysqli_num_rows($res);
                                echo $count;
                        ?>
                        </span></h3>
                    <h4><a href="#">Nombre d'actes de mariage</a></h4>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-3 col-xs-12 control">
            <div class="box box1">
                <div class="icon">
                    <i class="fa fa-address-card-o"></i>
                </div>
                <div class="text">
                    <h3><span class="counter">
                        <?php
                            $res = mysqli_query($conn, "select * from acte_d");
                            $count = mysqli_num_rows($res);
                            echo $count;
                        ?>
                        </span>
                    </h3>
                    <h4><a href="#">Nombre d'actes de décès</a></h4>
                </div>
            </div>        
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 control">
            <div class="box box2">
                <div class="icon">
                    <i class="fa fa-address-card-o"></i>
                </div>
                <div class="text">
                    <h3><span class="counter">
                        
                        <?php
                               $res = mysqli_query($conn, "select * from certificat");
                                $count = mysqli_num_rows($res);
                                echo $count;
                        ?>
                        </span></h3>
                    <h4><a href="#">Nombre de Certificats de nationalité</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 control">
            <div class="box box3">
                <div class="icon">
                    <i class="fa fa-folder"></i>
                </div>
                <div class="text">
                    <h3><span class="counter">
                        
                        <?php
                               $res = mysqli_query($conn, "select * from diplome");
                                $count = mysqli_num_rows($res);
                                echo $count;
                        ?>
                        </span></h3>
                    <h4><a href="#">Nombre de Diplômes</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12 control">
            <div class="box box4">
                <div class="icon">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="text">
                    <h3><span class="counter">
                        
                        <?php
                               $res = mysqli_query($conn, "select * from contrat");
                                $count = mysqli_num_rows($res);
                                echo $count;
                        ?>
                        </span></h3>
                    <h4><a href="#">Nombre de Contrats de travail</a></h4>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-12 control">
            <div class="box box1">
                <div class="icon">
                    <i class="fa fa-home"></i>
                </div>
                <div class="text">
                    <h3><span class="counter">
                        
                        <?php
                               $res = mysqli_query($conn, "select * from titre");
                                $count = mysqli_num_rows($res);
                                echo $count;
                        ?>
                        </span></h3>
                    <h4><a href="#">Nombre de Titres fonciers</a></h4>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php 
require_once "include/footer.php";
?>