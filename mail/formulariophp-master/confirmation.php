<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Confirmation d'envoie du formulaire</title>
    <link rel="stylesheet" href="libs/bootstrap.css">
</head>

<body>
    <div class="container">
        <?php

        function form_mail($sPara, $sAsunto, $sTexto, $sDe)
        {
            $bHayFicheros = 0;
            $sCabeceraTexto = "ssss";
            $sAdjuntos = "fr";

            if ($sDe) $sCabeceras = "From:" . $sDe . "\n";
            else $sCabeceras = "";
            $sCabeceras .= "MIME-version: 1.0\n";
            foreach ($_POST as $sNombre => $sValor)
                $sTexto = $sTexto . "\n" . $sNombre . " = " . $sValor;

            foreach ($_FILES as $vAdjunto) {
                if ($bHayFicheros == 0) {
                    $bHayFicheros = 1;
                    $sCabeceras .= "Content-type: multipart/mixed;";
                    $sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";

                    $sCabeceraTexto = "----_Separador-de-mensajes_--\n";
                    $sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n";
                    $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";

                    $sTexto = $sCabeceraTexto . $sTexto;
                }
                if ($vAdjunto["size"] > 0) {
                    $sAdjuntos .= "\n\n----_Separateur-de-message_--\n";
                    $sAdjuntos .= "Content-type: " . $vAdjunto["type"] . ";name=\"" . $vAdjunto["name"] . "\"\n";;
                    $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n";
                    $sAdjuntos .= "Content-disposition: attachment;filename=\"" . $vAdjunto["name"] . "\"\n\n";

                    $oFichero = fopen($vAdjunto["tmp_name"], 'r');
                    $sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"]));
                    $sAdjuntos .= chunk_split(base64_encode($sContenido));
                    fclose($oFichero);
                }
            }

            if ($bHayFicheros)
                $sTexto .= $sAdjuntos . "\n\n----_Separateur-de-message_----\n";
            return (mail($sPara, $sAsunto, $sTexto, $sCabeceras));
            

        }

        //Changer le email ici
        if (form_mail("agustinngomezdeltoro@gmail.com", $_POST['asunto'], "Les donn??es saisies dans le formulaire sont :\n\n", $_POST['email']))
            echo "=
        <div class='py-5 text-center'>
            <div class='card'>
                <h2>E-mail de confirmation d'envoi.</h2>

                <div class='alert alert-success'>
                    <strong>Confirmation d'exp??dition</strong> Votre message a ??t?? envoy??.
                </div>
            </div>
        </div>

"
;
        ?>

    </div>

</body>
<script src="libs/formJs.js" ?id=<? print(date('H:i:s')); ?>></script>

</html>