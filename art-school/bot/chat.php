<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //que es ecuacion
    "que es una ecuacion?" => "Igualdad que contiene una o más incógnitas",
    "ecuacion?" => "Los coronavirus son una extensa familia de virus que pueden causar enfermedades tanto en animales como en humanos.",
     //partes de ecuacion
    "partes de una ecuacion?" =>"<img src=images/p_ecuacion.jpg> 
    <br>\n Tiene: 
    <br>\n primer miembro (2X - 1)
    <br>\n segundo  miembro (6+X)
    <br>\n Terminos(2X)(-1)(6)(+X)
    <br>\n incognita (X)
    <br>\n coeficientes (2)
    <br>\n constantes  (-1)(6)",
    "tipos de ecuacion?" =>"<img src=images/tipos_e.png> 
    <br>\n Tiene: 
    <br>\n Lineales: es una igualdad que involucra una o más variables a la primera potencia y no contiene productos entre las variables
    <br>\n Cuadráticas: Son ecuaciones de segundo grado aquellas en las que la incógnita aparece al menos una vez elevada al cuadrado (x2 )
    <br>\n Cúbicas: Es la ecuación que resulta de igualar a cero la función cúbica(x3 )
    <br>\n Diofánticas :  de dos o más incógnitas, cuyos coeficientes recorren el conjunto de los números enteros, de las que se buscan soluciones enteras o naturales, esto es, que pertenezcan al conjunto de los números enteros
    <br>\n Racionales: Es aquella ecuación que consta de una división de dos ecuaciones algebraicas",
    

           
    //Ejemplo 1 ecuaciones

    "problema1" => "<img src=images/e_problema1.png>ENCUENTRA EL VALOR DE LA INCOGNITA:     7𝑥+3=17",
    "respuesta1"=>"<img src=images/e_resp1.png>
    <br>Paso uno pasar constantes 7𝑥=17−3
    <br>\n Paso dos pasar  coeficientes 𝑥=14/7
    <br>\n Paso tres resolver operación 𝑥=2",
    
    //Ejemplo2

    "problema2" => "<img src=images/e_problema2.png> ENCUENTRA EL VALOR DE LA INCOGNITA:     𝑥/3+4𝑥=5    ",
    "respuesta2"=>"<img src=images/e_resp2.png>
    Paso uno pasar constantes 𝑥/3=5-4
    <br>\n Paso dos pasar  coeficientes 𝑥=1*3
    <br>\n Paso tres resolver operación 𝑥=3",
   
    
    //Ejemplo3


    "problema3" => "<img src=images/e_problema3.png>ENCUENTRA EL VALOR DE LA INCOGNITA:     𝑥/3+4𝑥=5    ",
    "respuesta3"=>"<img src=images/e_resp3.png>
    Paso uno factorizar  𝑥(1/3+4)=5

    <br>\n Paso dos pasar  coeficientes 𝑥=5/4.33
    <br>\n Paso tres resolver operación 𝑥=1.15",
    

    //Pitagoras
    
    "Quien es pitagoras?" => "<img src=images/pitagoras.jpg>
    <br>Fue un filósofo y matemático griego considerado el primer matemático puro. Contribuyó de manera significativa en el avance de la matemática helénica, la geometría y la aritmética ",
    "pitagoras" => "<img src=images/pitagoras.jpg>
    <br>Fue un filósofo y matemático griego considerado el primer matemático puro. Contribuyó de manera significativa en el avance de la matemática helénica, la geometría y la aritmética ",
    "segundo grado?" => "<img src=images/ecuacion_cuadratica.png>
    <br>La forma general es: <b>ax^2 +bx+c=0</b> ",

    "ecuacion de segundo grado?" =>  "<img src=images/ecuacion_cuadratica.png>
    <br>La forma general es: <b>ax^2 +bx+c=0</b>",
    
    "segundo grado" =>  "<img src=images/ecuacion_cuadratica.png>
    <br>La forma general es: <b>ax^2 +bx+c=0</b> ",
    
    "formula" =>  "<img src=images/p_formula.png> ",

