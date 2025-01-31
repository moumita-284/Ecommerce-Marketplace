<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>
    </title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
</head>
<style>
    .btn2{
        font-weight: bold;
    }
</style>
<body>

    <div id="header">
        <img class="img" src="../header/img/fruit logo.jpeg">
        <label><h3>Online Fruits Shop</h3></label>
                <label class="abcd">
                    
                    Welcome:&nbsp;&nbsp;
                    <?php 
                        echo $_SESSION['username'];
                        echo '('.$_SESSION['usertype'].')';
                    ?>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="../shared/logout.php"><button class="btn2 btn btn-danger">Logout</button></a>
                </label>
            
    </div>
</body>
</html>