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
<?php
    $sil = $_GET['tc'];
    $conn = mysqli_connect("localhost", "admin", "1234", "sigortadb");
    echo "<a href='http://localhost/sigorta/index.html'> -AnaSayfa  -</a>";
    echo "<a href='http://localhost/sigorta/listele.php'> Listele  </a>";
    if (!$conn) {
        die("<br>\nBaglanti nanay efendim: " . mysqli_connect_error());
    }
    echo "<br>\nBAĞLANTI BAŞARILI<br>";

    $sql = "DELETE FROM kisi where tc=". $sil;
    echo "<br> $sql <br>";
    echo "<br>";
    if ($conn->query($sql) === TRUE) {
        echo "SİLME İŞLEMİ BAŞARILI";
    }

?>
    </body>
</html>
