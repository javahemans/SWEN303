<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Victoria University of Wellington">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/vanillabox/vanillabox.css" type="text/css">

    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>Victoria - Educational, Course and University Template</title>

</head>

<body class="page-sub-page page-course-listing">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
<?php include 'header.php';?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="courses.php">Course Homepages</a></li>
        <li><a href="swen303-teacher.php">SWEN303 Home</a></li>
        <li class="active">Edit SWEN303 Assignment Marks</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-12">
                <div id="page-main">
                    <section class="course-listing" id="courses">
                        <header><h1> SWEN 303 Assessment </h1></header>
                       
                        <section id="course-list">
                            <div class="table-responsive">
                                <table class="table table-hover course-list-table tablesorter">
                                    <thead>
                                    <tr>
                                        <th>Assignment Name</th>
                                        <th>Student ID</th>
                                        <th>Student Name</th>
                                        <th>Marks</th>
                                        <th class="starts">Status</th>
                                        <th class="length"> Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th class="course-title"><a href="submit-assignment.php">Assignment 1 </a></th>
                                        <th>3003123456</th>
                                        <th>Adrain NG</th>
                                        <th><a href="mark-details-edit.php">A+</a></th>
                                        <th>Graded</th>
                                        <th> <button type="button" class="btn btn-danger" onclick="window.location.href='/mark-details-edit.php'">Mark</button></th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="submit-assignment.php">Assignment 1 </a></th>
                                        <th>3003123457</th>
                                        <th>BK John</th>
                                        <th><a href="mark-details-edit.php">A</a></th>
                                        <th>Graded</th>
                                        <th><button type="button" class="btn btn-danger" onclick="window.location.href='/mark-details-edit.php'">Mark</button></th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="submit-assignment.php">Assignment 1 </a></th>
                                        <th>3003123458</th>
                                        <th>Jessica Young</th>
                                        <th><a href="mark-details-edit.php">A+</a></th>
                                        <th>Graded</th>
                                        <th><button type="button" class="btn btn-danger" onclick="window.location.href='/mark-details-edit.php'">Mark</button></th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="submit-assignment.php">Assignment 2 </a></th>
                                        <th>3003123456</th>
                                        <th>Adrain NG</th>
                                        <th><a href="mark-details-edit.php">A+</a></th>
                                        <th>Graded</th>
                                        <th> <button type="button" class="btn btn-danger">Mark</button></th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="submit-assignment.php">Assignment 2 </a></th>
                                        <th>3003123457</th>
                                        <th>BK John</th>
                                        <th><a href="mark-details-edit.php">A+</a></th>
                                        <th>Graded</th>
                                        <th><button type="button" class="btn btn-danger">Mark</button></th>
                                    </tr>
                                    <tr>
                                        <th class="course-title"><a href="submit-assignment.php">Assignment 3 </a></th>
                                        <th>3003123458</th>
                                        <th>Jessica Young</th>
                                        <th><a href="mark-details-edit.php">A+</a></th>
                                        <th>Graded</th>
                                        <th><button type="button" class="btn btn-danger">Mark</button></th>
                                    </tr>
               
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </section><!-- /.course-listing -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

        
            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

</div>
<!-- end Wrapper -->

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/selectize.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/js/jQuery.equalHeights.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>