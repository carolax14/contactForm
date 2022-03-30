<?php
require 'contact.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Digital Wizard</title>
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="container contact-form">
        <div class="contact-image">
            <img src="img/DW_logo_carre.png" alt="rocket_contact" />
        </div>

        <strong>
            <?php if ($retour) {
                echo $msg1;
            } ?>
        </strong>


        <form action="contact.php" method="post">
            <h3>Contactez nous</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="surname" class="form-control" placeholder="Votre Nom *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Votre Email *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Objet *" value="" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="Envoyez votre message" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Votre Message *" style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>