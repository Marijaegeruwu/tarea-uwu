<html>
    <head></head>
    <body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <div class="Content-customer-support">
                    </div>
                </div>
                <div class="container-logo">
                </div>
                <div class="container-user">
                </div>
            </div>
        </div>
        <div class="container-navbar">
            <h1>Juego de letras</h1>
            <li><a href="indextareasdo.html"> Inicio</a></li>
        </div>
    </header>

    <main>
        <center>
            <table>
                <tr>
                    <td>Puntos</td>
                    <td>23.98</td>
                    <td>Límite de memoria</td>
                    <td>32 MiB</td>
                </tr>
                <tr>
                    <td>Límite de tiempo</td>
                    <td>1s</td>
                    <td>10 KiB</td>
                    <td>1m0s</td>
                </tr>
                <tr>
                    <td>Tamaño límite de entrada</td>
                </tr>
            </table>
        </center>

        <h2>Descripción</h2>
        <p>
        En cierto juego de computadora cada letra del alfabeto recibe un valor numérico relativo a su posición en el teclado: las letras Q, A y Z reciben el valor 1.
        las letras W, S y X reciben el valor 2
        y así sucesivamente hasta que las letras O y L reciben el valor 9
        y la letra P recibe el valor 0
        Una palabra formada por estas letras recibe como valor la suma de los valores de las letras que la forman. Por ejemplo, la palabra UAM recibe como valor 7+1+7=15.
        Una palabra formada por estas letras recibe como valor la suma de los valores de las letras que la forman. Por ejemplo, la palabra UAM recibe como valor v de una palabra p.

        <h2>Entrada</h2>
        <p>
           Un numero entero v
        </p>

        <h2>Salida</h2>
        <p>
            El resultado de f(x).
        </p>

        <center>
            <h2 class="form-title">Ejemplo</h2>
        </center>

        <table class="example-table">
            <tr>
                <th>Entrada</th>
                <th>Salida</th>
            </tr>
            <tr>
                <td>UAM</td>
                <td>15</td>
            </tr>
            
        </table>

        <div align="center">
            <form action="juegodletras.php" method="post">
            <table>
                <tr>
                     <td>Entrada</td>
                     <td><input type="text" name="txtn1"></td>
                </tr>
            <tr>
                <td> </td>
                <td><input type="submit" name="Enviar"></td>
            </tr>
        </table>

        <?php
if($_POST)
{
    $x=$_POST["txtn1"];


    function f ($z)
    {
        $s=array($z);
        $l=count($s);
        $cont=0;

        for ($i = 0; $i < $l; $i++) 
        {
            $cont=$cont+1;
            echo $s[$i] . "<br>";
            
        }
        echo $cont;
        /*for ($i = 0; $i <= $s; $i++) 
        {
            if ($s[$i]== "P" or "Ñ")
            {
                $cont=$cont+0;
            }
            elseif( $s[$i]== "O" or "J")
            {
                $cont=$cont+7;
            }
            return $cont;
        }*/

    

        
    }

    $hola= f($x);

    echo " <table>";
    echo "<tr>";
    echo "<td> La salida es:  </td> ";
    echo "<td>";
    echo $hola;
    echo "</td>";
    echo "</tr>";
    echo "";
    echo "</table>";
}

?>
        </div>


    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: url('imagenes/uwu.jpg') no-repeat;
            background-position: center;
            background-size: cover;
            display: flex;
            min-height: 100vh;
            flex-direction: column; 
            color: #fff; 
        }

        .container-hero {
            background-color: #861DA0;
            text-align: center;
        }

        .container-navbar {
            background: linear-gradient(to bottom, #2E0438, #000);
            text-align: center;
            
        }

        h1 
        {
            font-family: 'Didot', serif;
            background-color: #fff;
            -webkit-background-clip: text;
            color: transparent;
            display: inline-block;
        }

        h2,
        p {
            width: 80%;
            margin: 0 auto; 
            padding: 10px;
            border-bottom: 1px solid #ccc; 
        }

        .form-title {
            border-bottom: none; 
        }

        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }

        table, th, td 
        {
            border: 1px solid #333;
            border-collapse: collapse;
            background-color: #2E0438;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        table.example-table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            background-color: #1c1a1a; 
        }

        table.example-table th, table.example-table td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            background-color: #2E0438;
        }
        .form-container 
        {
            text-align: center;
            margin: 0 auto;
        }
    </style>    

    </body>
</html>
