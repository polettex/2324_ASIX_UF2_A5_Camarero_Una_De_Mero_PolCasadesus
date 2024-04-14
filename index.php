<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carta Restaurante</title>
  <link rel="icon" href="./img/icon.png">
  
  <!-- Link a Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <!-- Link a CSS -->
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary navegador">
    <div class="container-fluid">
      <a class="navbar-brand" href="#inicio">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#Entrantes">Entrantes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Ensaladas">Ensaladas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Pescados">Pescados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Carnes">Carnes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Postres">Postres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Bebidas">Bebidas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenido de la carta -->
  <div class="menu" id="inicio">
    <?php
      $menu = simplexml_load_file('xml/carta.xml');
      foreach ($menu->categoria as $categoria) {
        echo '<div class="categoria" id="' . $categoria['name'] . '">';
        echo '<h2 class="categoria-title">' . $categoria['name'] . '</h2>';
        echo '<ul>';
        foreach ($categoria->plato as $plato) {
          echo '<li class="plato">';
          echo '<div class="union">';
          echo '<div class="plato-nombre">' . $plato['nombre'] . '</div>';
          echo '<div class="plato-price">' . $plato['precio'] . '</div>';
          echo '</div>';
          echo '<div class="plato-icon">';
          if(isset($plato->caracteristicas->item['tipo1']) && $plato->caracteristicas->item['tipo1'] == 'mostaza'){
            echo '<div class="plato-icono" title="Contiene mostaza"><img src="img/mostaza.png" alt="Mostaza"></div>';
          }
          if(isset($plato->caracteristicas->item['tipo2']) && $plato->caracteristicas->item['tipo2'] == 'huevo'){
            echo '<div class="plato-icono" title="Contiene huevo"><img src="img/huevo.png" alt="Huevo"></div>';
          }
          if(isset($plato->caracteristicas->item['tipo3']) && $plato->caracteristicas->item['tipo3'] == 'pescado'){
            echo '<div class="plato-icono" title="Contiene pescado"><img src="img/pescado.png" alt="Pescado"></div>';
          }
          if(isset($plato->caracteristicas->item['tipo4']) && $plato->caracteristicas->item['tipo4'] == 'soja'){
            echo '<div class="plato-icono" title="Contiene soja"><img src="img/soja.png" alt="soja"></div>';
          }
          if(isset($plato->caracteristicas->item['tipo5']) && $plato->caracteristicas->item['tipo5'] == 'avellana'){
            echo '<div class="plato-icono" title="Contiene frutos secos"><img src="img/frutos-secos.png" alt="Frutos secos"></div>';
          }
          if(isset($plato->caracteristicas->item['tipo6']) && $plato->caracteristicas->item['tipo6'] == 'leche'){
            echo '<div class="plato-icono" title="Contiene lactosa"><img src="img/lacteos.png" alt="Lacteos"></div>';
          }
          if(isset($plato->caracteristicas->item['tipo7']) && $plato->caracteristicas->item['tipo7'] == 'marisco'){
            echo '<div class="plato-icono" title="Contiene mariscos"><img src="img/mariscos.png" alt="Mariscos"></div>';
          }
          if(isset($plato->caracteristicas->item['tipo8']) && $plato->caracteristicas->item['tipo8'] == 'gluten'){
            echo '<div class="plato-icono" title="Contiene gluten"><img src="img/cereales-gluten.png" alt="Gluten"></div>';
          }
          if(isset($plato->caracteristicas->item['tipo9']) && $plato->caracteristicas->item['tipo9'] == 'vegetal'){
            echo '<div class="plato-icono" title="Contiene vegetales"><img src="img/apio.png" alt="Apio"></div>';
          }
          if(isset($plato->caracteristicas->item['tipo10']) && $plato->caracteristicas->item['tipo10'] == 'molusco'){
            echo '<div class="plato-icono" title="Contiene moluscos"><img src="img/moluscos.png" alt="Moluscos"></div>';
          }
          echo '</div>';
          echo '<ul class="plato-ingrediente">';
          foreach ($plato->ingrediente as $ingrediente) {
            echo '<li>' . $ingrediente['nombre'] . '</li>';
          }
          echo '</ul>';
          echo '</li>';

        }
        echo '</ul>';
        echo '</div>';
      }
    ?>

    <!-- Tabla alérgenos -->
    <div class="alergenos">
    <table> 
        <tr>
          <td><img src="./img/mostaza.png" alt="mostaza"></td>
          <td><img src="./img/huevo.png" alt="huevo"></td>
          <td><img src="./img/pescado.png" alt="pescado"></td>
          <td><img src="./img/soja.png" alt="soja"></td>
          <td><img src="./img/frutos-secos.png" alt="frutos secos"></td> 
        </tr> 
        <tr>
          <td>MOSTAZA</td>
          <td>HUEVO</td>
          <td>PESCADO</td>
          <td>SOJA</td> 
          <td>FRUTOS SECOS</td> 
        </tr>
        <tr>
          <td><img src="./img/lacteos.png" alt="lacteos"></td>
          <td><img src="./img/mariscos.png" alt="mariscos"></td>
          <td><img src="./img/cereales-gluten.png" alt="gluten"></td>
          <td><img src="./img/apio.png" alt="vegetales"></td>
          <td><img src="./img/moluscos.png" alt="moluscos"></td> 
        </tr> 
        <tr>
          <td>LACTEOS</td>
          <td>MARISCOS</td>
          <td>GLUTEN</td>
          <td>VEGETALES</td> 
          <td>MOLUSCOS</td> 
        </tr>
  </table>
</div>

  </div>
 
  <!-- Scripts -->
  <!-- Link a Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQVVBQB8mY4WxG6Km9S5TBq/EqYMH2mcD5h0/WIQAXWr0OdKKhLc7ByhIdZYOOhR" crossorigin="anonymous"></script>
</body>
</html>
