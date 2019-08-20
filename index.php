
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Boletería Estadio Inteligente</title>
		
        <style>
			
            
           .rectangulo {
                position: relative;
                margin: 15px auto;
                padding: 20px 20px 20px;
                width: 300px;
                height: 570px;
                background: white;
                border-radius: 3px; 
		
            }
            #liberar{
                margin-left: 15px;
             }
                                             
        </style>
    </head>

    <body >
	
	</div>
        <?php
        /* Desarrollado por:Geraldin-Isabel Krisstina-Laura Isabel 
         * Programa: Desarrollo Web con php
         * Clase: Informatica I
         * Estadio inteligente
         */?>
    <div class="rectangulo">
        <h3 style="text-align: center">Maracaná, Rio de Janeiro, Brasil
 </h3>
        <table>
            <?php
           include_once "ubicarSillas.php";
           include_once "estadoPuesto.php"; 
           //Se verifica Si se envió la información ingresada por el usuario
           if(isset($_REQUEST["Enviar"])){
               //Información enviada del formulario
               $fila=$_POST['fila'];
               $puesto=$_POST['puesto'];
               $opcion=$_POST['opcion'];
               $stringSillas=$_POST['listSillas'];
               //el String generado en el input oculto se convierte en un Array
               $count=0;
           for($i=0;$i<5;$i++)
           {
               for($j=0;$j<5;$j++)
               {
                   $count=5*$i+$j;
               /*Se usa substr debido a que este devuelve parte de una cadena. Devuelve
               una parte del String($stringSillas) definida por los parametros inicio($count) y longitud(1).
               */
               $listSillas[$i][$j]= substr($stringSillas,$count,1);
               }
               $count=0;
           }
               //Se devuelve el array con la información modificada
               $listSillas=EstadoPuesto($fila,$puesto,$opcion,$listSillas);
               //Se llama a la función UbicarSillas,para que muestre el escenario,con las modificaciones
                UbicarSillas($listSillas);  
           }
               /*Se ejecuta else if cuando el usuario presiona el botón Borrar o cuando 
               se carga la página. */

           else if(isset($_REQUEST["Reset"]) || !isset($_REQUEST["Enviar"])) {
                $listSillas=array(
                   array("L","L","L","L","L"),
                   array("L","L","L","L","L"),
                   array("L","L","L","L","L"),
                   array("L","L","L","L","L"),
                   array("L","L","L","L","L")
               );

               UbicarSillas($listSillas);
           } ?>
            <form method="post">
                <p>
                 <!--Input oculto.Se separa el array $ListEscenario en un String y de oculta -->   
                <input type="text" name="listSillas" 
                    value="<?php foreach ($listSillas as $fila) {foreach ($fila as $puesto){echo $puesto;}}?>" style="display:none" />
                    <!--Opciones dadas para las fila en forma de selección -->
                    <label> Fila: </label></br>
                    <select name="fila">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select></br></br> 
                        
                    <!--Opciones dadas para las Puestos en forma de selección -->      
                    <label>  Puesto:  </label></br>
                    <select name="puesto">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select></br></br>
                        <!-- Opciones de Usuario mostradas como radio button -->              
                        Reservar: <input type="radio" name="opcion" 
                                     value="R" ></br></br>

                        Comprar: <input type="radio" name="opcion"
                                     value="V" ></br></br>
                        <!--Para evitar errores si el usuario no selecciona
                        ninguna de las opciones se establece un checked.-->
                        Liberar: <input type="radio" name="opcion" id="liberar"
                                     value="L" checked="checked" ></br></br>
                     <!--Botones que permiten enviar y borrar la información -->
                    <input type="submit" name="Enviar" value="Enviar">
                    <input type="submit" name="Reset" value="Borrar"></p>
                    
            </form>
           </table>
        </div>
    </body>
</html>
