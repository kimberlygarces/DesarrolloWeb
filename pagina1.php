<!Doctype<html>
<html>
<head>
<meta charset="utf-8"/>
<title>Título de la página</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:  #2e86c1;
}

.nav a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  float: left;
}

.P a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  float: right;
}

.nav a:hover{
  background-color: #68BDF5;
}

.P a:hover{
  background-color: #68BDF5;
}

</style>

</head>

<body>
  <header>
    <div id ="cabecera" align="center"><h1>Desarrollo web</h1>
      <a>Taller HTML y CSS<a>
    </div>
  </header>

<nav>
  <div>
    <ul>
      <li class="nav"><a href="index.php">PRINCIPAL</a></li>
      <li class="nav"><a href="pagina1.php">PAGINA 1</a></li>
      <li class="nav"><a href="pagina2.php">PAGINA 2</a></li>
      <li class="nav"><a href="pagina3.php">PAGIANA 3</a></li>
        <li class="nav"><a href="pagina4.php">PAGIANA 4</a></li>
        <li class="nav"><a href="pagina5.php">PAGINA 5</a></li>
        <li class="nav"><a href="pagina6.php">PAGIANA 6</a></li>
          <li class="nav"><a href="pagina7.php">PAGIANA 7</a></li>
    </ul>
</div>
</nav>


  <section>
  <div id="derecha">
    <div id ="caja1b">
        <h1 align="center">Beneficios de salud</h1>
        <p>Disminuyen el sentimiento de soledad: su presencia constante hace que las personas se sientan más confiadas, seguras y protegidas.</p>
        <p>Incrementan la autoestima: los cuidados y atenciones que demandan las mascotas reducen los tiempos de ocio, hacen que la persona se sienta útil y generan una estrecha relación entre humano y animal.</p>
        <p></p>
    </div>
    <div id ="caja2b">
      <img align="center" src="img/3.jpg"  width="400" height="350"/>
    </div>
  </div>
  </section>
  <aside>

    <div id="izquierda">
      <h1 align="center">ANIMALES DOMESTICOS</h1>
      <div id ="caja1I">
        <img align="left" src="img/1.jpg"  width="150" height="150"/>
        <h1 align="center">PERRO</h1>
        <p align="center">Tener perro es bueno para el corazón </p>
      </div>
      <div id ="caja2I">
        <img align="left" src="img/2.jpeg"  width="150" height="150"/>
        <h1 align="center">GATO</h1>
        <p align="center">Los gatos tienen más memoria a largo plazo que los perros, sobre todo cuando aprenden algo haciéndolo.</p>


      </div>
      <div id ="caja3I">
        <img align="left" src="img/2.jpg"  width="150" height="150"/>
        <h1 align="center">CANARIO</h1>
        <p align="center">Los canarios en particular son unas pequeñas aves que suelen ser una de las mascotas preferidas de muchas personas tanto por la facilidad que tienen para mantenerlas, como también por el canto y los preciosos sonidos que emiten. </p>

      </div>
    </div>
  </aside>

<footer>
  <div id ="pie"></h1>
    <div id ="caja3">  <img align="left" src="img/1.jpg"  width="200" height="150"/></div>
    <div id ="caja4">  <img align="left" src="img/2.jpg"  width="200" height="150"/></div>
    <div id ="caja5">  <img align="left" src="img/2.jpeg"  width="200" height="150"/></div>
    <div id ="caja6">  <img align="left" src="img/3.jpg"  width="200" height="150"/></div>
  </div>
</footer>
</body>
</html>
