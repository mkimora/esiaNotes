<?php
session_start();
if(isset($_SESSION['e'])){
    include("connexion.php");

    $sql="select * from tabclasses";
    $res=mysqli_query($connect,$sql);
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
        <title>Gérer - Classe</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">ESIA NOTES
                <img src="esianotes.jpg" alt="" width="30" height="35">
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Rechercher..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Paramètres</a></li>
                        <li><a class="dropdown-item" href="#!">Journal d'activité</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="signout.php">Déconnexion
                        </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">ESIA Sénégal</div>
                            <a class="nav-link" href="loged.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de bord

                            </a>
                            <div class="sb-sidenav-menu-heading"> Etudiants </div>
                            <a class="nav-link collapsed" href="etudiant.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Etudiants
                            </a>
                          
                          
                            <div class="sb-sidenav-menu-heading">Classes</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Classes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="ajoutclasse.php">Ajout Classes</a>
                                    <a class="nav-link" href="gererclasse.php">Gérer Classes</a>
                                </nav>
                            </div>
                         
                            <div class="sb-sidenav-menu-heading"> Professeurs </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Professeurs
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="professeur.php">
                                        Ajout Professeurs
                                    </a>
                                    <a class="nav-link collapsed" href="gererprof.php">
                                        Gérer Professeurs
                                    </a>
                                 
                    
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading"> Résultats </div>
                            <a class="nav-link collapsed" href="resultat.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Résultats
                            </a>
                     
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Connecté(e) en tant que:
                        <li class="nav-item nav-profile">
                            <a href="#" class="">
                                <div class="nav-profile-image" >
                                    <img src="../image/" width="30" height="25"<?php /* echo $_SESSION['image'] */ ?> alt="profile" />
                                    <span class="login-status online"></span>
                                </div>
                                <div class="nav-profile-text d-flex  pr-3">
                                    <span class="font-weight-medium mb-2"><strong> <em><?php echo $_SESSION['e']?></em></strong></span>
                                </div>
                            </a>
                        </li>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gérer les classes</h4>
                                <p class="card-description" style="color:blue;">Modifier/Supprimer une classe</p>

                                <form class="nav-link form-inline mt-2 mt-md-0" method="post" action="recherche.php">
                                    <div class="input-group">
                                        <input name="recherche" type="text" class="form-control" placeholder="Rechercher...">
                                        <input type="submit" value="Search" class="btn btn-outline-primary">
                                    </div>
                                </form>
                                <?php
                                if(isset($_GET['succes'])){
                                    $err = $_GET['succes'];
                                    if($err == 1)
                                    echo "<div class='alert alert-danger my-3'>Classe supprimée avec succès</div>";
                                    if($err == 2)
                                    echo "<div class='alert alert-success my-3'>Classe modifiée avec succès</div>";
                                }
                                ?>

                                <div class="table-responsive">
                                    <table bgcolor="DE B8 87" class="table table" >
                                        <thead>
                                            <tr bgcolor="FF F8 DC">
                                                <th scope="col">#</th>
                                                <th scope="col">Nom de la classe</th>
                                                <th scope="col">Section</th>
                                                <th scope="col">Niveau</th>
                                                <th scope="col">Grade</th>
                                                <th scope="col">Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=1;
                                            while($row=mysqli_fetch_assoc($res)){
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo $i ?></th>
                                                <td><?php echo $row["className"] ?></td>
                                                <td><?php echo $row["section"] ?></td>
                                                <td><?php echo $row["niveau"] ?></td>
                                                <td><?php echo $row["grade"] ?></td>
                                               
                                                <td>
                                                    <a href="manageclassesedit1.php?id=<?php echo $row['id']?>"><i class="fas fa-edit" style="color:yellow"></i></a>
                                                    <a href="manageclassesSupp.php?id=<?php echo $row['id']?>"><i class="fa fa-trash" style="color:red"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $i++; 
                                        }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2021 - 2022 Créée par Mama Guissé Ndiaye</div>
                            <div>
                                <a href="#">Politique de confidentialité</a>
                                &middot;
                                <a href="#">Termes &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
