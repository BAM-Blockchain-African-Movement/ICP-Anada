<?php 
require_once "include/header.php";
?>
<?php

        // database connection
        require_once "../connection.php";

         $currentDay = date( 'Y-m-d', strtotime("today") );
         $tomarrow = date( 'Y-m-d', strtotime("+1 day") );

         $today_leave = 0;
         $tomarrow_leave = 0;
         $this_week = 0;
         $next_week = 0;
            $i = 1;
        // total admin
        $select_admins = "SELECT * FROM admin";
        $total_admins = mysqli_query($conn , $select_admins);

        // total employee
        $select_emp = "SELECT * FROM employee";
        $total_emp = mysqli_query($conn , $select_emp);

        // employee on leave
        $emp_leave  ="SELECT * FROM emp_leave";
        $total_leaves = mysqli_query($conn , $emp_leave);

        if( mysqli_num_rows($total_leaves) > 0 ){
            while( $leave = mysqli_fetch_assoc($total_leaves) ){
                $leave = $leave["start_date"];

                //daywise
                if($currentDay == $leave){
                    $today_leave += 1;
                }elseif($tomarrow == $leave){
                   $tomarrow_leave += 1;
                }


            }
        }else {
            echo "no leave found";
        }


        // highest paid employee
        $sql_highest_salary =  "SELECT * FROM employee ORDER BY salary DESC";
        $emp_ = mysqli_query($conn , $sql_highest_salary);



?>

<div class="container">

    <div class="row counterup">
        <div class="col-md-3 col-sm-3 col-xs-12 control">
            <div class="box box1">
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="text">
                    <h3><span class="counter">
                        <?php
                            $res = mysqli_query($conn, "select * from admin");
                            $count = mysqli_num_rows($res);
                            echo $count;
                        ?>
                        </span>
                    </h3>
                    <h4><a href="manage-admin.php">Nombre d'administrateur</a></h4>
                </div>
            </div>        
        </div>
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
                    <h4><a href="manage-employee.php">Nombre d'utilisateurs</a></h4>
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
                    <h4><a href="add_an.php">Actes de naissance</a></h4>
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
                    <h4><a href="add_am.php">Actes de mariage</a></h4>
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
                    <h4><a href="add_ad.php">Actes de décès</a></h4>
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
                    <h4><a href="add_cn.php">Certificats de nationalité</a></h4>
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
                    <h4><a href="add_d.php">Diplômes</a></h4>
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
                    <h4><a href="add_ct.php">Contrats de travail</a></h4>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 control">
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
                    <h4><a href="add_t.php">Titres fonciers</a></h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 control">
            <div class="box box2">
                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
                <div class="text">
                    <h3><span class="counter">
                        </span></h3>
                    <h4><a href="profil.php">Mon profil</a></h4>
                </div>
            </div>
        </div>

                        
   </div>
                        
   </div>

   
        

       
    </div>
</div>

<?php 
require_once "include/footer.php";
?>