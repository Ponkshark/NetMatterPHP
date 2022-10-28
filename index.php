<!DOCTYPE html>
<html lang="en">
<head>
    <title>Netmatters</title>
    <link rel="stylesheet" href="https://use.typekit.net/mqv3nkn.css">
    <link rel="stylesheet" href="scss_and_stylesheet/style.css">
    <link href="css/hamburgers.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/d8fc1f1b84.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
</head>
<body id="body-id">
    <dialog id="myDialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal title">Cookies Policy</h3>
            </div>
            <div class="modal-body">
                <p>Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "Privacy Policy" otherwise click "Accept Cookies" to enter.</p>
            </div>
            <div class="modal-footer">
                <div class="modal-footer-row">
                    <button id="modal-set-but">Change Settings</button>
                    <button id="modal-comf-but" onclick="createCookie(); document.getElementById('myDialog').close()">Accept Cookies</button>
                </div>
            </div>
        </div>
    </dialog>
    
<?php include 'header.php'; ?>

<div class="info-container">
    <div class="img-container"><img src="https://www.netmatters.co.uk/assets/images/thumbnails/full_height_slideshow/home-oaVs.jpg" id="main-img" alt="Two men smiling to the side"></div>
    <div class="info-text-cont">
    <div class="info-text">
    <h1>The East Of England's Leading Technology Company</h1>
    <p>Performance-driven digital and technology services<br>with complete transparency.</p>
    </div></div>

</div>


<div class="serv-container">
    <h2 class="serv-header" style="margin-top: 50px;">
        <span><strong>Our Services</strong></span>
        <span id="service-view"><h3 class="service-link"><a href="#">View All&nbsp;<i class="fa-solid fa-arrow-right"></i></a></h3></span>
    </h2>
    <div class= "serv-block" id="serv-block-1" onclick="location.href='#';">
            <span class="icon-1-span" id="serv-icon-circle-1">
            <i class="fa-solid fa-grip" id="serv-icon-1"></i>
            </span>
            <h2 class="serv-title">Bespoke Software</h2>
            <p class="serv-text">Tailored software solutions to improve business productivity and online profits.</p>
            <button class="serv-but" id="block-1-but">READ MORE</button>
    </div>
    <div class= "serv-block" id="serv-block-2" onclick="location.href='#';">
            <span class="icon-2-span" id="serv-icon-circle-2">
            <i class="fa-solid fa-display" id="serv-icon-2"></i>
            </span>
            <h2 class="serv-title">IT Support</h2>
            <p class="serv-text">Remotely managed IT services that is catered to your businesses needs, adds value & reduces costs.</p>
            <button class="serv-but" id="block-2-but">READ MORE</button>
    </div>
    <div class= "serv-block" id="serv-block-3" onclick="location.href='#';">
            <span class="icon-3-span" id="serv-icon-circle-3">
            <i class="fa-solid fa-chart-simple" id="serv-icon-3"></i>
            </span>
            <h2 class="serv-title">Digital Marketing</h2>
            <p class="serv-text">Driven brand awareness & ROI through creative digital marketing campaigns.</p>
            <button class="serv-but" id="block-3-but">READ MORE</button>
    </div>
    <div class= "serv-block" id="serv-block-4" onclick="location.href='#';">
            <span class="icon-4-span" id="serv-icon-circle-4">
            <i class="fa-solid fa-phone" id="serv-icon-4"></i>
            </span>
            <h2 class="serv-title">Telecoms Services</h2>
            <p class="serv-text">Stay connected with bespoke telecoms solutions when you need it most.</p>
            <button class="serv-but" id="block-4-but">READ MORE</button>
    </div>
    <div class= "serv-block" id="serv-block-5" onclick="location.href='#';">
            <span class="icon-5-span" id="serv-icon-circle-5">
            <i class="fa-solid fa-code" id="serv-icon-5"></i>
            </span>
            <h2 class="serv-title">Web Design</h2>
            <p class="serv-text">User-centric design for businesses looking to make a lasting impression.</p>
            <button class="serv-but" id="block-5-but">READ MORE</button>
    </div>
    <div class= "serv-block" id="serv-block-6" onclick="location.href='#';">
            <span class="icon-6-span" id="serv-icon-circle-6">
            <i class="fa-solid fa-shield-halved" id="serv-icon-6"></i>
            </span>
            <h2 class="serv-title">Cyber Security</h2>
            <p class="serv-text">Ensuring your online business stays secure 24/7 365 days of the year.</p>
            <button class="serv-but" id="block-6-but">READ MORE</button>
    </div>
    <div class= "serv-block" id="serv-block-7" onclick="location.href='#';">
            <span class="icon-7-span" id="serv-icon-circle-7">
            <i class="fa-solid fa-graduation-cap" id="serv-icon-7"></i>
            </span>
            <h2 class="serv-title">Developer Training</h2>
            <p class="serv-text">Have you considered a career in web development but you aren't sure where to start?</p>
            <button class="serv-but" id="block-7-but">READ MORE</button>
    </div>
