<pre>
<?php
    if(isset($_FILES['arquivo'])){
        
        if(count($_FILES['arquivo']['tmp_name']) > 0){

            for($i = 0; $i < count($_FILES['arquivo']['tmp_name']); $i++){

                $nomearquivo = md5($_FILES['arquivo']['name'].time().rand(0,999)).".jpg";

                move_uploaded_file($_FILES['arquivo']['tmp_name'][$i], "arquivos/".$nomearquivo);

                echo "Arquivos enviados com sucesso!";

            }
        }

    }

?>
</pre>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploads multiplos</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        Arquivo: <br><br>
        <input type="file" name="arquivo[]" multiple><br><br>
        <input type="submit" value="Enviar arquivos">
    </form>
</body>
</html>