<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container mt-3">       
      <table class="table table-striped">
        <thead>
          <tr class="w3-red">
            <th>TC NO</th>
            <th>ADINIZ</th>
            <th>SOYADINIZ</th>
            <th>DETAYLAR:</th>
            <th>GUNCELLE:</th>
            <th>SIL:</th>
          </tr>
        </thead>    
<?php
$conn = mysqli_connect("localhost", "admin", "1234", "sigortadb");
echo "<a href='http://localhost/sigorta/index.html'.'  '> -AnaSayfa</a>";
if (!$conn) {
    die("<br>\nBaglanti nanay efendim: " . mysqli_connect_error());
}
$sql = "select * from kisi";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
?>
        <tbody>
          <tr>
            <td><?php echo $row["tc"] ?></td>
            <td><?php echo $row["ad"] ?></td>
            <td><?php echo $row["soyad"] ?></td>
            <td><?php echo "<a href='http://localhost/sigorta/detay.php?tc=" . $row["tc"] . "'>" . " DETAY  </a>"; ?></td>
            <td><?php echo "<a href='http://localhost/sigorta/duzenle.php?tc=" . $row["tc"] . "'>" . " GUNCELLE  </a>"; ?></td>
            <td><?php echo "<a href='http://localhost/sigorta/sil.php?tc=" . $row["tc"] . "'>" . " SIL  </a>"; ?></td>
          </tr>
        </tbody>  
      </div>
    </body>
  <?php
}
?>
</table>
</html>