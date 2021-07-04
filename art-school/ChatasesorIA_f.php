<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asesorIA</title>
    <link rel="stylesheet" href="css/chat_style.css">
</head>

<body>
    <div class="container">
       
            <div class="chatbox">
                    <div class="header">
                        <h4> <img src='images/perfil.jpg' class='imgRedonda'/> asesorIA </h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                        <p class="alicia">Hola! soy asesorIA, Estoy para resolver preguntas relacionadas con la materia de Fracciones. Espero poder ayudarte. </p> 
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Preguntale algo" style=" font-family: cursive; font-size: 20px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" id="btn">
                                </div>
                    </form>

               <a href="index.html" class="btn" onClick="mi_alerta()" >Home</a>
            
        </div>
    </div>
    
    <button ></button>
    <script src="app.js"></script>
    
            <SCRIPT LANGUAGE="JavaScript">
        function mi_alerta () {
        alert ("Inteligencia artificial"+
               "\n"+
               "\nEquipo de asesorIA");
        }
        </SCRIPT>
        
</body>

</html>