</div>

<div class="slider-container owl-carousel">
    <div class="slider-item">
        <a href="#"><img src="https://www.netmatters.co.uk/assets/images/accreditations/google-partner.jpg" alt="Google Partner Logo"></a>
    </div>
    <div class="slider-item">
        <a href="#"><img src="https://www.netmatters.co.uk/assets/images/accreditations/investing-in-future-growth.jpg" alt="Business Award Winner"></a>
    </div>
    <div class="slider-item">
        <a href="#"><img src="https://www.netmatters.co.uk/assets/images/accreditations/norfolk-carbon-charter.jpg" alt="Norfolk Carbon Charter"></a>
    </div>
    <div class="slider-item">
        <a href="#"><img src="https://www.netmatters.co.uk/assets/images/accreditations/PPC_logo.jpg" alt="Prompt Payment Code"></a>
    </div>
    <div class="slider-item">
        <a href="#"><img src="https://www.netmatters.co.uk/assets/images/accreditations/princess-royal-training.jpg" alt="Princess Royal Training Award 2020"></a>
    </div>
    <div class="slider-item">
        <a href="#"><img src="https://www.netmatters.co.uk/assets/images/accreditations/future-50.jpg" alt="Future 50 Member"></a>
    </div>
    <div class="slider-item">
        <a href="#"><img src="https://www.netmatters.co.uk/assets/images/accreditations/qms.jpg" alt="QMS Registered"></a>
    </div>
    <div class="slider-item">
        <a href="#"><img src="https://www.netmatters.co.uk/assets/images/accreditations/skills-of-tomorrow.jpg" alt="Skills of Tomorrow Winner"></a>
    </div>
    
</div>

<div class="welcome-container">
    <div class="welc-box-1" id="welc-box-id-1">
        <h2 style="margin-top: 35px; margin-bottom: 40px;"><strong>Welcome to Netmatters</strong></h2>
        <p><strong>Netmatters is a leading <a href="#">Bespoke Software</a>, <a href="#">IT Support</a>, and <a href="#">Digital
            Marketing</a> company based in the East of England with offices in <a href="#">Cambridge</a>, 
            <a href="#">Wymondham</a>, and <a href="#">Great Yarmouth</a>.<br><br>
        </strong>
            We aren't tied into contracts with third-party providers, so you know that our recommendations for your business 
            are based purely with one benefit in mind: to help improve your business with the most appropriate solutions. <br><br>
            We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures
             you get the most from our relationship in an upfront manner.<br><br>
        </p>
        <button class="welc-read-but" style="margin-bottom: -25px;">READ MORE &nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    </div>
    <div class="welc-box-2" id="welc-box-id-2">
        <h2 style="margin-top: 40px; margin-bottom: 30px;"><strong>What Our Clients Think</strong></h2>
        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><br><br>
        <p><em>Great service. Took the reigns and did all the leg work for us. Ensured we were happy with our website
             and made all changes necessary as and when asked to do so.</em></p>
        <p id="welc-quote" style="margin-top: 20px; margin-bottom: 35px;">Oliver King - SEA Scaffolding</p>
        <button class="welc-goog-but">GOOGLE REVIEWS  &nbsp;<i class="fa-solid fa-arrow-right"></i></button>
        <button class="welc-trust-but">TRUSTPILOT REVIEWS  &nbsp;<i class="fa-solid fa-arrow-right"></i></button>
    </div>


</div>

<div class="news-header-container">
    <h2 class="news-title" style="margin-top: 50px;"><strong>Latest News</strong></h2>
    <h3 class="news-link" style="margin-top: 50px;"><a href="#">View All&nbsp;<i class="fa-solid fa-arrow-right"></i></a></h3>
</div>

<?php 
function OpenCon(){
    // My local cpanel host
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "contact_details";
    $servername = "localhost";
    $username = "kylewarf_kylewarford";
    $password = "u2FQhn6ip6DzSLc";
    $dbname = "kylewarf_portfolio";
    // Create connection
    $conn = new mysqli($servername,
        $username, $password, $dbname);

    return $conn;
    }

//Function to close the connection
function CloseCon($conn)
{
    $conn -> close();
}    

$conn = OpenCon();

$sql2 = "SELECT * FROM `news-items`";
$result = $conn -> query($sql2);


$row = [[]];
for($i=1; $i<4; $i++) {
    array_push($row, mysqli_fetch_array($result, MYSQLI_NUM));
}

?>

