<?php
include'config.php';

?><!doctype html>
<html lang="en">
<head>
<?php include'style.php'; ?>
</head>

<body>
    
<?php include'header.php'; ?>

    <div class="slider_area">

        <div class="banner_slider owl-carousel owl-theme">
<?php
$view_banners = "select * from banner_slider";
$run_query = mysqli_query($conn, $view_banners);
if($run_query-> num_rows > 0){

while($row = mysqli_fetch_assoc($run_query)) { 
?>
            <div class="item">
                <img src="admin/banner/<?php echo $row['banner_img'];?>" alt="main_banner1">
                <div class="index_bannerContent">
                    <h3><?php echo $row['banner_title'];?></h3>
                    <p><?php echo $row['banner_content'];?></p>
                </div>
            </div>

<?php
}
}
?>

        </div>
    </div>

    <section class="about-section pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-item"><span>About us</span>
                        <h3>We For You Organization</h3>
                        <p>Konin wansis dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div class="about-btn">
                            <a href="#" class="default-btn">More About Us<i class="flaticon-right"></i><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="index-about-image about-one-img">
                        <img src="assets/img/ngo/award-pic.jpg" class="shadow" alt="image">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="event-section ptb-50">
        <div class="container">
            <div class="section-title">
                <h2>Our Events</h2>
                <p>Event makes suspendice adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendices gravida.</p>
            </div>
<?php
$view_events = "select * from event_list";
$run_query = mysqli_query($conn, $view_events);
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) { 
?>
            <div class="event-item">
                    <div class="row gx-0">
                        <div class="col-lg-6 col-sm-4 col-xs-12">
                            <div class="event-img">
                                <img src="admin/events/<?php echo $row['event_img']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-8 col-xs-12">
                            <div class="event-content">
                                <h4><?php echo $row['event_title']; ?></h4>
                                <p><?php echo $row['event_content']; ?></p>
                                <a href="" class="event-btn-one">View More..</a>
                            </div>
                        </div>
                    </div>
            </div>
<?php
}
}
?>
        </div>
    </section>

    <section class="fun-facts-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <p>Beneficiaries</p>
                        <h3>
                        <span class="odometer" data-count="500">00</span>
                        <span class="sign-icon">K</span>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <p>Happy Donators</p>
                        <h3>
                        <span class="odometer" data-count="458">00</span>
                        <span class="sign-icon">+</span>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <p>Volunteer</p>
                        <h3>
                        <span class="odometer" data-count="45">00</span>
                        <span class="sign-icon">+</span>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-fun-fact">
                        <p>Donated Poor</p>
                        <h3>
                        <span class="odometer" data-count="20">00</span>
                        <span class="sign-icon">K</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section pt-50 pb-50">
        <div class="container">
            <div class="section-title">
                <h2>Our Latest News</h2>
                <p>Event makes suspendice adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
<?php
$view_news = "select * from news";
$run_query = mysqli_query($conn, $view_news);
?>
            <div class="news_slider owl-carousel owl-theme">
