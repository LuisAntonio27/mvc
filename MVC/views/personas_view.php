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
        </style>
    </head>
    <body>
        <form method="GET">
            <select name="puesto">
                <option value="0">Selecciona un puesto</option>
                <?php foreach ($puestos as $puesto) { ?>
                    <option value="<?php echo $puesto['id']; ?>" <?php echo ($puesto['id'] == $puesto_id) ? 'selected' : ''; ?>>
                        <?php echo $puesto['puesto']; ?>
                    </option>
                <?php } ?>
            </select>
            <button type="submit">Buscar</button>
        </form>
        <?php if (isset($message)) { ?>
            <div class="error">
                <?php echo $message; ?>
            </div>
        <?php } ?>
        <ul>
            <?php foreach ($personas as $persona) { ?>
                <li>
                    <a href="persona.php?id=<?php echo $persona['id'] ?>">
                        <?php echo $persona['nombre'] . ' ' . $persona['apellido_paterno']; ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </body>
</html>