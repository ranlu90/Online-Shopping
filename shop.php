<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Shop</title>
<script type="text/javascript" src="https://titan.csit.rmit.edu.au/~s3583185/wp/a3/javascript.js"></script>
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
        <a id="socialmedia1">Connect to Please Like Me on:</a><br>
        <a class="remove" href="https://www.facebook.com/pleaselikemeABC2">
            <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/facebook.png" alt="facebook" class="socialmedia" title="facebook">
        </a>
        <a class="remove" href="https://twitter.com/Please_like_me">
            <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/twitter1.png" alt="twitter" class="socialmedia" title="twitter">
        </a>
        <a class="remove" href="https://www.instagram.com/pleaselikeme_/">
            <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/instagram1.jpg" alt="instagram" class="socialmedia" title="instagram">
        </a>
    <div class="square">
        <a class="season">Season 1</a>
        <details class="description123">
            <summary>With his 21st birthday just around the corner, life finally seems to be coming together for Josh (Josh Thomas). <a class="expansionTag">more details</a></summary><br>
            <p>He's sharing a house with his best (and only) friend, Tom (Tom Ward), his dog, John, and Tom's rabbit, Shaniqua, 
            and he's doing adult things like cooking roast chickens and eating asparagus. But the events of one day throw his world into chaos. 
            He's dumped by his girlfriend, Claire (Caitlin Stasey), and introduced to a decidedly odd but very attractive man, Geoffrey (Wade Briggs). 
            And when his divorced mum, Rose (Debra Lawrance), overdoses on pain killers, 
            Josh is forced to move back into the family home to keep an eye on her. If that's not enough, he has to deal with 
            his dad Alan's (David Roberts) guilt over his ex-wife and clumsy attempts to hide his new, younger girlfriend, Mae (Renee Lim). 
            It's all a bit more than Josh had planned for - which was just to plate up a tasty dinner.</p>
        </details>
        <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/background1.jpg" alt="josh thomas" class="background">
        <div>
            <a class="season1">Australia</a><br>
            <a class="purchaseButton1" href="https://itunes.apple.com/au/tv-season/please-like-me-season-1/id616877503?showLC=true">iTunes</a>
            <a class="purchaseButton1" href="https://play.google.com/store/tv/show/Please_Like_Me?id=RtnabrwLBEs">Google Play</a>
        </div>
        <div>
            <a class="season1">USA</a><br>
            <a class="purchaseButton1" href="https://itunes.apple.com/us/tv-season/please-like-me-season-1/id671267950">iTunes</a>
            <a class="purchaseButton1" href="https://www.amazon.com/Rhubarb-and-Custard/dp/B00G5Z4VMM/ref=sr_1_1?s=instant-video&ie=UTF8&qid=1444384957&sr=1-1&keywords=please+like+me">Amazon Video</a>
            <a class="purchaseButton1" href="http://www.hulu.com/please-like-me">Hulu</a>
        </div>
        <div>
            <a class="season1">Canada</a><br>
            <a class="purchaseButton1" href="https://itunes.apple.com/ca/tv-season/please-like-me.-season-1/id1021317895">iTunes</a>
        </div>
        <div>
            <p4>Australia - Airs on <a href="http://www.abc.net.au/tv/programs/please-like-me/">ABC</a> or <a href="http://www.abc.net.au/tv/programs/please-like-me/">iView</a></p4><br>
            <p4>USA - Airs on <a href="http://www.takepart.com/pivot/please-like-me">pivot</a></p4><br>
            <p4>Canada - Airs on <a href="http://www.cbc.ca/pleaselikeme/">CBC</a></p4>
        </div>
        <div class="s1">
            <form name="purchaseAll" action="https://titan.csit.rmit.edu.au/~s3583185/wp/a3/cart.php" method="post" >
            <a class="purchaseAll1">Season 1 - $17.00</a><br>
            <a class="purchaseAll2">Season 2 - $22.50</a><br>
            <a class="purchaseAll3">Season 3 - $26.75</a>
            <input id="s1" class="purchase123" type="number" name="plm[s1]" value="0" min="0" max="5" placeholder="0 - 5" onchange="calculate1(),calculateTotal1();"/>
            <input id="s2" class="purchase123" type="number" name="plm[s2]" value="0" min="0" max="5" placeholder="0 - 5" onchange="calculate2(),calculateTotal1();"/>
            <input id="s3" class="purchase123" type="number" name="plm[s3]" value="0" min="0" max="5" placeholder="0 - 5" onchange="calculate3(),calculateTotal1();"/>
            <select class="purchaseForShop" name="media" required>
                <option value="">Select Media</option>
                <option value="DVD">DVD</option>
                <option value="BluRay">BluRay</option>
            </select>
            <div class="purchaseForShop"><input type="submit" value="Submit" class="submit"></div>
            </form>
            <div id="s1Price">The subtotal for S1: $0</div>
            <div id="s2Price">The subtotal for S2: $0</div>
            <div id="s3Price">The subtotal for S3: $0</div>
            <div id="totalPrice"><a>The total price is $0</a></div>
        </div>
    </div>
    <div class="square1">
        <a class="season">Season 2</a>
        <details class="description123">
            <summary>The award-winning Please Like Me, created by Josh Thomas, is back. In Season Two, 
            Josh tries to get through the day without upsetting anyone. <a class="expansionTag">more details</a></summary><br>
            <p>When we last saw Josh, his girlfriend had dumped him, he'd gained and lost a boyfriend, 
            come out to his parents, lost his eccentric great aunt, and moved back in to live with his bipolar mother after her suicide attempt. 
            In season two, Josh tries to get through the day without upsetting anyone. There's a new dog, a new rabbit and a new baby. 
            There's no big twist. It isn't Lost.</p>
        </details>
        <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/background2.jpeg" alt="josh thomas" class="background">
        <div>
            <a class="season2">Australia</a><br>
            <a class="purchaseButton2" href="https://itunes.apple.com/au/tv-season/please-like-me-season-2/id906508728">iTunes</a>
            <a class="purchaseButton2" href="https://play.google.com/store/tv/show/Please_Like_Me?id=lSwaQscC1Os&hl=en">Google Play</a>
        </div>
        <div>
            <a class="season2">USA</a><br>
            <a class="purchaseButton2" href="https://itunes.apple.com/us/tv-season/please-like-me-season-2/id891079725">iTunes</a>
            <a class="purchaseButton2" href="https://www.amazon.com/Milk/dp/B00MJOADIO/ref=sr_1_2?s=instant-video&ie=UTF8&qid=1444384957&sr=1-2&keywords=please+like+me">Amazon Video</a>
            <a class="purchaseButton2" href="http://www.hulu.com/please-like-me">Hulu</a>
        </div>
        <div>
            <a class="season2">Canada</a><br>
            <a class="purchaseButton2" href="https://itunes.apple.com/ca/tv-season/please-like-me.-season-2/id1021320142">iTunes</a>
        </div>
        <div class="s202">
            <p4 class="purpleText" >Australia - Airs on <a href="http://www.abc.net.au/tv/programs/please-like-me/">ABC</a> or <a href="http://www.abc.net.au/tv/programs/please-like-me/">iView</a></p4><br>
            <p4 class="purpleText" >USA - Airs on <a href="http://www.takepart.com/pivot/please-like-me">pivot</a></p4><br>
            <p4 class="purpleText" >Canada - Airs on <a href="http://www.cbc.ca/pleaselikeme/">CBC</a></p4>
        </div>
    </div>
    <div class="square1">
        <a class="season">Season 3</a><br>
        <details class="description123">
            <summary>In season three, new characters arrive, complications ensue, and a cast of extraordinary performers competes again 
            for screen time with John the cavoodle. <a class="expansionTag">more details</a></summary><br>
            <p>After breaking up with his girlfriend, Josh comes to the realization that he is homosexual. 
            With the support of his now ex girlfriend Claire, and his best friend and house mate Tom, Josh must help his mother with her battle 
            with depression and the rest of his family embrace his new found lifestyle.</p> 
        </details>
        <img src="https://titan.csit.rmit.edu.au/~s3583185/wp/a2/image/background3.jpg" alt="josh thomas with a dog" class="background">
        <div>
            <a class="season3">Australia</a><br>
            <a class="purchaseButton3" href="https://itunes.apple.com/au/tv-season/please-like-me-season-3/id1047334958">iTunes</a>
            <a class="purchaseButton3" href="https://play.google.com/store/tv/show/Please_Like_Me?id=ntS8mOXGJDo&hl=en">Google Play</a>
        </div>
        <div>
            <a class="season3">USA</a><br>
            <a class="purchaseButton3" href="https://itunes.apple.com/us/tv-season/please-like-me-season-3/id1041583976">iTunes</a>
            <a class="purchaseButton3" href="https://www.amazon.com/Rhubarb-and-Custard/dp/B00G5Z4VMM/ref=sr_1_1?s=instant-video&ie=UTF8&qid=1444384957&sr=1-1&keywords=please+like+me">Amazon Video</a>
        </div>
        <div class="s303">
            <p4 class="whiteEmail" >Australia - Airs on <a href="http://www.abc.net.au/tv/programs/please-like-me/">ABC</a> or <a href="http://www.abc.net.au/tv/programs/please-like-me/">iView</a></p4><br>
            <p4 class="whiteEmail" >USA - Airs on <a href="http://www.takepart.com/pivot/please-like-me">pivot</a></p4>
        </div>
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