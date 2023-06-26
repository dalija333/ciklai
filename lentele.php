<?php

$dgy=$_POST['dgy']+1;
$dgi=$_POST['dgi']+1;
$dfclt=100-$_POST['dfclt']

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    .table tr td{
        width:50px;
        height:50px;
        border: 1px solid;
        text-align: center;
    }
    table {
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
    }
    td.header {
        border: 2px solid;
        background-color: lightgray;
    }

    td.hover {
        background-color: coral;
    }
    .center {
        margin: auto;
        width: 70%;
        border: 3px solid green;
        padding: 10px;
    }

</style>
<body>
<div class="center">
    <h1>Daugybos lentelė</h1>
    <p>Vardas: ________________________________________</p>
    <p>Data: __________________________________________</p>
    <p>Surinkta taškų: ____________________________</p>
<table class="table";>

<?php for ($y=1; $y<$dgy; $y++) { ?>

<tr>
    <?php for ($i=1; $i<$dgi; $i++) { ?>
     <td class="<?=($y==1||$i==1)?'header':''?>">
         <?=(rand(0, 100) <$dfclt )|| $y==1 || $i==1? $y*$i :""?></td>
    <?php    } ?>
 </tr>
<?php    } ?>
</table>

<hr>

    <br>
    <button onClick="window.print()">Spausdinti</button>
    <br><br>
    <form action="index.php" method="POST">
        <input type="submit" value="Įvesti naujus duomenis"/>
    </form>
</div>

</body>
</html>