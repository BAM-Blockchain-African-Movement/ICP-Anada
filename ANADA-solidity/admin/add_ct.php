<?php 
    require_once "include/header.php";
?>
    
    <?php
    require_once "include/header.php";
?>


<?php  

        $nameErr = $emailErr = $passErr =  "";
        $name = $email = $dob = $gender = $pass = "";


        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $num = $_REQUEST["num"];
            $nom = $_REQUEST["nom"];
     
            $filename = $_FILES["dp"]['name'];
            $temp_loc = $_FILES["dp"]["tmp_name"];

            $temp_ex = explode("." , $filename);
            $extension = strtolower( end($temp_ex) );
            $allowed_types = array("png","jpg","jpeg", "pdf");

        if( in_array($extension , $allowed_types)  ){
            $new_file_name = uniqid("",true).$filename;
            $location = "upload/".$new_file_name;
            if(move_uploaded_file($temp_loc, $location)){
                
                // database connection
                require_once "../connection.php";

                $sql = "INSERT INTO contrat( num , nom , thumb ) VALUES( '$num' , '$nom' , '$new_file_name') ";
                $result = mysqli_query($conn , $sql);
                if($result){
                    $name = $email = $dob = $gender = $pass = $salary = "";
                    echo "<script>
                    console.log('tst');
                    $(document).ready( function(){
                        $('#showModal').modal('show');
                        $('#modalHead').hide();
                        $('#linkBtn').attr('href', 'con_ct.php');
                        $('#linkBtn').text('Consulter un contrat de travail');
                        $('#addMsg').text('contrat de travail ajouté avec succès!');
                        $('#closeBtn').text('Fermer');
                    })
                    </script>
                    ";
                }
                
            }
        } else{ echo "<script>
            $(document).ready( function(){
                $('#showModal').modal('show');
                $('#addMsg').text('Only JPG, PNG and JPEG files allowed!!');
                $('#linkBtn').attr('href', 'profile.php');
                $('#linkBtn').hide();
                $('#closeBtn').text('Ok, Understood');
            })
        </script>
        ";
         
        }
}


?>


<script src="../js/block5.js"></script>
<div style=""> 
<div class="login-form-bg h-100">
        <div class="container mt-5 h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5 shadow">                       
                                    <h3 class="text-center">Sécuriser vos document en toute sécurité</h3><br>
                                    <h4 class="text-center">Archiver le contrat de travail</h4><br>
                                    <!-- <button id="connect" class="btn" onclick="Connect()">Cliquez ici pour vous connecter à la Blockchain</button> -->

                                    <button id="connect" class="btn btn-primary btn-block" onclick="Connect()" style="font-size: 20px;">Connexion à la Blockchain</button>
                                    <br>
                                <div class="form-container">
                                
                                    <div class="form-group">
                                        <label >N° du contrat de travail :</label>
                                        <input type="text" class="form-control"  ame="numActe" id="numActe"  placeholder="Saisir..." >
                                    </div>


                                    <div class="form-group">
                                        <label >Nom(s) et prenom(s) du travailleur :</label>
                                        <input type="text" class="form-control" name="nomE" id="nomE"  placeholder="Saisir..." >     
                                        <!-- <textarea name="nomE" id="nomE" cols="65" rows="8"></textarea> -->
                                    </div>
                                
                                    <br>

                                    <button id="deposit"  onclick="deposite()" class="btn btn-primary btn-block">Ajouter</button>
                                </div>

                                <div class="form-container"  style="margin-top:20%;">

                                    <form class="register" action="" method="post" enctype="multipart/form-data">
                                        <h3>Enrégistrer la trace numérique du contrat de travail</h3>
                                            <p hidden>N° de l'acte <span>*</span></p>
                                            <div class="form-group" hidden>
                                                <label >N° du contrat de travail :</label>
                                                <input type="text" class="form-control"  name="num" id="num"  placeholder="Saisir..." >
                                            </div>


                                            <div class="form-group" hidden>
                                                <label >Nom(s) et prenom(s) du travaiileur :</label>
                                                <input type="text" class="form-control" name="nom" id="nom"  placeholder="Saisir..." >     
                                            </div>
                                            <!-- <input type="text" name="num" id="num" placeholder="Saisir..."  class="box" >
                                            <input type="text" name="nom" id="nom" placeholder="Saisir..."  class="box" > -->
                                            
                                            <p>Fichier <span>*</span></p>
                                            <div class="form-group">
                                                <input type="file" name="dp"  required  class="box">
                                            </div>
                                         
                                        <input type="submit" value="Sauvegarde" name="submit" class="btn btn-primary btn-block">
                                                
                                    </form>
                                </div>
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