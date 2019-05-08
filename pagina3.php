<!Doctype<html>
<html>
<head>
<meta charset="utf-8"/>
<title>Título de la página</title>
<link rel="stylesheet" type="text/css" href="css/style3.css">
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
      <li class="P"><a href="index.php">PRINCIPAL</a></li>
      <li class="nav"><a href="pagina1.php">PAGINA 1</a></li>
      <li class="nav"><a href="pagina2.php">PAGINA 2</a></li>
      <li class="nav"><a href="pagina3.php">PAGIANA 3</a></li>
        <li class="nav"><a href="pagina4.php">PAGIANA 4</a></li>
    </ul>
</div>
</nav>


    <div id = "caja1">
    <h1 align="center">ANIMALES SALVAJES</h1>
    </div>

  <section>
  <div id="derecha">

    <div id ="caja1A">
        <h1>TEXTO</h1>
        <p>contenido</p>
    </div>
  </div>
  </section>
  <aside>
    <div id="izquierda">
      <h1>FORMULARIO</h1>


<table>
    <form>
  <tr>
    <td>Etiqueta 1</td>
    <td><input type="text" name="etiqueta1"></td>

  </tr>
  <tr>
    <td>Etiqueta 2</td>
    <td><input type="text" name="etiqueta2"></td>
  </tr>
  <tr>
    <td>Etiqueta 3</td>
    <td><input type="text" name="etiqueta3"></td>
  </tr>
<td>  <button type="submit">REDISTRAR</button></td>
  </form>

</table>


    </div>
  </aside>

<footer>
  <div id ="pie"></h1>
FOOTER
</footer>
</body>
</html>
