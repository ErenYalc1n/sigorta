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
    
    $detay = $_GET['tc'];
    $conn = mysqli_connect("localhost", "admin", "1234", "sigortadb"); 
    echo "<a href='http://localhost/sigorta/index.html'> -AnaSayfa  -</a>";
    echo "<a href='http://localhost/sigorta/listele.php'> Listele  </a>";

    if (!$conn) {
        die("<br>\nBaglanti nanay efendim: " . mysqli_connect_error());
    }
    echo "<br>\nBAĞLANTI BAŞARILI<br>";

    

    $sql = "select * from kisi where tc=". $detay;
    // "UPDATE (tc, ad, soyad, cinsiyet, dog) SET ($qtc, $qad, $qsoyad, $qcinsiyet, $qdog) where 'tc'=". $detay;
    echo "<br>ÇALIŞAN SQL SORGUSU: $sql <br>";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
?>

            <form action="son.php"<?php echo $row["tc"]; ?> method="GET">   
                <div class="mb-3 mt-3">
                    <label for="tc"></label>
                    <input type="hidden" name="tc" type="int" value=" <?php echo $row["tc"]; ?>"> 
                </div>
                <div class="mb-3">
                    <label for="ad">Adiniz: </label>
                    <input title="text1" class="form-control" type="text" name = "ad" value="<?php echo $row["ad"]; ?>"> <br>
                </div>
                <div class="mb-3">
                    <label for="soyad">Soyadiniz: </label>
                    <input title="başlik1" class="form-control" type="text" name = "soyad" value="<?php echo $row["soyad"]; ?>"> <br>
                </div>
                <div class="mb-3">
                    <label for="cinsiyet">Cinsiyet: </label>
                    <input title= "başlik2" class="form-control" type= "text" name="cinsiyet" value="<?php echo $row["cinsiyet"]; ?>"> <br>
                </div>
                <div class="mb-3">
                    <label for="dog">Doğum Tarihi: </label>
                    <input title= "başlik2" class="form-control" type= "date" name="dog" value="<?php echo $row["dog"]; ?>"> <br>           
                </div>
                    <input type="submit" class="btn btn-primary" name="kayit" value="Güncelle">               
                </div>
            </form>
        </div>
    </body>
</html>