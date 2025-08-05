<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show product</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <?php
            include 'condb.php';
            $sql = "SELECT * FROM product";
            $hand = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($hand)) {
                $price = $row['price']
            ?>
            <div class="col-md-3">
                <img src="img/<?= $row['image'] ?>" width="200" height="250" class="img-fluid"><br> <br>
                <h4 class="text-success"><?=$row['pro_name']?></h4>
                ราคา: <?= number_format($price,2)?> บาท <br>
                <a href="#" class="btn btn-primary mt-2">ซื้อสินค้า</a>
                <br><br>
            </div>
            <?php
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>