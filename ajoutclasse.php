<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tableau de bord - Admin</title>
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
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
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
                    <div class="small">Connecté(e) en tant que:</div>
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src="/assets/" <?php echo $_SESSION['image'] ?> alt="profile" />
                                <span class="login-status online"></span>
                            </div>
                            <div class="nav-profile-text d-flex flex-column pr-3">
                                <span class="font-weight-medium mb-2"><?php echo $_SESSION['e'] ?></span>
                            </div>
                        </a>
                    </li>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Ajouter une classe</h3>
                                </div>
                                <div class="card-body">
                                <p><em style="color:red;"> * champ obligatoire</em></p>
                                    <form class="forms-sample" action="addclasseX.php" method="post">
                                        <?php
                                        if (isset($_GET['succes'])) {
                                            $err = $_GET['succes'];
                                            if ($err==1 || $err==2)
                                                echo "<div class='alert alert-success my-3'>Classe ajoutée avec succès!</div>";
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['erreur'])) {
                                            $err = $_GET['erreur'];
                                            if ($err==1)
                                                echo "<div class='alert alert-danger my-3'>Classe existante</div>";
                                                if ($err==2)
                                                echo "<div class='alert alert-danger my-3'>Champ vide!!!</div>";
                                        }
                                        ?>
                    
                                            <div class="form-floating mb-3">
                                                <div class="col-md-6">
                                                    <label for="inputFirstName">* Classe</label>
                                                    <input name="nom" class="form-control" id="inputFirstName" type="text" placeholder="Entrer nom classe" />
                                                </div>

                                            </div>
                                            <label for="inputEmail">* Section</label>
                                            <div class="form-floating mb-3">
                                                <select name="section" id="inputSection">
                                                    <option selected>Selectionner section</option>
                                                    <option >Genie Informatique</option>
                                                    <option >Comptabilite</option>
                                                    <option >Reseaux et Telecoms</option>
                                                    <option >Genie Electrique</option>
                                                    <option >Genie Civile</option>
                                                </select>
                                            </div>
                                            <label for="inputEmail">* Niveau</label>
                                            <div class="form-floating mb-3">
                                                <select name="niveau" id="monselect">
                                                    <option selected>Selectionner niveau</option>
                                                    <option >BTS</option>
                                                    <option >Licence</option>
                                                    <option >Master</option>
                                                    <option >Ingenierie</option>
                                                </select>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <div class="col-md-6">
                                                    <label for="inputPassword">* Grade</label>
                                                    <input name="grade" class="form-control" id="inputGrade" type="text" placeholder="ex:1ère année" />
                                                </div>

                                            </div>
                                            <div class="mt-4 mb-0">
                                                <center>
                                                    <input type="submit" class="btn btn-primary mr-2" ></a>
                                                    <button class="btn btn-primary" >Annuler</a>
                                                </center>
                                            </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </main><br>
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