<html>
  <head>
      <meta charset="UTF-8">
      <title>Captura de Datos</title>
      <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body>
    <div class="dive">
      <h1>Captura de datos personales</h1><br>
      <h2>Ingresa los datos que se te piden</h2><br>
      <p>Mi primera encuenta</p><hr>
      <form action="resultados.php" method="POST">
        <label for "Name">Nombre</label>
        <input type="text" id="Name" name="Name" placeholder="Ingresa tu nombre"><hr>  

        <label for "Age">Edad</label>
        <input type="number" id="Age" name="Age" placeholder="Ingresa tu edad"><hr>
 
        <label for "City">Ciudad</label>
        <input type="text" id="City" name="Ciudad" placeholder="Ingresa tu ciudad"><hr>

        <label for "Birthday">Fecha de Nacimiento</label>
        <input type="date" id="Birthday" name="Birthday" placeholder="Ingresa tu fecha de nacimiento"><hr>
 
        <label for "Hobby">Pasatiempo Favorito</label>
        <input type="text" id="Hobby" name="Hobby" placeholder="Ingresa tu pasatiempo favorito"><hr>
        <button type="submit">¡Ingresamos Datos!</button>
      </form>
    </div>
     
  </body>
      
</html>