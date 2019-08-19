<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {
                font: 13px/20px 'Lucida Grande', Tahoma, Verdana, sans-serif;
                color: #404040;
                background: #0ca3d2;
                text-align: center;
		background-image:url("fon.jpeg");
            }
            #table2{
                margin-left: 50px;
                width: 200px;
            }
            
        </style>
    </head>
    <body>
        <?php

        function UbicarSillas($listSillas){
        ?>
        <!--Se crea la tabla y los encabezados -->
        <table border='1' id="table2">
            <tr>
                <!--se utiliza colspan el cuál indica el número de columnas que
                 ocupará la celda.-->
                <th colspan='6' bgcolor="bluelight">Escenario</th>
            </tr>
            <tr>
                <th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>
        <?php
        //Se recorre el array #listSillas con foreach, para imprimir filas y columnas. 
        $i=1;
        foreach($listSillas as $fila){
        ?>
            <tr>
                <th>
                <?php
                echo $i;
                ?>
                </th>
        <?php
        foreach($fila as $silla){
        ?>
            <td>
                 <?php
                echo $silla;
                 ?>
            </td>
        <?php 
        } ?>
            </tr>
        <?php
        $i++;}?>
            
        </table>
        <?php
        }
        ?>
    </body>
</html>
