<?php
include('nav_bar.php');
?>
<!DOCTYPE html>
<html>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// //change the database and table name
// $database = "alumni_sbmp";
// $table = "register_table";

$conn = new mysqli('localhost','sbmpac_root','0#Hglh9~XiVE','sbmpac_alumni');
if ($conn->connect_error) {
    echo "Connection error " . $conn->connect_error . "<br>";
} ?>

<head>
    <title>SBMP Alumni Association</title>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SBMP Alumni Association</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <!-- favicon -->
    <link href="assets/images/favicon.png" rel="icon">
    <link href="assets/images/favicon.png" rel="apple-touch-icon">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- news and achive cards -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .carousel-inner {
        max-height: 350px;
    }

    /* cards */

    .card-margin {
        margin-bottom: 1.875rem;
    }

    .card {
        border: 0;
        box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #ffffff;
        background-clip: border-box;
        border: 1px solid #e6e4e9;
        border-radius: 8px;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }

    .card .card-header.no-border {
        border: 0;
    }

    .card .card-header {
        background: none;
        padding: 0 0.9375rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        min-height: 50px;
    }

    .card-header:first-child {
        border-radius: calc(8px - 1px) calc(8px - 1px) 0 0;
    }

    .widget-49 .widget-49-title-wrapper {
        display: flex;
        align-items: center;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-primary {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #edf1fc;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-day {
        color: #4e73e5;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-month {
        color: #4e73e5;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-secondary {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #fcfcfd;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-day {
        color: #dde1e9;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-month {
        color: #dde1e9;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-success {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #e8faf8;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-day {
        color: #17d1bd;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-month {
        color: #17d1bd;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-info {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #ebf7ff;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-day {
        color: #36afff;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-month {
        color: #36afff;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-warning {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: floralwhite;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-day {
        color: #FFC868;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-month {
        color: #FFC868;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-danger {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #feeeef;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-day {
        color: #F95062;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-month {
        color: #F95062;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-light {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #fefeff;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-day {
        color: #f7f9fa;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-month {
        color: #f7f9fa;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-dark {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #ebedee;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-day {
        color: #394856;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-month {
        color: #394856;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-base {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #f0fafb;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-day {
        color: #68CBD7;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-month {
        color: #68CBD7;
        line-height: 1;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-meeting-info {
        display: flex;
        flex-direction: column;
        margin-left: 1rem;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-pro-title {
        color: #3c4142;
        font-size: 18px;
    }

    .widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-meeting-time {
        color: #B1BAC5;
        font-size: 13px;
    }

    .widget-49 .widget-49-meeting-points {
        font-weight: 400;
        font-size: 13px;
        margin-top: .5rem;
    }

    .widget-49 .widget-49-meeting-points .widget-49-meeting-item {
        display: list-item;
        color: #727686;
    }

    .widget-49 .widget-49-meeting-points .widget-49-meeting-item span {
        margin-left: .5rem;
    }

    .widget-49 .widget-49-meeting-action {
        text-align: right;
    }

    .widget-49 .widget-49-meeting-action a {
        text-transform: uppercase;
    }

    @media screen and (max-width: 992px) {
        .frame {
            width: 200px;
            height: 200px;
        }
    }

    /* On screens that are 600px wide or less, the background color is olive */
    @media screen and (max-width: 600px) {
        .frame {
            width: 200px;
            height: 200px;
        }
    }

    .count {
        float: center;
        text-align: center;
        margin-bottom: 50px;
        font-size: 25px;
        align-items: center;
    }

    /* cards for news and achive */

    .margin {
        margin-top: 20px;
    }

    .card-title {
        font-size: 1.25rem;
        line-height: 140%;
        margin-top: -5px;
    }

    .card-title {
        margin-bottom: 2.1rem;
    }

    /* alumni */
    .m-t-5 {
        margin-top: 5px;
    }

    .card {
        background: #fff;
        margin-bottom: 30px;
        transition: .5s;
        border: 0;
        border-radius: .1875rem;
        display: inline-block;
        position: relative;
        width: 100%;
        box-shadow: none;
    }

    .card .body {
        font-size: 14px;
        color: #424242;
        padding: 20px;
        font-weight: 400;
    }

    .profile-page .profile-header {
        position: relative
    }

    .profile-page .profile-header .profile-image img {
        border-radius: 50%;
        width: 140px;
        border: 3px solid #fff;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23)
    }

    .profile-page .profile-header .social-icon a {
        margin: 0 5px
    }

    .profile-page .profile-sub-header {
        min-height: 60px;
        width: 100%
    }

    .profile-page .profile-sub-header ul.box-list {
        display: inline-table;
        table-layout: fixed;
        width: 100%;
        background: #eee
    }

    .profile-page .profile-sub-header ul.box-list li {
        border-right: 1px solid #e0e0e0;
        display: table-cell;
        list-style: none
    }

    .profile-page .profile-sub-header ul.box-list li:last-child {
        border-right: none
    }

    .profile-page .profile-sub-header ul.box-list li a {
        display: block;
        padding: 15px 0;
        color: #424242
    }

    /* more button css */
    .button_container {
        height: 50px;
        position: relative;
      
    }

    .button_center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-size: 20px;
        
    }
</style>


<body>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">



        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"
                        src="https://sbmp.ac.in/Common/Uploads/ContentTemplate/130_Para_2_Exhibition_2020.jpg"
                        alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>My Caption Title (1st Image)</h5>
                        <p>The whole caption will only show up if the screen is at least medium size.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://sbmp.ac.in/Common/Uploads/ContentTemplate/132_Para_3_Exhibition_conf_hack.jpg"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://sbmp.ac.in/Common/Uploads/ContentTemplate/129_Para_1_Exhibition_2020.jpg"
                        alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div>
            <br>
            <br>
        </div>
        <!-- cards -->
        <div class="container">
            <?php
            $eventD = "SELECT event_name,details,DATE(date_time) AS date, Time(date_time) as time FROM event where isRegisterationOn='1' LIMIT 1";
            $result = $conn->query($eventD);
            while ($row = $result->fetch_array()):
                ?>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-margin">
                            <div class="card-header no-border">
                                <h5 class="card-title">EVENTS</h5>
                            </div>
                            <div class="card-body pt-0">
                                <div class="widget-49">
                                    <div class="widget-49-title-wrapper">
                                        <div class="widget-49-date-primary">
                                            <span class="widget-49-date-day">
                                                <?php
                                                $day = substr($row["date"], 8, 2);
                                                echo $day; ?>
                                            </span>
                                            <span class="widget-49-date-month">
                                                <?php $convert_date = strtotime($row["date"]);
                                                $month = date('F', $convert_date);
                                                echo substr($month, 0, 3); ?>
                                            </span>
                                        </div>
                                        <div class="widget-49-meeting-info">
                                            <span class="widget-49-pro-title">
                                                <?php echo $row["event_name"]; ?>
                                            </span>
                                            <span class="widget-49-meeting-time">
                                                <?php echo $row['time']; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <ol class="widget-49-meeting-points">
                                        <li class="widget-49-meeting-item"><span>
                                                <?php echo $row['details']; endwhile ?>
                                        </span></li>
                                </ol>
                                <div class="widget-49-meeting-action">
                                    <a href="Event.php" class="btn btn-sm btn-flash-border-primary">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php
                    $lectD = "SELECT title,details,DATE(date_time) AS date, Time(date_time) as time FROM lecture where isRegisterationOn='1' LIMIT 1";
                    $result = $conn->query($lectD);
                    while ($row1 = $result->fetch_array()):
                        ?>
                        <div class="card card-margin">
                            <div class="card-header no-border">
                                <h5 class="card-title">LECTURES</h5>
                            </div>
                            <div class="card-body pt-0">
                                <div class="widget-49">
                                    <div class="widget-49-title-wrapper">
                                        <div class="widget-49-date-warning">
                                            <span class="widget-49-date-day">
                                                <?php
                                                $day = substr($row1["date"], 8, 2);
                                                echo $day; ?>
                                            </span>
                                            <span class="widget-49-date-month">
                                                <?php $convert_date = strtotime($row1["date"]);
                                                $month = date('F', $convert_date);
                                                echo substr($month, 0, 3); ?>
                                            </span>
                                        </div>
                                        <div class="widget-49-meeting-info">
                                            <span class="widget-49-pro-title">
                                                <?php echo $row1["title"]; ?>
                                            </span>
                                            <span class="widget-49-meeting-time">
                                                <?php echo $row1['time']; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <ol class="widget-49-meeting-points">
                                        <li class="widget-49-meeting-item"><span>
                                                <?php echo $row1['details']; endwhile ?>
                                        </span></li>
                                </ol>
                                <div class="widget-49-meeting-action">
                                    <a href="Lecture.php" class="btn btn-sm btn-flash-border-warning">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php
                    $donaD = "SELECT drive_name,amount_required,purpose,coordinator_name FROM donation_drive where isDonationDriveOn='1' LIMIT 1";
                    $result = $conn->query($donaD);
                    while ($row3 = $result->fetch_array()):
                        ?>
                        <div class="card card-margin">
                            <div class="card-header no-border">
                                <h5 class="card-title">DONATION DRIVE</h5>
                            </div>
                            <div class="card-body pt-0">
                                <div class="widget-49">
                                    <div class="widget-49-title-wrapper">
                                        <div class="widget-49-date-success">
                                            <span class="widget-49-date-day">
                                                <?php echo $row3["amount_required"]; ?>
                                            </span>
                                            <span class="widget-49-date-month">amt</span>
                                        </div>
                                        <div class="widget-49-meeting-info">
                                            <span class="widget-49-pro-title">
                                                <?php echo $row3["drive_name"]; ?>
                                            </span>
                                            <span class="widget-49-meeting-time">
                                                <?php echo $row3["coordinator_name"]; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <ol class="widget-49-meeting-points">
                                        <li class="widget-49-meeting-item"><span>
                                                <?php echo $row3["purpose"]; endwhile ?>
                                        </span></li>
                                </ol>
                                <div class="widget-49-meeting-action">
                                    <a href="DonorDrive.php" class="btn btn-sm btn-flash-border-success">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- cout -->

        <div class=""
            style="padding:80px 0 0px 0;background-position:center;background-attachment:fixed;background-size:cover; background-image:url(https://sbmp.ac.in/Common/Uploads/HomeTemplate/9_HPHeader_SBMP2.jpg)">
            <div class="container">
                <div class="v5homegrid">
                    <div class="grid-box grid-box grid-w00 grid-h140 grid-box-transparent">
                        <div class="grid-box-wrap">
                            <div class="grid-tube" style="  ">
                                <div class="overlay"></div>
                                <div class="block-inner">
                                    <div class="row" style="color: #ffffff; text-align: center;">
                                        <div class="count">
                                            <?php
                                            $numberOfUsersQuery = "SELECT count(email) FROM register_table";
                                            $result = $conn->query($numberOfUsersQuery);
                                            $result = $result->fetch_array();
                                            $result = intval($result[0]);
                                            if ($result > 0) {
                                                echo "<h1 style='font-size: 3em;'>$result</h1>";
                                            }
                                            ?>

                                            <span style="float:center;letter-spacing: 3px; font-size: 1.1em;">ALUMNI REGISTERED</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <p style="margin-top:70px;margin-bottom:30px;"></p>
        <!-- cards for newletters and achive -->


        <div class="container  margin">
            <div class="row">
                <div class="col-md-6">
                    <div class="card widget-signups">
                        <div class="card-body">
                            <h4 class="card-title">News letters</h4>
                            <div class="button_01"><a href="files/Alumni News-Letter1.pdf">Volume 1</a></div>
                        </div>
                    </div>
                </div><br><br>
                <div class="col-md-6">
                    <div class="card widget-signups">
                        <div class="card-body">
                            <h4 class="card-title">Achivements</h4>
                            <div class="button_01"><a href="files/AlumniSuccessStoriesVolume-1(2020-21).pdf">Volume
                                    1</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- alumi -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container profile-page">
            <h2 style="text-align:center;margin-top:70px;color:#021b99;margin-bottom:30px;">EMINENT ALUMNI</h2>

            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="profile-image float-md-right"> <img src="assets\images\alumni1.png"
                                            alt=""> </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12"><br>
                                    <h4 class="m-t-0 m-b-0"><strong>Dr. Vandana Bhatt</strong></h4>
                                    <span class="job_post">Principal, Technological & Project Administration
                                        Consultant</span>
                                    <p> Diploma Civil Engineering (1974)</p>
                                    <p>"I owe for all this, to my most beloved Alma mater – Shri Bhagubhai Mafatlal
                                        Polytechnic, where I cherish floods of fond memories. For me it was my cradle
                                        from
                                        where I jumped to my dreams. I can only say, whatever may be my profile, I owe
                                        to
                                        the strong foundations I received at SBMP and for the affection and blessing of
                                        my
                                        friends, colleagues, Gurus at SBMP, and I have no words to say “Thank You”.'</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="profile-image float-md-right"> <img src="assets\images\alumni2.png"
                                            alt=""> </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12"><br>
                                    <h4 class="m-t-0 m-b-0"><strong>Kinjal Khandhar</strong></h4>
                                    <span class="job_post">Technical Program Manager, Google</span>
                                    <p>Batch: Diploma in Computer Engineering (2001)</p>
                                    <p>I feel privileged to be part of the first batch of Computer Engineering and was
                                        just amazed
                                        at the curriculum and how much teachers spent time on practical
                                        knowledge/programming languages/data structures.With the guidance of teachers
                                        and my hard-work, I made my parents proud of me and
                                        moreover made me believe in hard-work when I stood 1st in Mumbai and 5th in
                                        Maharashtra in Diploma in Computer Engineering. I was lucky to get admission
                                        into
                                        VJTI College</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="profile-image float-md-right"> <img src="assets\images\alumni3.png"
                                            alt=""> </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12"><br>
                                    <h4 class="m-t-0 m-b-0"><strong>Yash Vora</strong></h4>
                                    <span class="job_post">Software Engineer, Yahoo</span>
                                    <p>Batch: Diploma in Information Technology(2009)</p>
                                    <p>I had started my journey in the technical field right after my 10th grade in 2009
                                        when I was
                                        certain that I wanted to pursue my career in engineering. There was no other
                                        choice but
                                        SBM Polytechnic, which has a great alumni network, quality education, rigorous
                                        and
                                        practical curriculum and an amazing faculty. SBM Polytechnic helped me to laid
                                        the
                                        foundation of what I wanted to achieve and since then I never looked back.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-12">
                    <div class="card profile-header">
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="profile-image float-md-right"> <img src="assets\images\alumni4.png"
                                            alt=""> </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12"><br>
                                    <h4 class="m-t-0 m-b-0"><strong>Daksh Pandya</strong></h4>
                                    <span class="job_post">Managing Partner, Ekraft</span>
                                    <p>Diploma in Industrial Electronics (1999) </p>
                                    <p>After my schooling it was my dream to get admission in SBM Polytechnic,
                                        and at last I got admission, it was dream came true. I have my diploma in
                                        Industrial
                                        Electronics, then time it was four years course and we had in plant training in
                                        V and VIII
                                        semester, which helped me to get lot of industry exposure. After diploma, I
                                        completed
                                        Bachelors in Electronics and Diploma in Financial management.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include('footer.php');
?>