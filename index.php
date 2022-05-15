<style type="text/css">
    input{
        display:block;

    }

</style>
<form method="POST" enctype="multipart/form-data">

                <input type="file" name="foto">
                <input type="submit">

</form>
<pre>

<?php
if(isset($_POST['nome']))
{
    //echo $_POST['nome'].'<br>';
   // echo $_POST['email'].'<br>';
    if($_FILES['foto']['type'] == 'image/png')
    {
        $nome_arquivo = md5($_FILES['foto']['name'].rand(1,999)).'.png';
        if(isset($_FILES['foto']))
        {
            // var_dump($_FILES['foto']);
            move_uploaded_file($_FILES['foto']['tmp_name'],'imagens/'.$nome_arquivo);
            echo 'Imagens enviadas com sucesso';
        }
    }elseif($_FILES['foto']['type'] == 'image/jpeg')
    {
        $nome_arquivo = md5($_FILES['foto']['name'].rand(1,999)).'.jpg';
        if(isset($_FILES['foto']))
        {
            // var_dump($_FILES['foto']);
            move_uploaded_file($_FILES['foto']['tmp_name'],'imagens/'.$nome_arquivo);
            echo 'Imagens enviadas com sucesso';
        }
    }else
    {
        echo "Só é possivel enviar imagens .png ou .jpg";
    }






}
?>
</pre>
