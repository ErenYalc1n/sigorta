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
                    <th>CİNSİYET</th>
                    <th>DOĞUM TARİHİ</th>         
                </tr>
            </thead>    
<?php
    $detay = $_GET['tc'];
    $conn = mysqli_connect("localhost", "admin", "1234", "sigortadb"); 
    echo "<a href='http://localhost/sigorta/index.html'> -AnaSayfa  -</a>";
    echo "<a href='http://localhost/sigorta/listele.php'> Listele  </a>";

    if (!$conn) {
        die("<br>\nBaglanti nanay efendim: " . mysqli_connect_error());
    }
    echo "<br>\nBAĞLANTI BAŞARILI<br>";

    $sql = "select * from kisi where tc=". $detay;
    echo "<br>ÇALIŞAN SQL SORGUSU: $sql <br>";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>
                <tr>
                    <th><?php echo $row["tc"]; ?></th>
                    <th><?php echo $row["ad"]; ?></th>
                    <th><?php echo $row["soyad"]; ?></th>
                    <th><?php echo $row["cinsiyet"]; ?></th>
                    <th><?php echo $row["dog"]; ?></th>
                </tr>
            </table>      
        </div>
    </body>
</html>
