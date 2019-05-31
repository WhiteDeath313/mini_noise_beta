<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 18/04/2019
 * Time: 11:20
 */

include "include/header.html";

?>
    <nav class="nav-extended orange" style="padding: 0px 10px;">
        <div class="nav-wrapper">
            <a href="" class="brand-logo"><i class="fas fa-home"></i> Home</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"><i class="fas fa-ellipsis-v	"></i></i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="?p=deconnexion"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <?php for ($i = 0; $i < 9; $i++) { ?>
                    <li class="tab"><a href="#<?php echo $villes[$i]; ?>"><?php echo $villes[$i];?></a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="?p=deconnexion"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>
    <div class="container">

        <?php for ($i = 0; $i < 9; $i++) { ?>
        <div id="<?php echo $villes[$i]; ?>" class="col s12" style="padding: 0px 10px;">
            <table id="tab_<?php echo $villes[$i]; ?>" class="cell-border hover">
                <thead>
                <tr>
                    <th>Id minitel</th>
                    <th>Nom</th>
                    <th>Etat</th>
                    <th>Nombre de tweet</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>12-0229B2</td>
                    <td>Joséphine</td>
                    <td>Actif</td>
                    <td>39940</td>
                </tr>
                <tr>
                    <td>637H4-389</td>
                    <td>Cassidi</td>
                    <td>Non actif</td>
                    <td>345</td>
                </tr>
                <tr>
                    <td>HH739-H34</td>
                    <td>Michel</td>
                    <td>Actif</td>
                    <td>666</td>
                </tr>
                </tbody>
            </table>
        </div>
        <?php } ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.tabs').tabs();
            <?php for ($i = 0; $i < 9; $i++) { ?>
                $('#tab_<?php echo $villes[$i]; ?>').DataTable({
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },
                    responsive: true
                });
            <?php } ?>
        });
    </script>

<?php

include "include/footer.html";

