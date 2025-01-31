<?php
    include "../authentication/authguard.php";
    include "menu.php";
?>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../css/bg.css">
<link rel="stylesheet" type="text/css" href="../css/addprd.css">

</head>
<title>Online Fruits Shop</title>
<body>
    <div class="container">
    <div class="card">
        <form action="upload.php" method="post" class="" enctype="multipart/form-data">
            <h3 class="headt">Upload Product here</h3>
            <input class="form-control mt-3" type="text" placeholder="Product Name" name="name">
            <input class="form-control mt-2" type="number" placeholder="Product Price" name="price">
            <textarea class="form-control mt-2" name="details" placeholder="Product Description" cols="20" rows="5"></textarea>
            
            <input class="form-control mt-2" type="file" name="pdtimg" accept=".jpg,.png">
            
            <div class="mt-3 text-center">
                <button class="btn btn-success">Upload</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>