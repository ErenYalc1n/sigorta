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
    $tc = $_GET['tc'];
    $ad = $_GET['ad'];
    $soyad = $_GET['soyad'];
    $cinsiyet = $_GET['cinsiyet'];   
    $dog = $_GET['dog'];   

    $conn = mysqli_connect("localhost", "admin", "1234", "sigortadb");
    echo "<a href='http://localhost/sigorta/index.html'> -AnaSayfa</a>";
    echo "<a href='http://localhost/sigorta/listele.php'> -Listele</a>";
   
    if (!$conn) {
        die("<br>\nBaglanti nanay efendim: " . mysqli_connect_error());
    }
    echo "<br>";
   
    $sql = "UPDATE kisi set 
            ad = '"    . $ad .   "',
            soyad = '" . $soyad ."',
            cinsiyet = '". $cinsiyet   ."',
            dog = '". $dog   ."'
            WHERE tc = " . $tc ;
            if ($conn->query($sql) === TRUE) {
                echo "KAYIT BAŞARILI";
                echo "<br>ÇALIŞAN SQL SORGUSU: $sql <br>";
            }
?>
                </tr>
            </table>
        </div>
    </body>
</html>