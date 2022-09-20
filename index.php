<?php
session_start();
if (isset($_SESSION['e'])) {
    include("connexion.php");

    $sql = "select * from log_admin";
    $res = mysqli_query($connect, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="image/png" href="esianotes.jpg">
    <title>ESIA NOTES</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body style="background: linear-gradient(to bottom, rgba(121, 37, 11, 0.918) 0%, rgb(7, 7, 107) 100%);">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 style="color:rgba(121, 37, 11, 0.918);"
                                        class="text-center font-weight-light my-4">Connexion</h3>
                                </div>
                                <div class="card-body">
                                    <center><img src="esianotes1.jpg" alt="" width="140" height="80">
                                        <p><em style="color:rgb(7, 7, 107);"> École Supérieure d'Informatique
                                                Appliquée</em></p>
                                    </center>

                                    <form action="authentificationAdmin.php" method="post">
                                        <?php
                                        if(isset($_GET['erreur']))
                                        {
                                            $err = $_GET['erreur'];
                                            if($err==1)
                                            {
                                                echo "<div class='alert-danger my-3'>email ou mot de passe incorrect!";
                                            }
                                            if($err==2)
                                            {
                                                echo "<div class='alert-danger my-3'>champ vide!!";
                                            }
                                        }
                                        ?>
                                        
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="password"
                                                placeholder="Password" />
                                            <label for="inputPassword">Mot de passe</label>
                                        </div>


                                        <center><button class="btn btn-primary" type="submit" >Se connecter</center>

                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="#">ESIA SÉNÉGAL - DAKAR</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2021 - 2022 Créée par Mama Guissé Ndiaye</div>
                      
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
