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
    $xtc = $_GET['tc'];
    $xad = $_GET['ad'];
    $xsoyad = $_GET['soyad'];
    $xcinsiyet = $_GET['cinsiyet'];
    $xdog = $_GET['dog'];
    $conn = mysqli_connect("localhost", "admin", "1234", "sigortadb");
?>
                <tr>
                    <td><?php echo "<a href='http://localhost/sigorta/index.html'> -AnaSayfa</a>"; ?> 
                    <?php echo "<a href='http://localhost/sigorta/listele.php'> -Listele</a>"; ?></td>
   
                </tr>
                <tr>
                    <td><?php echo "<br>TC No: " . $xtc . "<br>"; ?></td>
                    <td><?php echo "<br>Adiniz: " . $xad . "<br>"; ?></td>
                    <td><?php echo "<br>Soyadiniz: " . $xsoyad . "<br>"; ?></td>
                    <td><?php echo "<br>Cinsiyet: " . $xcinsiyet . "<br>"; ?></td>
                    <td><?php echo "Doğum Tarihi: " . $xdog . "<br>"; ?></td>
                </tr>
<?php
    if (!$conn) {
        die("<br>\nBaglanti yok: " . mysqli_connect_error());
    }
    echo "<br>\nBAĞLANTI BAŞARILI";
    echo "<br>";

    $sql = "INSERT INTO kisi (tc, ad, soyad, cinsiyet, dog) 
    values ($xtc, '$xad', '$xsoyad', '$xcinsiyet', str_to_date('$xdog', '%Y-%c-%d'))" ;

    if ($conn->query($sql) === TRUE) {
        echo "KAYIT BAŞARILI";
    }
    else{
        echo "trafoya kedi girdi!";
    }
?>
            </tbody>  
        </div>
    </body>
</html>

