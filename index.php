<?php
require_once "./main.php";
?>

<!DOCTYPE html>
<html lang="it">
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
    <h1>Hotel</h1>
    <!-- creo il form per filtrare hotel che hanno parcheggio -->
    <form action="">inserire form</form>

    <!-- Creo la tabella per inserire i risultati -->
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
          <tr>
            <!-- sintassi ridotta per stampare (echo)  -->
            <td><?= $hotel["name"]; ?></td>
            <td><?= $hotel["description"]; ?></td>
            <td><?php 

            // aggiungo if per stampare SI e NO, anziche 1 o 0
            if ($hotel["parking"] == true) {
              echo "SI";
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
  </body>
</html>
