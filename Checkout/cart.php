<?php
    session_start();
    if(isset($_POST['plm']['s1']) || isset($_POST['plm']['s2']) || isset($_POST['plm']['s3'])){
        $_SESSION['plm']['s1'] = $_POST['plm']['s1'];
        $_SESSION['plm']['s2'] = $_POST['plm']['s2'];
        $_SESSION['plm']['s3'] = $_POST['plm']['s3'];
        $_SESSION['media'] = $_POST['media'];
    }
    $errorsFound=false;
    if (filter_var($_SESSION['plm']['s1'], FILTER_VALIDATE_INT) === false|| $_SESSION['plm']['s1'] >5 || $_SESSION['plm']['s1'] < 0 ||
        filter_var($_SESSION['plm']['s2'], FILTER_VALIDATE_INT) === false|| $_SESSION['plm']['s2'] >5 || $_SESSION['plm']['s2'] < 0 ||
        filter_var($_SESSION['plm']['s3'], FILTER_VALIDATE_INT) === false|| $_SESSION['plm']['s3'] >5 || $_SESSION['plm']['s3'] < 0 ){
        $errorsFound=true;
    }
    if($errorsFound){
        header("Location: https://titan.csit.rmit.edu.au/~s3583185/wp/a2/shop.php");
    }
    if(isset($_POST['removeS1'])){
            $_SESSION['plm']['s1'] = 0;
            $_POST['plm']['s1'] = 0;
    }
    if(isset($_POST['removeS2'])){
            $_SESSION['plm']['s2'] = 0;
            $_POST['plm']['s2'] = 0;
    }
    if(isset($_POST['removeS3'])){
            $_SESSION['plm']['s3'] = 0;
            $_POST['plm']['s3'] = 0;
    }
    include_once('/home/sh5/S3583185/public_html/wp/a3/modules/top.php'); 
?>
    <title>Cart</title>
    <?php include_once('/home/sh5/S3583185/public_html/wp/a3/modules/jsCSS.php'); ?>
<body>
    <?php include_once('/home/sh5/S3583185/public_html/wp/a3/modules/headerNav.php'); ?>
    <div><h1 class="name1">Shopping Cart</h1></div>
    <div class="square2">
        <a>You have selected to purchase:</a>
        <div class="s1Cart">
            <?php
                    $season1Price = 17.00;
                    $subtotal = $season1Price * $_SESSION['plm']['s1'];
                    $_SESSION['subtotalS1'] = number_format($subtotal,2);
                    if($_SESSION['plm']['s1'] != 0){
                        echo '<img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a3/image/cover1.jpeg" alt="cover1" id="cover1">'.'</br>';
                        echo 'Season 1'.'</br>';
                        echo 'Media: '.htmlspecialchars($_SESSION['media']).'</br>';
                        echo 'Quantity: '.htmlspecialchars($_SESSION['plm']['s1']).'</br>';
                        echo 'Price: $'.number_format($subtotal,2).'</br>';
                        echo '<form action="https://titan.csit.rmit.edu.au/~s3583185/wp/a3/cart.php" method="post"><input class="removeButton1" name="removeS1" type="submit" value="remove Season 1"/></form>';
                    }
            ?>
        </div>
        <div class="s2Cart">
            <?php
                    $season2Price = 22.50;
                    $subtotal = $season2Price * $_SESSION['plm']['s2'];
                    $_SESSION['subtotalS2'] = number_format($subtotal,2);
                    $removeButton = 'Remove Season 2';
                if($_SESSION['plm']['s2'] != 0){
                    echo '<img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a3/image/cover2.jpeg" alt="cover2" id="cover2">'.'</br>';
                    echo 'Season 2'.'</br>';
                    echo 'Media: '.htmlspecialchars($_SESSION['media']).'</br>';
                    echo 'Quantity: '.htmlspecialchars($_SESSION['plm']['s2']).'</br>';
                    echo 'Price: $'.number_format($subtotal,2).'</br>';
                    echo '<form action="https://titan.csit.rmit.edu.au/~s3583185/wp/a3/cart.php" method="post"><input class="removeButton2" name="removeS2" type="submit" value="remove Season 2"/></form>';
                }
            ?>
        </div>
        <div class="s3Cart">
            <?php
                    $season3Price = 26.75;
                    $subtotal = $season3Price * $_SESSION['plm']['s3'];
                    $_SESSION['subtotalS3'] = number_format($subtotal,2);
                    $removeButton = 'Remove Season 3';
                if($_SESSION['plm']['s3'] != 0){
                    echo '<img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a3/image/cover3.jpeg" alt="cover3" id="cover3">'.'</br>';
                    echo 'Season 3'.'</br>';
                    echo 'Media: '.htmlspecialchars($_SESSION['media']).'</br>';
                    echo 'Quantity: '.htmlspecialchars($_SESSION['plm']['s3']).'</br>';
                    echo 'Price: $'.number_format($subtotal,2).'</br>';
                    echo '<form action="https://titan.csit.rmit.edu.au/~s3583185/wp/a3/cart.php" method="post"><input class="removeButton3" name="removeS3" type="submit" value="remove Season 3"/></form>';
                }
            ?>
        </div>
        <div id="checkOut1">
        <?php
            $_SESSION['total'] = number_format(($_SESSION['subtotalS1'] + $_SESSION['subtotalS2'] + $_SESSION['subtotalS3']),2);
            echo 'The total price: $'.number_format($_SESSION['total'],2);
        ?>
        </div>
        <div id="untitled1"><a href="https://titan.csit.rmit.edu.au/~s3583185/wp/a3/checkout.php" class="submitForCart">Check Out</a></div>
    </div>
    </main>
</body>
<?php include_once('/home/sh5/S3583185/public_html/wp/a3/modules/footer.php'); ?>
<?php include_once('/home/eh1/e54061/public_html/wp/debug.php'); ?>