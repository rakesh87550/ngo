<?php
include'config.php';
?>
<!doctype html>
<html lang="en">
<head>
<title>We For You | Contact Us</title>
<?php include'style.php'; ?>
<body>
<?php include'header.php'; ?>
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-section ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info-address">
                        <h3>Quick Contact </h3>
                        <div class="info-contact"> <i class="flaticon-pin"></i>
                            <h3>Location</h3> 
                            <span>205 Fida Walinton, Tongo  New York, Canada</span>
                        </div>
                        <div class="info-contact"> <i class="flaticon-call"></i>
                            <h3>Call Us</h3> 
                            <span><a href="tel:99324 92888">+91 99324 92888</a></span>
                            <span><a href="tel:62940 69334">+91 62940 69334</a></span>
                            <span><a href="tel:89182 80265">+91 89182 80265</a></span>
                        </div>
                        <div class="info-contact"> <i class="flaticon-email"></i>
                            <h3>Email Us</h3> 
                            <span> <a href="mailto:weforu24.7@gmail.com">weforu24.7@gmail.com </a></span>
                            <span> <a href="mailto:info@weforyou.com">info@weforyou.com </a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-area">
                        <div class="contact-content">
                            <h3>Let’s talk!</h3>
                        </div>
                        <div class="contact-form">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="c_name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="c_email" id="email" class="form-control" required data-error="Please enter your email" placeholder="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="c_phone" maxlength="10" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="c_subject" id="subjects" class="form-control" required data-error="Please enter your subjects" placeholder="Subjects">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="c_msg" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Write Something"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="send-btn">
                                            <button type="submit" name="submit" class="default-btn"> Contact us <i class="flaticon-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114041.02049098723!2d88.3612316499285!3d26.719414044615895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e46ac5d0b2b547%3A0x40e1edeea5f0260d!2sBaikunthapur%20Forest!5e0!3m2!1sen!2sin!4v1625473531694!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
<?php include'footer.php'; ?>
</body>
</html>

<?php
if (isset($_POST['submit'])) {

$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_phone = $_POST['c_phone'];
$c_subject = $_POST['c_subject'];
$c_msg = $_POST['c_msg'];

    $c_inquiry = "insert into contact_inquiry(c_id, c_name, c_email, c_phone, c_subject, c_massage) values('', '$c_name', '$c_email', '$c_phone', '$c_subject', '$c_msg')";
    $run_query = mysqli_query($conn, $c_inquiry);

    if ($run_query){
        echo '<script>alert("Inquiry Send to Admin.")</script>';
    }
    else{
        echo '<script>alert("Inquiry not Send to Admin.")</script>';
    }
}
?> 