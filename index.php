<?php
require_once "./main.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CDN bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>PHP Hotel</title>
  </head>

  <body>
    <h1 class="text-center">Hotels</h1>

    <!-- creo il form per filtrare hotel che hanno parcheggio -->
    <section class="container pb-4">
      <form action="./index.php" method="GET">
        <!-- fondamentale aggiungere name altrimenti php "non lo trova" -->
        <div class="mb-3">
          <input class="form-check-input" type="checkbox" name="check-parking" id="check-parking"
          <?php echo $filter_parking ? "checked" : "" ?>>
          <label class="form-check-label" for="check-parking">Filtra hotels con parcheggio</label>
          <button class="btn btn-primary">Filtra</button>
        </div>
      </form>
    </section>

    <!-- Creo la tabella per inserire i risultati -->
    <section class="container">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Parking</th>
          <th>Vote</th>
          <th>Distance to center</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($hotels as $hotel): ?>

          <!-- creo un if per stampare in base alla scelta -->
          <!-- commento il mio if <?php 
          if ($_GET["filter-select"] == true) {
            echo "ok parcheggio";
          } else {
            echo "NO parcheggio";
          }
          ?> devo trovare il modo per farlo funzionare-->

          <tr>
            <!-- sintassi ridotta per stampare (echo)  -->
            <td><?= $hotel["name"]; ?></td>
            <td><?= $hotel["description"]; ?></td>
            <td><?php 

            // aggiungo if per stampare YES e NO, anziche 1 o 0
            if ($hotel["parking"] == true) {
              echo "YES";
            } else {
              echo "NO";
            }
            ?></td>

            <td><?= $hotel["vote"]; ?></td>
            <td><?= $hotel["distance_to_center"]; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </section>
  </body>
</html>
