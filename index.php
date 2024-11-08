<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página PHP</title>
    <style>
        body,html {
            font-family: Arial, sans-serif;
            margin: 0;
            height: 100%;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-size: 18px;

        }

        header,
        footer {
            background-color: #add8e6;
            padding: 20px;
            background-color: #87CEEB;
            text-align: center;
        }

        aside {
            background-color: #000080;
            padding: 20px;
            width: 200px;
            overflow-y: auto;
            height: 100%;
        }

        section {
            padding: 20px;
            width: 75%;
            overflow-y: auto;
            height: 100%;
            flex: 1;
        }

        .container {
            display: flex;
            flex: 1;
            overflow: hidden;
        }

        a {
            text-decoration: none;
            color: #000;
        }

        ul {
            list-style-type: none;
            padding-bottom: 20px;
        }

        li {
            padding: 5px;
        }

        footer {
            margin-top: auto;
        }
        aside::-webkit-scrollbar, section::-webkit-scrollbar {
            width: 0;
            height: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>Encabezado</h1>
    </header>
    <div class="container">
        <aside>
            <ul>
                <li><a href="index.php" style="color:white;">Inicio</a></li>
                <?php
                $sql = "SELECT *FROM menu ORDER BY idMenu"; //armo la cadena SQL
                $sql = mysqli_query($con, $sql); //ejecuto la consulta
                if (mysqli_num_rows($sql) != 0) //pregunto si tiene datos
                {
                    while ($r = mysqli_fetch_array($sql)) //recorro todos los registros
                    {
                ?>
                        <li><a href="index.php?modulo=<?php echo $r['modulo'] ?>" style="color:white;"><?php echo $r['nombre_ejercicio'] ?></a></li>
                <?php
                    }
                }
                ?>
            </ul>
        </aside>
        <section>
            <?php
            if (isset($_GET['modulo'])) {
                $modulo = $_GET['modulo'];
                $sql = "SELECT nombre_ejercicio FROM menu WHERE modulo='$modulo'";
                $result = mysqli_query($con, $sql);
                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    echo "<h1>" . $row['nombre_ejercicio'] . "</h1>";
                }
            }
            if (isset($_GET['modulo'])) {
                $modulo = $_GET['modulo'];
                $archivo = $modulo . '.php';
                if (file_exists($archivo)) {
                    include $archivo;
                } else {
                    echo "<p>El módulo solicitado no existe.</p>";
                }
            } else {
                echo "<p>Bienvenido a mi página PHP.</p>";
            }
            ?>
        </section>
    </div>
    <footer>
        <p>Pie de página</p>
    </footer>
</body>

</html>