//Ejemplo 1 pitagoras

    "problema1_p" => "<img src=images/p_problema1.png>ENCUENTRA EL VALOR DE LA INCOGNITA:     7𝑥+3=17",
    "respuesta1_p"=>"<img src=images/p_resp1.png>
    <br>Paso uno pasar constantes 7𝑥=17−3
    <br>\n Paso dos pasar  coeficientes 𝑥=14/7
    <br>\n Paso tres resolver operación 𝑥=2",
    
    //Ejemplo2

    "problema2_p" => "<img src=images/p_problema2.png> ENCUENTRA EL VALOR DE LA INCOGNITA:     𝑥/3+4𝑥=5    ",
    "respuesta2_p"=>"<img src=images/p_resp2.png>
    Paso uno pasar constantes 𝑥/3=5-4
    <br>\n Paso dos pasar  coeficientes 𝑥=1*3
    <br>\n Paso tres resolver operación 𝑥=3",
   
    



    //FRACCIONES
    //que es ecuacion
    "que es una fraccion?" => "División de algo en partes iguales",
    "fraccion" => "División de algo en partes iguales",
     //partes de una fraccion
     "partes de una fraccion?" =>"<img src=images/p_ecuacion.jpg> 
    <br>\n Tiene: 
    <br>\n primer miembro (2X - 1)
    <br>\n segundo  miembro (6+X)
    <br>\n Terminos(2X)(-1)(6)(+X)
    <br>\n incognita (X)
    <br>\n coeficientes (2)
    <br>\n constantes  (-1)(6)",
    "tipos de fraccion?" =>"<img src=images/tipos_e.png> 
    <br>\n Tiene: 
    <br>\n <b>Fracción propia</b>
    <br>\n El numerador es menor al denominador.
    <br>\n <b>Fracción impropia</b>
    <br>\n El numerador es mayor o igual que el denominador.
    <br>\n <b>Fracción mixta</b>
    <br>\n Es constituida por un número entero y una fracción propia juntos. 
    <br>\n <b>Fracción equivalente</b>
    <br>\n Cuando dos fracciones tienen el mismo valor decimal. En otras palabras, se multiplica o divide el numerador y denominador por el mismo número y la fracción mantiene su valor. 
    ",
//Ejemplo 1 fracciones

"problema1_f" => "<img src=images/p_problema1.png>ENCUENTRA EL VALOR DE LA INCOGNITA:     7𝑥+3=17",
"respuesta1_f"=>"<img src=images/p_resp1_parte1.png>
<br><img src=images/p_resp1_parte2.png>
<br><img src=images/p_resp1_parte3.png>",

//Ejemplo2

"problema2_p" => "<img src=images/f_problema2.png> ENCUENTRA EL VALOR DE LA INCOGNITA:     𝑥/3+4𝑥=5    ",
"respuesta2_p"=>"<img src=images/f_resp2.png>
Paso uno pasar constantes 𝑥/3=5-4
<br>\n Paso dos pasar  coeficientes 𝑥=1*3
<br>\n Paso tres resolver operación 𝑥=3",
    //name
    "como te llamas?" =>"Soy asesorIA y estoy para servirte",
    "cual es tu nombre?" =>"Soy asesorIA y estoy para servirte",
    "tienes nombre?" =>"Soy asesorIA y estoy para servirte",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    
//help
"help" => "que es una ecuacion?
<br>partes de una ecuacion?
<br>problema1
<br>problema2
<br>problema3
<br>respuesta1
<br>respuesta2
<br>respuesta3
<br>adios
<br>hola",

    "tu nombre es?" => "Mi nombre es " .$bot->getName(),
    "tu eres?" => "Yo soy una " .$bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas con coronavirus.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
