<?php
    session_start();
    include_once('/home/sh5/S3583185/public_html/wp/a3/modules/top.php'); 
?>
    <title>checkout</title>
    <?php include_once('/home/sh5/S3583185/public_html/wp/a3/modules/jsCSS.php'); ?>
<body onload="autoFill();">
    <?php include_once('/home/sh5/S3583185/public_html/wp/a3/modules/headerNav.php'); ?>
    <div><h1 class="needComedian">Checkout</h1></div>
    <p1 class="fillOutForm">Fill out the form below for checkout.</p1>
    <form class="form1" name="myCheckout" action="https://titan.csit.rmit.edu.au/~s3583185/wp/a3/ordersConfirmation.php" onsubmit="return validateTime();" method="post">
        <p1 class="moveText1">First Name <a class="requiredTag">*</a></p1>
            <input pattern="[a-zA-Z]+([ \.\-']?[a-zA-Z]*){0,2}" title="name only contain characters and some punctuations" id="firstname" type="text" name="firstname" value="" placeholder="First Name" required/>
        <p1 class="moveText1">Last Name <a class="requiredTag">*</a></p1>
            <input pattern="[a-zA-Z]+([ \.\-']?[a-zA-Z]*){0,2}" title="name only contain characters and some punctuations" id="lastname" type="text" name="lastname" value="" placeholder="Last Name" required/>
        <p1 class="moveText1">Address <a class="requiredTag">*</a></p1>
            <input pattern="[\w ,;?()'\.\n]{1,150}" title="address is invalid" id="address" type="text" name="address" value="" placeholder="Address" required/>
        <p1 class="moveText1">Email Address <a class="requiredTag">*</a></p1>
            <input pattern="([\w\._\-]+)@((?:[\w]+\.)+)([a-zA-Z]{2,4})" title="email address must follow the pattern of \w@\w.a-zA-Z" id="email" type="email" name="email" value="" placeholder="Email Address" required/>
        <p1 class="moveText1">Phone Number <a class="requiredTag">*</a></p1>
            <input pattern="[\d\+]*[ ()]*[\d]*[ ()]*[\d]*[-]*[\d]+" title="phone contains only digits and some punctuations" id="phone" type="text" name="phone" value="" placeholder="Phone Number" required/>
        <p1 class="moveText1">Credit Card <a class="requiredTag">*</a></p1>
            <input pattern="([\d]{4}[ ]?){3}[\d]{1,6}" title="credit card contains only digits and spaces" id="creditcard" type="text" name="creditcard" value="" placeholder="Credit Card" required/>
        <p1 class="moveText2">Credit Expiry <a class="requiredTag">*</a></p1>
            <select class="moveText3" name="month" id="month" required>
                    <option value="">- Month -</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">Novermber</option>
                    <option value="12">December</option>
            </select>
            <select class="moveText4" name="year" id="year" required>
                    <option value="">- Year -</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
            </select>
        <p1 class="moveText2">Delivery Method <a class="requiredTag">*</a></p1>
            <select name="delivery" id="delivery" required>
                <option value="">Select Delivery Method</option>
                <option value="0.00">Regular delivery free</option>
                <option value="7.00">Regular Courier $7.00</option>
                <option value="10.50">Express Courier $10.50</option>
            </select>
        <p1 class="moveText666">Please remember me</p1>
            <select name="remember" id="remember" onchange="manageStorage();">
                <option value="">Select Option</option>
                <option value="1">Please remember me</option>
                <option value="0">Forget me</option>
            </select>        
        <input type="submit" value="Submit" class="submit"><br>
    </form>
    </main>
</body>
<?php include_once('/home/sh5/S3583185/public_html/wp/a3/modules/footer.php'); ?>
<?php include_once('/home/eh1/e54061/public_html/wp/debug.php'); ?>