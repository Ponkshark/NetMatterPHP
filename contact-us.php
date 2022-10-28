<?php   


//Serverside form validation

$name_error = '<input type="text" id="yourname2" name="yourname2"><br>';
$email_error = '<input type="text" id="youremail2" name="youremail2"><br>';
$phone_error = '<input type="text" id="yourtelephone" name="yourtelephone"><br>';
$subject_error = '<input type="text" id="yoursubject" name="yoursubject"><br>';
$message_error = '<textarea id="yourmessage" name="yourmessage"></textarea><br>';
$output = '';
if(isset($_POST["submit"]))  
{  
        if(empty($_POST["yourname2"]))  
        {  
            $name_error = "<input type='text' style='border: 1px solid #d64541;' id='yourname2' name='yourname2'><br>";  
        }  
        else  
        {  
            if(!preg_match("/^[a-zA-Z ]*$/", $_POST["yourname2"]))  
            {  
                    $name_error = "<input type='text' style='border: 1px solid #d64541;' id='yourname2' name='yourname2'><br>";  
            }  
        }  
        if(empty($_POST["youremail2"]))  
        {  
            $email_error = "<input type='text' style='border: 1px solid #d64541;' id='youremail2' name='youremail2'><br>";  
        }  
        else  
        {  
            if(!filter_var($_POST["youremail2"], FILTER_VALIDATE_EMAIL))  
            {  
                    $email_error = "<input type='text' style='border: 1px solid #d64541;' id='youremail2' name='youremail2'><br>";  
            }  
        } 
        if(empty($_POST["yourtelephone"]))  
        {  
            $phone_error = "<input type='text' style='border: 1px solid #d64541;' id='yourtelephone' name='yourtelephone'><br>";  
        }  
        else  
        {  
            if(!preg_match("/^[0-9]*$/", $_POST["yourtelephone"])) 
            {
                $phone_error = "<input type='text' style='border: 1px solid #d64541;' id='yourtelephone' name='yourtelephone'><br>";
            } 
        }
        if(empty($_POST["yoursubject"]))  
        {  
            $subject_error = "<input type='text' style='border: 1px solid #d64541;' id='yoursubject' name='yoursubject'><br>";  
        } 
        if(empty($_POST["yourmessage"]))  
        {  
            $message_error = "<textarea style='border: 1px solid #d64541;' id='yourmessage' name='yourmessage'></textarea><br>";  
        } 
        if($name_error == '<input type="text" id="yourname2" name="yourname2"><br>' && $email_error == '<input type="text" id="youremail2" name="youremail2"><br>' && $phone_error == '<input type="text" id="yourtelephone" name="yourtelephone"><br>' && $subject_error == '<input type="text" id="yoursubject" name="yoursubject"><br>' && $message_error == '<textarea id="yourmessage" name="yourmessage"></textarea><br>')  
        {  

            
            //Function to open the connection to my contact_details database
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

            //Open the connection
            $conn = OpenCon();
            //Retrive the form data
            $sup_name =  $_POST["yourname2"];
            $sup_company = $_POST["yourcompany"];
            $sup_email = $_POST["youremail2"];
            $sup_phone =  $_POST["yourtelephone"];
            $sup_subject = $_POST["yoursubject"];
            $sup_message = $_POST["yourmessage"];

            //Insert form data into the table
            $sql = "INSERT INTO customer_details VALUES ('$sup_name',
            '$sup_company','$sup_email','$sup_phone','$sup_subject','$sup_message')";
            $result = $conn->query($sql);
            //Close the connection
            CloseCon($conn);

            $output = '<p id="contact-success">Form submitted successfully</p>';
        }       
}  

     

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://use.typekit.net/mqv3nkn.css">
    <link rel="stylesheet" href="scss_and_stylesheet/style.css">
    <link href="css/hamburgers.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/d8fc1f1b84.js" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
</head>
<body id="body-id">

<?php include 'header.php'; ?>
<div class="top-margin">
</div>
<div class="breadcrumb-cont">
    <div class="breadcrumb-text">
        <a href="#">Home</a><span id="breadtext-2"> &nbsp;/&nbsp; Our Offices</span>
    </div>
</div>
<div class="our-offices-cont">
    <div class="our-offices-text">
        <h1>Our Offices</h1>
    </div>
