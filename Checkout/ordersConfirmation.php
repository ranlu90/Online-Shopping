<?php
    session_start();
    include_once('/home/sh5/S3583185/public_html/wp/a3/modules/top.php');
    if(!preg_match('/^([\d]{4}[ ]?){3}[\d]{1,6}$/',$_POST['creditcard'])){
        header("Location: https://titan.csit.rmit.edu.au/~s3583185/wp/a3/checkout.php");
    }
    if($_POST['year'] < date("Y")){
            header("Location: https://titan.csit.rmit.edu.au/~s3583185/wp/a3/checkout.php");
    }
    if($_POST['year'] == date("Y")){
        if($_POST['month'] <= date("m")){
            header("Location: https://titan.csit.rmit.edu.au/~s3583185/wp/a3/checkout.php");
        }
    }    
    $_SESSION['finalPrice'] = number_format(($_SESSION['total'] + $_POST['delivery']),2);
?>
    <title>orders confirmation</title>
    <?php include_once('/home/sh5/S3583185/public_html/wp/a3/modules/jsCSS.php'); ?>
<body>
    <?php include_once('/home/sh5/S3583185/public_html/wp/a3/modules/headerNav.php'); ?>
    <div><h1 class="name1">Confirmation</h1></div>
    <div class="receiptPage">
        <p1 id="receipt1">Your order has been completed, here is your receipt.</p1>
        <div id="receiptText">
            <?php
                echo '<pre>First Name:      '.$_POST['firstname'].'</br>';
                echo 'Last Name:       '.$_POST['lastname'].'</br>';
                echo 'Address:         '.$_POST['address'].'</br>';
                echo 'Email:           '.$_POST['email'].'</br>';
                echo 'Phone:           '.$_POST['phone'].'</br>';
                echo 'Boxsets Price:   $'.$_SESSION['total'].'</br>';
                echo 'Media:           '.$_SESSION['media'].'</br>';
                echo 'Delivery Price:  $'.$_POST['delivery'].'</br>';
                echo 'Total Price:     $'.$_SESSION['finalPrice'];
                
                $writeString = "\n".'First Name: '.$_POST['firstname']."\n".'Last Name: '.$_POST['lastname']."\n".'Address: '.
                                $_POST['address']."\n".'Email: '.$_POST['email']."\n".'Phone: '.$_POST['phone']."\n".
                                'Boxsets Price: '.$_SESSION['total']."\n".'Media: '.$_SESSION['media']."\n".
                                'Delivery Price: '.$_POST['delivery']."\n".'Total Price: '.$_SESSION['finalPrice']."\n";
                file_put_contents('/home/sh5/S3583185/public_html/wp/a3/orders.txt',$writeString,FILE_APPEND);
                session_unset(); 
            ?>
        </div>
        <p1 id="receipt2">Thank you for shopping at TOKEN!</p1>
    </div>
    </main>
</body>
<?php include_once('/home/sh5/S3583185/public_html/wp/a3/modules/footer.php'); ?>
<?php include_once('/home/eh1/e54061/public_html/wp/debug.php'); ?>