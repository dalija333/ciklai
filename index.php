<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
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
<p></p>
<h5>Įveskite duomenis daugybos lentelės užduočiai suformuoti</h5>
<form action="lentele.php" method="post">
    <label class="p-2" for="formGroupExampleInput">Lentelės dydis: </label><input type="number" name="dgi" placeholder="10" value="10">
    <label class="p-2" for="formGroupExampleInput"> x </label><input type="number" name="dgy" placeholder="10" value="10"><br><br>
    <label class="p-2" for="formGroupExampleInput"> Sudėtingumas (%) </label><input type="number" name="dfclt" placeholder="10%" value="10"><br><br><br>
    <input class="m-2 btn btn-success" type="submit" value="Generuoti užduotį">
</form>
</div>
</body>
