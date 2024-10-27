# Ejercicios usando php

En la carpeta [inicio](./inicio) tenemos ejercicios iniciales, tenemos un [factorial hecho con recursividad](./inicio/factorial.php) que usaremos 
en varios ejercicios.

En [arrays.php](./inicio/arrays.php) creamos una tabla dinámica en el que pedimos nombre y números para generar factoriales y 
nombre del alumno.

El ejercicio [formularios.php](./inicio/formularios.php) está enlazado a una gitpage para mostrar datos de un formulario.

El ejercicio [averiguarfactorial.php](./inicio/averiguarfactorial.php) y [solucion_factorial.php](./inicio/solucion_factorial.php) se basa en el paso de datos
por URL sin usar un action.


En la carpeta [poo](./poo) tenemos un par de ejercicios para practicar la programación orientada a objetos. 
 
En [ejercicio1](./poo/ejercicio1/) tenemos el siguiente ejercicio: 

    "Realiza un programa que permita introducir 2 números en un formulario y la operación que quieres realizar (+, -, +, /) y que muestre el resultado.
    Crea una clase con los métodos necesarios para realizar cada operación.
    El resultado se muestra desde la página principal. La operación se va a realizar usando el número mayor y el menor de los que se han introducido, 
    en lugar del número 1 y el número 2."

En [ejercicio2](./poo/ejercicio2/) tenemos este:


    "Realiza un programa que permita introducir una fecha (formato dd/mm/aa) y la muestre en formato dd/nombre_mes/año, además visualizará el número de días que tiene el mes."

Vas a usar una clase para realizarlo:

    Se creará un array (INDICE-> nº de mes; CONTENIDO de cada elemento-> nombre del mes y nº de días del mes). Cada elemento será a su vez un array.
    Usando un  método se comprobará que si el año es bisiesto, en este caso se modificará el valor 28 del array por 29 (dato correspondiente al mes de febrero, mes 2)."

En [excel](./excel) tenemos un programa que nos permite subir un excel (guardarlo y leerlo), crear un excel (descargarlo automáticamente) y por último mandar correos a los alumnos almacenados en una base de datos. 
