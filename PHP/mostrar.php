<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="icon" href="../IMG/tecnm.png">
    <link rel="stylesheet" href="../CSS/base.css">
    <title>Practica 4 Informacion</title>
</head>
<body>
    <div class="head">
        <div class="logo">
        <a href="../index.html"><figure><img src="../IMG/tecnm.png" height="75px" width="75px" alt="tecnm"></figure></a>
        </div>
        
        <nav class="navbar">
            <a href="../index.html">Inicio</a>
            <a  href='https://api.whatsapp.com/send?phone=522712549431&text=Hola'
            target='_blank'
            rel='noreferrer'>Contactanos</a>
        </nav>
    </div>
    <div class="over">
        <h1>Informacion de Medicamento</h1>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $gramaje = $_POST["gramaje"];
            $distribuidor = $_POST["distribuidor"];
            $descripcion = $_POST["descripcion"];
            echo "<p>Nombre Medicamento: $nombre</p>";
            echo "<p>Gramaje Medicamento: $gramaje</p>"; 
            echo "<p>Distribuidor Medicamento: $distribuidor</p>";       
            echo "<p>Descipcion Medicamento: $descripcion</p>"; 
        }
        ?>
    </div>
</body>
</html>