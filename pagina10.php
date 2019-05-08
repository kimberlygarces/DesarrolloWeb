<!Doctype<html>
<html>
<head>
<meta charset="utf-8"/>
<title>Formulario</title>
<link rel="stylesheet" type="text/css" href="css/style10.css">
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

        <form>
        <table class="d">
          <h1 align="center">REGISTRO CANINO</h1>

      <tr>
        <td> fecha de ingreso</td>
        <td>
        <input type="date" />
        </td>
        </tr>
        <td> hora de ingreso</td>
        <td>
        <input type="time" min="11:30" max="23:30" step="600" />
        </td>
        </tr>
        <td> Nombre del dueño</td>
        <td>
          <input type="text" placeholder="Dueño">
        </td>
      </tr>
      <td> Nombre del canino</td>
      <td>
        <input type="text" placeholder="Canino">
      </td>
    </tr>
  <td> sexo</td>
  <td>
    <select name="sexo" size="1" >
    <option>femenino</option>
    <option>masculino</option>
    </select>
  </td>
</tr>
<td> Cantidad de ingresos</td>
<td>
  <input type="number" min="0" max="100" step="1" value="50" />
</td>
</tr>
<td> Tipo de cosulta</td>
<td>
  <input type="radio" name="consulta" value="1">Especializada
<input type="radio" name="consulta" value="2">Control
</td>
</tr>
<td>Desea realizar limpieza</td>
<td>
  <input type="checkbox"><label>Acepta </label>

</td>
</tr>

<td>Ingresar clave de usuario</td>
<td>
  <input type="password" placeholder="Contraseña">
</td>
</tr>

    </table>
    <br>
    <div id="caja">
  <button type="button">Iniciar sesion</button>
</div>
</from>
<footer>
<div ="pie">
  <h1>Kim</kim>
  </div>
  </footer>
</body>
</html>
