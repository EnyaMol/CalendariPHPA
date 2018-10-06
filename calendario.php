<?php
$mes = date("m");
$dia = date("d");
$año = date("Y");
$nombremes= date("F");
$semanaactual = date('d-m-Y'); 
$dia1 = 1;
$calculoprimerdia = date('d-m-Y',(time()-$dia*24*60*60));
$primerdia = date('w', strtotime('+1 day' , strtotime( $calculoprimerdia )))+7; 

$ultimodia = date('d-m-Y', strtotime('+1 month' , strtotime( $calculoprimerdia )))+1; 
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <style type="text/css">
            table{
                border : 1px solid black;
            }
        </style>
    </head>
    <body>
        <table>
        <?php
            echo "<th>$nombremes</th>";
        ?>
            <tr class="dias">
                <th>Dilluns</th>
                <th>Dimarts</th>
                <th>Dimecres</th>
                <th>Dijous</th>
                <th>Divendres</th>
                <th>Dissabte</th>
                <th>Diumenge</th>
            </tr>
            <tr>
            <?php
        		$ultimo=$primerdia+$ultimodia;
        		for($i=1;$i<=42;$i++){
        			if($i==$primerdia){
        				$day=1;
        			}
        			if($i<$primerdia || $i>=$ultimo){
        				echo "<td>&nbsp;</td>";
        			}
        			else{
        				if($day==$dia)
        					echo "<td>$day</td>";
        				else
        					echo "<td>$day</td>";
        				$day++;
        			}
        			// cuando llega al final de la semana, iniciamos una columna nueva
        			if($i%7==0)
        			{
        				echo "</tr><tr>\n";
        			}
        		}
        	?>
        </table>
    </body>
</html>

