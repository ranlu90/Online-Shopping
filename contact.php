<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link rel='stylesheet' href='https://titan.csit.rmit.edu.au/~s3583185/wp/a2/default.css' type='text/css' />
</head> 
<body>
    <header>
            <a href="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/">
                <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/logo.jpg" alt="token logo" class="logo">
            </a> 
    </header>
    <nav>
        <a href="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/" class="button">Home</a>
        <a href="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/contact.php" class="button">Contact</a>
        <a href="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/shop.php" class="button">Shop</a>
    </nav>
    <main>
        <div><h1 class="needComedian">Need a comedian?</h1></div>
        <div>
            <p1 class="fillOutForm">Fill out the form below to make a booking enquiry.</p1>
            <form class="form1" name="myForm" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" target="_blank">
                <p1 class="moveText1">First Name <a class="requiredTag">*</a></p1>
                    <input type="text" pattern="[a-zA-Z]+([ \.\-']?[a-zA-Z]*){0,2}" title="name only contain characters and some punctuations" name="firstname" value="" placeholder="First name" required/>
                <p1 class="moveText1">Last Name <a class="requiredTag">*</a></p1>
                    <input type="text" pattern="[a-zA-Z]+([ \.\-']?[a-zA-Z]*){0,2}" title="name only contain characters and some punctuations" name="lastname" value="" placeholder="Last name" required/>
                <p1 class="moveText1">Email Address <a class="requiredTag">*</a></p1>
                    <input type="email" name="email" value="" placeholder="Email Address" required/>
                <p1 class="moveText1">Phone Number <a class="requiredTag">*</a></p1>
                    <input type="text" name="phone" pattern="[0-9\+]*[ ()]*[0-9]*[ ()]*[0-9]*[-]*[0-9]+" title="phone only contain numbers and some punctuations" value="" placeholder="Phone Number" required/>
                <p1 class="moveText1">Event Date <a class="requiredTag">*</a></p1>
                    <input type="date" name="eventdate" value="" required/>
                <p1 class="moveText1">Event Time</p1>
                    <input type="time" name="eventtime" value=""/>
                <p1 class="moveText1">Date Flexibility</p1>
                    <input type="range" name="eventflexibility" min="1" max="3"/>
                <p1 class="moveText1">Event Location</p1>
                    <input type="text" name="eventlocation" pattern="[a-zA-Z0-9 ,;?()'\.\n]{1,150}" value=""/>
                <p1 class="moveText1">Event Description</p1>
                    <textarea name="eventdescription" pattern="[a-zA-Z0-9 ,;?()'\.\n]{1,1000}" cols='40' rows='9'></textarea>
                <p1>Performance Required</p1>
                    <select name="performance">
                            <option value="">Select Performance</option>
                            <option value="MC">MC</option>
                            <option value="Comedy Spot">Comedy Spot</option>
                            <option value="Full Show">Full Show</option>
                            <option value="Other">Other</option>
                    </select>
                <br>
                <p class="policy">By submitting this form, you accept the <a href="https://www.mollom.com/web-service-privacy-policy">Mollom privacy policy</a>.</p>
                <input type="submit" value="Submit" class="submit">
                <br>
            </form>
        </div>
    </main> 
</body>
<footer>
        <div>
            <a class="remove" href="https://www.facebook.com/officialjoshthomas">
                <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/facebook.png" alt="facebook" class="socialmedia" title="facebook">
            </a>
            <a class="remove" href="https://twitter.com/joshthomas87">
                <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/twitter.png" alt="twitter" class="socialmedia" title="twitter">
            </a>
            <a class="remove" href="https://itunes.apple.com/au/podcast/josh-thomas-and-friend/id292322464">
                <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/podcast.png" alt="podcast" class="socialmedia" title="podcast">
            </a>
            <a class="remove" href="https://www.instagram.com/joshthomas87/">
                <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/instagram.png" alt="instagram" class="socialmedia" title="instagram">
            </a>
            <a class="remove" href="http://joshthomas87.tumblr.com">
                <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/tumblr.png" alt="tumblr" class="socialmedia" title="tumblr">
            </a>
        </div>
        <div>
            <p3>He is available for private/corporate gigs. For all corporate and media enquiries:<br>
                Australia and Rest of World Management: Token Artists <a style="color:white" href="mailto:erin@token.com.au">erin@token.com.au</a> 
                USA Management: Avalon <a class="whiteEmail" href="mailto:davidm@avalon-usa.com">davidm@avalon-usa.com</a>
                USA Agency: <a class="whiteEmail" href="http://wmeentertainment.com">WME</a></p3>
            <p3>If you would like to post him gifts or free things you can send them here:<br>
                ATTN: Josh Thomas PO Box 108, Fitzroy, Victoria 3065</p3>
        </div><br>
        <div class="copyright">&copy; Josh Thomas 2016. Ran Lu, Zihan Yin from RMIT University - School of Computer Science and Information Technology.</div>
</footer>
</html>