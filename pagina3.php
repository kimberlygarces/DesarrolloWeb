<!Doctype<html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="HTML Y CSS" content="Desarrollo web algo de html y css">
<title>Registro de estudiantes</title>
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
      <li class="nav"><a href="pagina5.php">PAGINA 5</a></li>
      <li class="nav"><a href="pagina6.php">PAGIANA 6</a></li>
      <li class="nav"><a href="pagina7.php">PAGIANA 7</a></li>
      <li class="nav"><a href="pagina8.php">PAGINA 8</a></li>
      <li class="nav"><a href="pagina9.php">PAGIANA 9</a></li>
      <li class="nav"><a href="pagina10.php">PAGIANA 10</a></li>
    </ul>
</div>
</nav>


    <div id = "caja1">
    <h1 align="center">REGISTRO</h1>
    </div>

  <section>
  <div id="derecha">
  <h1>Colegio Santa Maria</h1>

    <div id ="caja1A">

        <p>Buscamos que nuestros estudiantes se eduquen de una manera integral, ayuden a crecimiento de la sociedad y además encuentren su vocación y al finalizar sus estudios tengan claro lo que quieren hacer para su vida.</p>
    </div>
  </div>
  </section>
  <aside>

    <div id="izquierda">
      <h1 align="center">INFORMACIÓN DEL ESTUDIATES</h1>
<table align="center">
    <form>
  <tr>
    <td>Nombre completo</td>
    <td><input type="text" name="etiqueta1"></td>

  </tr>
  <tr>
    <td>Apellidos</td>
    <td><input type="text" name="etiqueta2"></td>
  </tr>
  <td>Edad</td>
  <td><input type="text" name="etiqueta3"></td>
</tr>
<td>Sexo</td>
<td>
  <select name="sexo" size="1" >
  <option>femenino</option>
  <option>masculino</option>
  </select>
</tr>
<td>Grado cursado</td>
<td>
  <input type="number" min="0" max="11" step="1" value="6" />
</td>
</tr>
<td>
<button align="center" type="submit">REGISTRAR</button></td>
  </form>

</table>


    </div>
  </aside>

<footer>
  <div id ="pie"></h1>
<p><i>Crecimiento integral de niños y adolecentes</i></p>
</footer>
</body>
</html>
