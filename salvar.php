<?php
$uploaddir = '/upload/imagens/'; 

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . $_FILES['userfile']['name'])) {
    $uploadfile = $uploaddir . $_FILES['userfile']['name'];
    //grava na base de dados, no campo imagem, somente o nome da imagem que ficou gravado na variável $uploadfile que criamos acima.
} else {
    echo 'não foi possível concluir o upload da imagem.';
}
?>

