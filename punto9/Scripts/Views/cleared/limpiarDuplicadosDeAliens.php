<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../../Css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <div id="main">
        <div id="header"> <a href="#" class="logo"></a>
          <ul id="top-navigation">
            <li><span><span><a href="../../../index.html">Buscador de planetas</a></span></span></li>
            <li><span><span><a href="../../../static/verfiReportFirst.html">Verificar primer reporte de sistema solar</a></span></span></li>
            <li><span><span><a href="../../../static/planetas_habitables.html">Verificar planetas habitables</a></span></span></li>
            <li><span><span><a href="../../../static/GravedadPlaneta.html">Calcular Gravedad de planetas(aproximada...)</a></span></span></li>
            <li><span><span><a href="../../../static/MasaNave.html">Calcular masa de flota</a></span></span></li>
            <li><span><span><a href="../../../static/verificarSiExiste.html">Verificar Existencia de planeta</a></span></span></li>
            <li><span><span><a href="../../../static/existeNave.html">Verificar si existe nave en mi flota</a></span></span></li>
            <li><span><span><a href="../../../static/SeleccionarPlanetaR.html">Seleccionar planeta aleatorio...</a></span></span></li>
            <li class="active"><span><span>Limpiar lista de aliens</span></span></li>
          </ul>
        </div>
        <div id="middle">
          <form action="../Scripts/Logic/Logic.php" method="POST">
          <br><br><br>
            <button class="green-button" name="Clean" value="1" type="submit">Limpiar duplicados</button>
           </form>
           <h4><?php

print_r( implode(', ', $_GET));

?></h4>
        </div>
        <div id="footer"></div>
      </div>
      
</body>
</html>