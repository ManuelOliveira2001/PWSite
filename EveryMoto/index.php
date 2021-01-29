<html>
  <link rel="stylesheet" href="css.css">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EveryMoto</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  </head>
  <body>
<div class="container">
  <div class="navbar">
  <img src="images/logo.png" class="logo" onclick="window.location.href='index.php'">
    <nav>
      <ul>
          <li><a href="index.php" >INICIO</a></li>
            <li><a href="dashboard.php">UTILIZADOR</a></li>
              <li><a href="faq.php">SOBRE</a></li>
              </ul>
            </nav>

  </div>
  <div class="row">
    <div class="col">
      <h1>EveryMoto</h1>
      <p>Motas de Cross, Enduro e Dual Sport das principais marcas.</p>
      <button type="button" onclick="window.location.href='/EveryMoto/comparar.php'">2 Tempos VS 4 Tempos</button>
    </div>

          <div class="col">

          <div class="card card1" onclick="window.location.href='motas/kawasaki.php'">
          <h5>Kawasaki</h5>
          <p>Ver Modelos</p>
          </div>

           <div class="card card2" onclick="window.location.href='motas/honda.php'" >
           <h5>Honda</h5>
           <p>Ver Modelos</p>
           </div>

         <div class="card card3" onclick="window.location.href='motas/yamaha.php'">
          <h5>Yamaha</h5>
          <p>Ver Modelos</p>
        
         </div>

         <div class="card card4" onclick="window.location.href='motas/suzuki.php'">
          <h5>Suzuki</h5>
          <p>Ver Modelos</p>
        
         </div>

         <div class="card card5" onclick="window.location.href='motas/ktm.php'">
          <h5>KTM</h5>
          <p>Ver Modelos</p>     
         </div>

         <div class="card card6" onclick="window.location.href='motas/husqvarna.php'">
          <h5>HUSQVARNA</h5>
          <p>Ver Modelos</p>
         </div>
      </div>
  </div>
</div>
  </body>
</html>