<?php
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) { 
?>
                                                
                <div class="item">
                    <div class="single-blog">
                        <div class="row gx-0">
                            <div class="col-lg-5 col-sm-6 col-xs-12">
                                <img src="admin/news-images/<?php echo $row['news_img']; ?>" alt="image">
                            </div>
                            <div class="col-lg-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <a href=""><i class='bx bx-user'></i>
                                    </a>
                                    <span><?php echo $row['news_place']; ?>, <?php echo $row['news_date']; ?></span>
                                    <h3><a href=""><?php echo $row['news_title']; ?></a></h3>
                                    <p><?php echo $row['news_content']; ?></p>
                                    <a href="" class="blog-btn">Read more..</a>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
<?php
}
}
?>
            </div>
        </div>
    </section>

    <section class="solve-section pt-50 pb-50">
        <div class="container">
            <div class="section-title">
                <h2>A mission to solve a problem</h2>
                <p>Quis ipsum suspendice consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendices gravida.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="solve-item">
                        <div class="icon">
                            <img src="assets/img/facility/education.png" alt="image">
                        </div>
                        <h3>Education Charity</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. amet Rem in dolor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="solve-item">
                        <div class="icon">
                            <img src="assets/img/facility/blood-donation.png" alt="image">
                        </div>
                        <h3>Blood Donation</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. amet Rem in dolor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="solve-item">
                        <div class="icon">
                            <img src="assets/img/facility/food-donate.png" alt="image">
                        </div>
                        <h3>Food Distribution</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. amet Rem in dolor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="solve-item">
                        <div class="icon">
                            <img src="assets/img/facility/vaccination.png" alt="image">
                        </div>
                        <h3>Corona Vaccination</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. amet Rem in dolor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section pt-50 pb-50">
        <div class="container">
            <div class="section-title">
                <h2>Our Team</h2>
                    <p>Quis ipsum suspendice consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendices gravida.</p>
            </div>
<?php
$view_data = "select * from member_list";
$run_query = mysqli_query($conn, $view_data);
?>
            <div class="team_slider owl-carousel owl-theme">
<?php
if($run_query-> num_rows > 0){
while($row = mysqli_fetch_assoc($run_query)) { 
?>
                <div class="item">
                    <div class="team-item">
                        <div class="image">
                            <img src="admin/team-images/<?php echo $row['member_img']; ?>" alt="image">
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            
                            <h3><?php echo $row['member_name']; ?>s</h3>
                            <span><?php echo $row['member_title']; ?></span>
                        </div>
                    </div>
                </div>
<?php 
}
}
?>
            </div>
        </div>
    </section>

    <section class="testimonials-section pt-50 pb-50">
        <div class="container">
            <div class="section-title">
                <h2>Don’t Believe Us? See review</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="testimonials-slider owl-carousel owl-theme">
                        <div class="testimonials-item">
                            <h3 class="review_title">Precious Journey With You”</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, autem
                                totam. Et ipsam similique consequatur! Numquam, inventore delectus sequi,
                                ullam, placeat molestias velit dolore praesentium ea distinctio cum vitae
                                aperiam Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos,
                                veniam reprehenderit. Id sed itaque quam voluptates deleniti autem
                                facilis sequi! Voluptatibus voluptas dolorum nisi tenetur laboriosam modi
                                quis.</p>
                            <div class="testimonials-info clearfix">
                                <h3>Vinay Ghosh,</h3>
                                <span>Pankhabari, <b>Jalpaiguri</b></span>
                            </div>
                       </div><div class="testimonials-item">
                            <h3 class="review_title">Precious Journey With You”</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, autem
                                totam. Et ipsam similique consequatur! Numquam, inventore delectus sequi,
                                ullam, placeat molestias velit dolore praesentium ea distinctio cum vitae
                                aperiam Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos,
                                veniam reprehenderit. Id sed itaque quam voluptates deleniti autem
                                facilis sequi! Voluptatibus voluptas dolorum nisi tenetur laboriosam modi
                                quis.</p>
                            <div class="testimonials-info clearfix">
                                <h3>Abhay Sarkar,</h3>
                                <span>Champasari, <b>Siliguri</b></span>
                            </div>
                       </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="video_div">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=420&href=https%3A%2F%2Fwww.facebook.com%2FThehelpinghands.Weareheretosearveyou%2Fvideos%2F2560958944198937%2F&show_text=false&width=560&t=0" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                </div>
            </div>
                    
        </div>
        <div class="testimonials-shape">
            <img src="assets/img/testimonials/shape.png" alt="image" />
        </div>
    </section>

    <section class="subscription-section ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="subscription_div">
                        <h3>What’s better than a gift that empowers communities?</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="subscription_div">
                        <a href="contact.php">Inquiry</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include'footer.php'; ?>
<script type="text/javascript">
    $( ".event-item .row:odd" ).addClass('flex-row-reverse');
</script>

</body>

</html>