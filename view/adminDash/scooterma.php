<?php
$title= "Les Trottinnettes";
require_once 'includes/header.php';
?>
<div>
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
<!--                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Gestion trottinettes</li>
                </ol>-->
                <h6 class="font-weight-bolder mb-0">Les Trottinettes</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign In</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="view/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="view/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                                                <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar END -->
<div>
    <div class="col-12 px-5">
        <div class="card mb-4 ">
            <div class="card-header pb-0">
                <h6>Cr??er une trottinnettes</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N??</th>
                            <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">??tat</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Km Parcourue</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Position</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Statut</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Zone</th>
                        </tr>
                        </thead>
                        <tbody class="">
                        <td class="">
                            <form method="post"  action="controllers/scooter.php">
                                <input type="text" class=" form-control" name="number" placeholder="Num??ro" required/>
                        </td>
                        <td>
                            <select name="condition" class="form-control">
                                <option value="1">Neuf</option>
                                <option value="2">Correct</option>
                                <option value="3">Endommag??</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" readonly name="km" value="0" class="form-control-plaintext" />
                        </td>
                        <td>
                            <input type="text" readonly name="location" value="Coordonn??es" class="form-control-plaintext" />
                        </td>
                        <td>
                            <select name="status" class="form-control">
                                <option value="1">Libre</option>
                                <option value="2">En course</option>
                                <option value="3">En pause</option>
                            </select>
                        </td>
                        <td>
                            <select name="workzone" class="form-control">
                                <option value="1">Nation</option>
                                <option value="2">Gare de Lyon</option>
                                <option value="3">Gare du Nord</option>
                                <option value="4">Gare de Montparnasse</option>
                            </select>
                        </td>
                        <td>
                            <input type="submit" class="btn btn-outline-success form-control" name="add" value="Ajouter"/>
                            </form>
                        </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="col-12 px-5">
        <div class="card mb-4 ">
            <div class="card-header pb-0">
                <h6>Informations Trottinettes</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N??</th>
                            <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7 ps-2">??tat</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Km Parcourue</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Position</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Statut</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Zone</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <?php
                                foreach($scooters as $cle => $infoscooters) {
                                foreach ($infoscooters as $cle => $info) { ?>
                                <?php if ($cle == "idScooter") { ?>
                            <td>
                                <?php } elseif ($cle == "number") {?>
                                <p class="text-xs font-weight-bold mb-0"><img src="view/assets/img/scooter-electrique.png" class=" avatar-sm  me-3" alt="scooter-img"><?php echo $info ?></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <?php } elseif ($cle == "condition") {
                                switch ($info){
                                    case 0:
                                        echo '<span class="badge badge-sm bg-gradient-success col-4">Neuf</span>';
                                        break;
                                    case 1:
                                        echo '<span class="badge badge-sm bg-gradient-warning col-4">Correct</span>';
                                        break;
                                    case 2:
                                        echo '<span class="badge badge-sm bg-gradient-danger col-4">Endommag??</span>';
                                        break;
                                }
                                    ?>
                            </td>
                            <td class="align-middle text-center">
                                <?php } elseif ($cle == "km") {?>
                                <span class="text-secondary text-xs font-weight-bold"><?php echo $info ?></span>
                            </td>
                            <td class="align-middle text-center">
                                <?php } elseif ($cle == "location") {?>
                                <span class="text-secondary text-xs font-weight-bold"><?php echo $info ?></span>
                            </td>
                            <td class="align-middle text-center">
                                <?php } elseif ($cle == "status") {

                                    switch ($info){
                                        case 1:
                                            echo '<span class="badge badge-sm bg-gradient-success col-4">Libre</span>';
                                            break;
                                        case 2:
                                            echo '<span class="badge badge-sm bg-gradient-warning col-4">En pause</span>';
                                            break;
                                        case 3:
                                            echo '<span class="badge badge-sm bg-gradient-danger col-4">En course</span>';
                                            break;
                                    }
                                ?>

                            </td>
                            <td>
                                <?php } elseif ($cle == "workzone") {?>
                                <p class="text-xs font-weight-bold mb-0"><?php echo $info;
                            }   }?></p>
                                <form method="post" action="controllers\scooter.php">
                                    <input type="hidden" name="id" value="<?php echo $infoscooters['idScooter'];?>"/>

                            </form>

                                <p class="text-xs text-secondary mb-0">Organization</p>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('includes/footer.php');
?>

