<html>
    <head>
        <title>
            php
        </title>
        <style>
            .error{
                background-color: #FEE;
                border: #F00 1px solid;
                color: #F00;
                padding: 20px;
                text-align: center;
            }
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php echo $persona['nombre'].' '.$persona['apellido_paterno']; ?>
        </h1>
        <div>
            <p>Puesto: <?php echo $persona['puesto']; ?> </p>
            <p>Salario: <?php echo $persona['salario']; ?></p>
            
            <!--<p>Obligaciones: <?php  //echo $persona['obligacion']; ?></p>-->
            <ul>
                <?php foreach ($obligaciones as $obligacion){ ?>
                <li>
                    <?php echo $obligacion['obligacion']; ?>
                </li>
                <?php } ?>
            </ul>
        </div>
    </body>
</html>