</div>
<div class="location-cont">
    <div class="location-item" id="location-1">
        <div id="location-1-inner">
            <img src="img/cambridge.jpg" onclick="location.href = '#';" alt="The Cambridge office" id="cambridge-img">
            <div class="location-content">
                <a href="#" class="location-title">Cambridge Office</a>
                <p>
                    Unit 1.31,<br>
                    St John's Innovation Centre,<br>
                    Cowley Road, Milton,<br>
                    Cambridge,<br>
                    CB4 0WS
                </p>
                <a href="#" class="location-phone">01223 37 57 72</a><br>
                <button class="location-but">View More</button>
            </div>
        </div>
        <div id="map-1-inner">
            <iframe width="370px" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=0.15079379081726077%2C52.23400920830204%2C0.1550424098968506%2C52.23610194162088&amp;layer=mapnik" style="border: 0px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=18/52.23506/0.15292"></a></small>
        </div>
    </div>
    <div class="location-item" id="location-2">
        <div id="location-2-inner">
            <img src="img/wymondham.jpg" onclick="location.href = '#';" alt="The Wymondham office" id="wymondham-img">
            <div class="location-content">
                <a href="#" class="location-title">Wymondham Office</a>
                <p>
                    Unit 15,<br>
                    Penfold Drive,<br>
                    Gateway 11 Business Park,<br>
                    Wymondham, Norfolk,<br>
                    NR18 0WZ
                </p>
                <a href="#" class="location-phone">01603 70 40 20</a><br>
                <button class="location-but">View More</button>
            </div>
        </div>
        <div id="map-2-inner">
            <iframe width="370px" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=1.1346977949142458%2C52.574423248946765%2C1.1391931772232058%2C52.57656183547121&amp;layer=mapnik" style="border: 0px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=18/52.57549/1.13695"></a></small>
        </div>
    </div>
    <div class="location-item" id="location-3">
        <div id="location-3-inner">
            <img src="img/yarmouth.jpg" onclick="location.href = '#';" alt="The Yarmouth office" id="yarmouth-img">
            <div class="location-content">
                <a href="#" class="location-title">Great Yarmouth Office</a>
                <p>
                    Suite F23,<br>
                    Beacon Innovation Centre,<br>
                    Beacon Park, Gorleston,<br>
                    Great Yarmouth, Norfolk,<br>
                    NR31 7RA
                </p>
                <a href="#" class="location-phone">01493 60 32 04</a><br>
                <button class="location-but">View More</button>
            </div>
        </div>
        <div id="map-3-inner">
            <iframe width="370px" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=1.711885041441912%2C52.55521859219621%2C1.7141327325963918%2C52.55628836679451&amp;layer=mapnik" style="border: 0px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/#map=19/52.55575/1.71301"></a></small>
        </div>
    </div>
</div>
<div class="contact-form-cont">
    <div class="form-item-1">
    <form method="POST" class="newsletter-form">
        <div class="name-email-cont2">
            <div class="name-email-item2">
                <label for="yourname2" class="required">Your Name</label><br>
                <?php echo $name_error; ?>
            </div>
            <div class="name-email-item2">
                <label for="yourcompany">Company Name</label><br>
                <input type="text" id="yourcompany" name="yourcompany"><br>
            </div>
            <div class="name-email-item2">
                <label for="youremail2" class="required">Your Email</label><br>
                <?php echo $email_error; ?>
            </div>
            <div class="name-email-item2">
                <label for="yourtelephone" class="required">Your Telephone Number</label><br>
                <?php echo $phone_error; ?>
            </div>
            <div class="name-email-item2">
                <label for="yoursubject" class="required">Subject</label><br>
                <?php echo $subject_error; ?>
            </div>
            <div class="name-email-item2">
                <label for="yourmessage" class="required">Message</label><br>
                <?php echo $message_error; ?>
            </div>
            <label class="checkbox-item2">
                <input type="checkbox" id="marketing" name="marketing" value="IAccept">
                <span class="check-but" id="check-but-id"></span>
                <span class="check-text">	Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we keep your data safe.</span><br>
            </label>
            <div class="contact-form-lower">
                <span class="sub-item">
                    <input type="submit" name="submit" value="Send Enquiry" class="enquiry-but" />
                </span>
                <span class="fields-req-item">
                    Fields Required
                </span>
            </div>
            <div><?php echo $output; ?></div>
        </div>
        </form>
    </div>
    <div class="form-item-2">
        Email us on:<br>
        <a href="#" class="form-item-2-sales">sales@netmatters.com<br></a>
        Business hours:<br>
        Monday - Friday 07:00 - 18:00<br>
        <p class="form-item-2-ofh" onclick="ITDropdown();">Out of Hours IT Support <i class="fa-solid fa-chevron-down"></i></p>
        <div class="it-dropdown" id="it-dropdown-id">
        
            <p id="it-light">Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p><br>
            
                <strong>Monday - Friday 18:00 - 22:00</strong>
                <strong>Saturday 08:00 - 16:00</strong>
                <br>
                <strong>Sunday 10:00 - 18:00</strong><br><br>
            
            <p id="it-light">To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
        </div>
    </div>
</div>






<?php include 'footer.php'; ?>
<script src="js/main.js"></script>
<script src="js/owl.carousel.min.js"></script>
</body>
</html>