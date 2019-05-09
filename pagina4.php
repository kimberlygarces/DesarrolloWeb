<!Doctype<html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="HTML Y CSS" content="Desarrollo web algo de html y css">
<title>Peliculas</title>
<link rel="stylesheet" type="text/css" href="css/style4.css">
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
      <div id ="caja1A">
          <img src="img/17.jpg" class='imgRedonda'/>
        <h1>Transformers</h1>
          <p> El Lado Oscuro de la Luna </p>
      </div>
      <div id ="caja1B">
        <img src="img/18.jpeg" class='imgRedonda'/>
          <h1>Los Minions</h1>
        <p>divertidas criaturas amarillas</p></div>
      <div id ="caja1C">
        <img src="img/19.jpeg" class='imgRedonda'/>
        <h1> Los Increíbles 2</h1>
        <p>familia de superhéroes</p>
      </div>

    </div>

<div id="contenedor">
  <section>
  <div id="derecha">

<h1 align="center">Peliculas mas taquilleras</h1>
<p><i>Ganar más o menos dinero en la taquilla no
  significa que sea mejor o peor película pero sí,
  es un poderoso indicativo de que estamos ante un
  titán de hacer dinero. Películas para las grandes
  masas internacionales, ha habido siempre a lo largo
   de la historia del cine, pero solo 20, han sido las
   películas que han arrasado en la taquilla y que han
   llevado a multitud de aficionados a las salas de cine
   una y otra vez</i></p>
  </div>
  </section>


    <div id="izquierda">
        <section>
      <div id ="caja2A">
        <h1>Transformers</h1>
        <p>    Año: 2011</p>
  <p>  Presupuesto: 195.000.000 $</p>
    <p>Recaudación: 1.123.746.996 $</p>
            </div>
            <div id ="caja2B">
              <h1> Los Increíbles 2</h1>
              <p>Año: 2018</p>
              <p>Presupuesto: 200.000.000 $</p>
              <p>Recaudación: 1.242.785.241 $</p>
              </div>
                </section>

      <section>
        <div id ="caja2A">
          <h1>Capitán América</h1>
          <p>Año: 2016</p>
            <p>Presupuesto: 250.000.000 $</p>
              <p>Recaudación: 1.153.984.897 $</p>
        </div>
        <div id ="caja2B">
          <h1>Los Minions</h1>
          <p>Año: 2015</p>
          <p>Presupuesto: 74.000.000 $</p>
          <p>Recaudación: 1.159.398.397</p>
        </div>
          </section>

          <section>
            <div id ="caja2A">
              <h1>Iron Man 3</h1>
              <p>Año: 2013</p>
              <p>Presupuesto: 200.000.000</p>
              <p>Recaudación: 1.215.439.994 $</p>
            </div>
            <div id ="caja2B">
              <h1>Fast & Furious 8</h1>
              <p>Año: 2017</p>
                <p>Presupuesto: 250.000.000 $</p>
                  <p>Recaudación: 1.236.005.118 $</p>
            </div>
              </section>
          </div>

</div>


<footer>
  <div id ="pie">
  <p>Peliculas mas taquilleras en los ultimos años</p>

</footer>
</body>
</html>
