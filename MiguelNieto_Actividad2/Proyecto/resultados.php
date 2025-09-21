<html>
  <head>
      <meta charset="UTF-8">
      <title>¡Resultados de datos!</title>
      <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body>
     <div class="dive2">
        <h1>Resultados</h1>
        <center>
            <img src="IMG/imagen.jpg" alt="Imagen" width="300px" height="200px">
        </center>
        <h2>¡Bien Hecho!</h2>  
        <?php
            $name = $_POST['Name'];
            $age = $_POST['Age'];
            $city = $_POST['Ciudad'];
            $birthday = $_POST['Birthday'];
            $hobby = $_POST['Hobby'];
            echo "Nombre: " . $name . "<br>";
            echo "Edad: " . $age . "<br>";
            echo "Ciudad: " . $city . "<br>";
            echo "Fecha Nacimiento: " . $birthday . "<br>";
            echo "Pasatiempo Favorito: " . $hobby . "<br>";
        ?>
        <div id="popUpOverlay"></div>
            <div id="popUpBox">
                <div id="box">
                    <i class="fas fa-question-circle fa-5x"></i>
                        <h1>¿Volver a ingresar datos?</h1>
                    <div id=closeModal></div>
                </div>
            </div>
            <button onclick="Alert.render('You look very Pretty today.')" class="btn">¡Volver a Ingresar!</button>
            <script src="JS/app.js"></script>
        </div>
    </div>     
    </body> 
</html>