<div class="news-container">
    <div class="news-box-1" id="news-box-id-1" onclick="location.href='#';">
        <div class="news-img-cont">
        <a href="#"><img class="news-big-img" src="<?php echo($row[1][1]) ?>" alt="Now Hiring image"></a>
        <a href="#" class="news-img-link-1"><?php echo($row[1][2]) ?></a>
        </div>
        <div class="news-block-1">
            <h3 id="news-block-title-1" style="margin-bottom: 15px;"><?php echo($row[1][3]) ?></h3>
            <p style="margin-bottom: 25px;"><?php echo($row[1][4]) ?></p>
            <button class="news-but-1">READ MORE</button>
            <div class="user-1" style="margin-top: 30px; padding-top: 30px">
                <img src="<?php echo($row[1][5]) ?>" alt="Picture of Elliott Peacock">
                <p class="user-name"><strong><?php echo($row[1][6]) ?></strong><br><?php echo($row[1][7]) ?></p>
            </div>
        </div>
    </div>
    <div class="news-box-2" id="news-box-id-2" onclick="location.href='#';">
        <div class="news-img-cont">
        <a href="#"><img class="news-big-img" src="<?php echo($row[2][1]) ?>" alt="The risks of not being cookie compliant image"></a>
        <a href="#" class="news-img-link-2"><?php echo($row[2][2]) ?></a>
        </div>
        <div class="news-block-2">
            <h3 id="news-block-title-2" style="margin-bottom: 15px;"><?php echo($row[2][3]) ?></h3>
            <p style="margin-bottom: 25px;"><?php echo($row[2][4]) ?></p>
            <button class="news-but-2">READ MORE</button>
            <div class="user-2" style="margin-top: 30px; padding-top: 30px">
                <img src="<?php echo($row[2][5]) ?>" alt="Netmatters logo">
                <p class="user-name"><strong><?php echo($row[2][6]) ?></strong><br><?php echo($row[2][7]) ?></p>
            </div>
        </div>
    </div>
    <div class="news-box-3" id="news-box-id-3" onclick="location.href='#';">
        <div class="news-img-cont">
        <a href="#"><img class="news-big-img" src="<?php echo($row[3][1]) ?>" alt="Netmatters road to net zero image"></a>
        <a href="#" class="news-img-link-2"><?php echo($row[3][2]) ?></a>
        </div>
        <div class="news-block-3">
            <h3 id="news-block-title-3" style="margin-bottom: 15px;"><?php echo($row[3][3]) ?></h3>
            <p style="margin-bottom: 25px;"><?php echo($row[3][4]) ?></p>
            <button class="news-but-3">READ MORE</button>
            <div class="user-3" style="margin-top: 30px; padding-top: 30px">
                <img src="<?php echo($row[3][5]) ?>" alt="Netmatters logo">
                <p class="user-name"><strong><?php echo($row[3][6]) ?></strong><br><?php echo($row[3][7]) ?></p>
            </div>
        </div>
    </div>
</div>

<div class="banner-container">
    <div class="banner-item" id="banner-item-1">
        <div class="banner-popup" id="ban-pop-1">
            <h3>Busseys</h3>
            <p>One of the UK's leading Ford dealerships.</p>
            <div class="banner-arrow"></div>
        </div>
        <a href="#"><img src="https://www.netmatters.co.uk/uploads/page/1/home-gZQR.png" alt="Busseys Logo"></a>
    </div>
    <div class="banner-item" id="banner-item-2">
        <div class="banner-popup" id="ban-pop-2">
            <h3>Crane Garden Builders</h3>
            <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
            <div class="banner-arrow"></div>
        </div>
        <a href="#"><img src="https://www.netmatters.co.uk/uploads/page/1/home-MjHw.png" alt="Crane Garden Buildings Logo"></a>
    </div>
    <div class="banner-item" id="banner-item-3">
        <div class="banner-popup" id="ban-pop-3">
            <h3>Beat</h3>
            <p>The UK's eating disorder charity founded in 1989.</p>
            <div class="banner-arrow"></div>
        </div>
        <a href="#"><img src="https://www.netmatters.co.uk/uploads/page/1/home-ukEL.png" alt="Beat Logo"></a>
    </div>
    <div class="banner-item" id="banner-item-4">
        <div class="banner-popup" id="ban-pop-4">
            <h3>Northern Diver</h3>
            <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
            <div class="banner-arrow"></div>
        </div>
        <a href="#"><img src="https://www.netmatters.co.uk/uploads/page/1/home-kGn4.png" alt="Northern Diver Logo"></a>
    </div>
</div>

<div class="view-all">
<a href="#" class="view-all-text">View All <i class="fa-solid fa-arrow-right"></i></a>
</div>

<?php include 'footer.php'; ?>

<script src="js/main.js"></script>
<script src="js/owl.carousel.min.js"></script>
</body>

</html>
