<?php
 include 'lib/load.php';

 $template = new template();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $template->load_template('template','head'); ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <?php $template->load_template('template','spinner');?>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" id="home">
        <!-- header start -->
        <?php $template->load_template('template','header'); ?>
        <!-- header end -->

        <!-- hero section start -->
        <?php $template->load_template('template','hero-section'); ?>
        <!-- hero section end -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <?php $template->load_template('template','feature-section'); ?>
        <!-- Feature End -->


        <!-- About Start -->
        <?php $template->load_template('template','about-section'); ?>
        <!-- About End -->


        <!-- Overview Start -->
        <?php $template->load_template('template','overview-section'); ?>
        <!-- Overview End -->


        <!-- Advanced Feature Start -->
        <?php $template->load_template('template','advanced-feature-section'); ?>
        <!-- Advanced Feature End -->


        <!-- Facts Start -->
        <?php $template->load_template('template','facts-section'); ?>
        <!-- Facts End -->


        <!-- Process Start -->
        <?php $template->load_template('template','process-section'); ?>
        <!-- Process End -->


        <!-- Pricing Start -->
        <?php $template->load_template('template','pricing-section'); ?>
        <!-- Pricing End -->


        <!-- Testimonial Start -->
        <?php $template->load_template('template','testimonial-section'); ?>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <?php $template->load_template('template','contact-section'); ?>
        <!-- Contact End -->
        

        <!-- Footer Start -->
        <?php $template->load_template('template','footer'); ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>