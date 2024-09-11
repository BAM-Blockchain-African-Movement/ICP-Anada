<?php 
    require_once "include/header.php";
?>
    
    <?php
    require_once "include/header.php";
?>
<script src="../js/block6.js"></script>
<div style=""> 
<div class="login-form-bg h-100">
        <div class="container mt-5 h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 shadow">                       
                                    <h3 class="text-center">La Blockchain pour une sécurisation de fiabilitée</h3><br>
                                    <h4 class="text-center">Réchercher le certificat de nationalité</h4><br>
                                    
                                    <!-- <button id="connect" class="btn" onclick="Connect()">Cliquez ici pour vous connecter à la Blockchain</button> -->

                                    <button id="connect" class="btn btn-primary btn-block" onclick="Connect()" style="font-size: 20px;">Connection à la Blockchain</button>
                                    <br>
                                <div class="form-container">
                                
                                    <div class="form-group">
                                        <label >N° du certificat de nationalité :</label>
                                        <input type="text" class="form-control"  ame="numActe" id="numActe"  placeholder="Saisir..." >
                                    </div>


                                    <div class="form-group">
                                        <label >Nom(s) et prenom(s) du propriétaire:</label>
                                        <input type="text" class="form-control" name="nomE" id="nomE"  placeholder="Saisir..." >     
                                    </div>
                                
                                    <br>

                                    <button id="show_balance" onclick="show_balance()" class="btn btn-primary btn-block">Rechercher</button>
                                </div>

                                <?php 

                                    $email_err = $pass_err = $login_Err = "";
                                    $email = $pass = $thumb = "";

                                    if( $_SERVER["REQUEST_METHOD"] == "POST" ){
                                    
                                    if( empty($_REQUEST["email"]) ){
                                    $email_err = " <p style='color:red'> * ce champs est vide</p> ";
                                    }else {
                                    $email = $_REQUEST["email"];
                                    }

                                    if ( empty($_REQUEST["password"]) ){
                                    $pass_err =  " <p style='color:red'> * ce champs est vide</p> ";
                                    }else {
                                        $pass = $_REQUEST["password"];
                                    }

                                    if( !empty($email) && !empty($pass) ){

                                        // database connection
                                        require_once "../connection.php";

                                        $sql_query = "SELECT * FROM certificat WHERE num='$email' && nom = '$pass'  ";
                                        $result = mysqli_query($conn , $sql_query);

                                        if ( mysqli_num_rows($result) > 0 ){
                                        while( $rows = mysqli_fetch_assoc($result) ){
                                            $thumb= $rows["thumb"];
                                        // session_start();
                                        // session_unset();
                                        // $_SESSION["email_emp"] = $rows["email"];
                                        // header("Location: dashboard.php?login-sucess");
                                        ?>
                                            <script>console.log("good");</script>
                                        <?php 
                                        }
                                        }else{
                                        $login_Err = "<div class='alert alert-warning alert-dismissible fade show'>
                                        <strong>Invalid Email/Password</strong>
                                        <button type='button' class='close' data-dismiss='alert' >
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                        </div>";
                                        }

                                    }

                                    }

                                    ?>
                                
                                <form method="POST" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" style="margin-top:20%;">

                                    <input type="text" class="form-control" name="email" id="search" hidden>      
                                    <?php echo $email_err; ?> 

                                    <input type="text" class="form-control" name="password" id="search1" hidden>
                                    <?php echo $pass_err; ?>   

                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <input type="submit" value="Charger la trace numérique" class="btn btn-primary btn-lg w-100 " name="signin" >
                                            </div>
                                            <div class="col-md-4">
                                                <input type="button" id="togg1" value="Afficher" class="btn btn-success btn-lg w-100 " style="background:RoyalBlue;" name="signin" name="signin" >
                                            </div>
                                        </div>
                                        
                                        
                                    </div>

                                    <!-- <?php echo $thumb; ?> -->
                                     
                                    <center>
                                        <a href="../admin/upload/<?=  $thumb; ?>" id="d1" style="font-size:20px; color:black; display:none;" download="">
                                        <!-- <iframe src="upload/<?=  $thumb; ?>" width="100%" height="100%"></iframe> -->
                                            Télécharger
                                        </a>
                                    </center>
                                    <script>
        let togg1 = document.getElementById("togg1");
let togg2 = document.getElementById("togg2");
let d1 = document.getElementById("d1");
togg1.addEventListener("click", () => {
  if(getComputedStyle(d1).display != "block"){
    d1.style.display = "block";
  } else {
    d1.style.display = "none";
  }
})

function togg(){
  if(getComputedStyle(d2).display != "none"){
    d2.style.display = "none";
  } else {
    d2.style.display = "block";
  }
};
togg2.onclick = togg;
    </script>
                            </div>
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


<?php 
    require_once "include/footer.php";
?>