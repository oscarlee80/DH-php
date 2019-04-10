<?php
//Programa para demostar la funcionalidad de php
//Switch case - Ciclos - Array - Condiciones - foreach
//Para nuestros alumnos de Digital House
//MSc. Angel Daniel Fuentes - Hernan Baravalle
//Inicialización de las variables
//Datos a ser suminsitrados por el usuario
$dni = "12345678";
$nombre = "Herni";
$apellido = "Baravalle";
// ------------------Datos que debes incorporar manualmente, también puede usar la función randon de PHP ------------
//Validar que sólo el usuario proporcione un valor del 1 al 7 y utilice  swicth case para mostrar el dia seleccionado, ojo si no cumple la condición no debe avanzar el programa el mismo debe finalizar
$dia=rand(1,10);
$diadelasemana="";
//Validar que el monto sea mayor ó igual de $1000 y menor ó igual a $72000, de no cumplir con la condición el prpgrama se debe finalizar, puede usar la función randon de PHP
$monto=rand(1,80000);
$montoerror="Debe indicar un numero mayor o igual a 10000 y menor o igual a 72000.";
//Validar que la cuota debe ser mayor de 3 y menor e igual a 36 - De no cumplir la condición  el programa debe finalizar
$cuotas =6;
//El porcentaje debe validar que el mismo sólo podrá ser: 5% - 10% -15% o 20% de no cumplir la condición debe finalizar
$porcentaje =10;
//-------------------------------------------------------------------------------------------
//Estas variables se deben calcular
$monto_cuota=0;
$monto_deuda=0;
//Array que va a almacenar las cuotas a pagar
$cuotas_pagar=[];
/*Haciendo uso del ciclo while o el for ejecute la solución de este ejercicio, se espera que se indique por pantalla los datos del cliente así como una tabla donde muestre el monto de cada  cuota en base al porcentaje indicado - Tenga pendiente las validaciones respectivas*/
echo "<br>";

switch ($dia) {
  case 1:
    $diadelasemana = "Lunes";
    break;
  case 2:
    $diadelasemana = "Martes";
    break;
  case 3:
    $diadelasemana = "Miercoles";
    break;
  case 4:
    $diadelasemana = "Jueves";
    break;
  case 5:
    $diadelasemana = "Viernes";
    break;
  case 6:
    $diadelasemana = "Sabado";
    break;
  case 7:
    $diadelasemana = "Domingo";
    break;
  default:
    echo "Debe indicar un dia del 1 al 7";
    exit;
}
echo $diadelasemana;
echo $dia;



echo"<hr>";

echo "Estimado: $nombre $apellido con DNI $dni, el dia de hoy $diadelasemana se le aprobo el credito de: $ $monto, a una tasa del $porcentaje%, usted debe cancelar un total en pesos de $$monto_deuda, a razon de: $cuotas cuotas, y el valor de cada una es de:";

// echo "Cuota Nro.1: Monto a pagar: $$monto_cuota";
