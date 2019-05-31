<?php
/**
 * Created by PhpStorm.
 * User: Arnaud RIDET
 * Date: 18/04/2019
 * Time: 11:57
 */

include "include/header.html";

?>



    <div class="parallax-container">
        <div class="parallax"><img src="img/logo_orange.jpg"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <form action="" method="post">
                <input type="hidden" name="isSubmit" id="isSubmit" value="1">
                <h2 class="header">Connexion</h2>
                <div class="input-field col s7" style="margin-top: 65px;">
                    <input placeholder="toto@orange.fr" id="identifiant" name="identifiant" type="text" class="validate" <?php if (!empty($name)) { echo "value=\"$name\""; } ?>>
                    <label for="identifiant">Identifiant</label>
                </div>
                <div class="row">
                    <div class="input-field col s7" style="margin-top: 25px;">
                        <input id="password" name="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input id="submit" type="submit" class="validate waves-effect waves-light btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img src="img/photo_minitel.jpg"></div>
    </div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.parallax').parallax();
    });
</script>

<?php

include "include/footer.html";

?>