<?php
    require_once("vendor/Library.php");
    require_once("vendor/Database.php");
    session_start();
    $Library = new Library;
    $database = new Database;
    $student_news = $database->fetch_student_posts();
    $seminars_news = $database->fetch_seminars_posts();
    $affiliated_news = $database->fetch_affiliated_posts();
    $notices_news = $database->fetch_notices_posts();
    $scholarships_news = $database->fetch_scholarships_posts();
    $stages_event_news = $database->fetch_stages_event_posts();
    $Library->Header("Blog Management System");
    $Library->Head_Navbar();
?>
<div class="container" style="margin-top: 5.5rem!important;">
    <div class="mx-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card text-white" style="height: 400px;">
                    <div class="fade-slider">
                        <div class="holder fade-height">
                            <img class="inside-image" src="assets/Images/uni logo.jpg" style="width: 100%; height: 398px; border-radius: 5px;">
                            <div class="card-img-overlay" style="margin-top: 240px;">
                                <div class="mb-4"><span class="spane_of_latest">LATEST</span></div>
                                <div class="img_anchor_div">
                                    <a href="#" class="card-text img_anchor_text">This is a wider card with supporting text below as a natural lead-in to additional content.</a>
                                </div>
                                <span>Last updated 3 mins ago</span>
                            </div>
                        </div>
                        <div class="holder fade-height">
                            <img class="inside-image" src="assets/Images/uni event.jpg"
                                style="width: 100%; height: 398px; border-radius: 5px;">
                            <div class="card-img-overlay" style="margin-top: 240px;">
                                <div class="mb-4"><span class="spane_of_latest">LATEST</span></div>
                                <div class="img_anchor_div">
                                    <a href="#" class="card-text img_anchor_text">This is a wider card with supporting
                                        text below as a
                                        natural lead-in to additional content.</a>
                                </div>
                                <span>Last updated 3 mins ago</span>
                            </div>
                        </div>
                        <div class="holder fade-height">
                            <img class="inside-image" src="assets/Images/notification.jpg"
                                style="width: 100%; height: 398px; border-radius: 5px;">
                            <div class="card-img-overlay" style="margin-top: 240px;">
                                <div class="mb-4"><span class="spane_of_latest">LATEST</span></div>
                                <div class="img_anchor_div">
                                    <a href="#" class="card-text img_anchor_text">This is a wider card with supporting
                                        text below as a
                                        natural lead-in to additional content.</a>
                                </div>
                                <span>Last updated 3 mins ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-white" style="height: 200px;">
                            <img class="card-img" src="assets/Images/uni logo.jpg" style="height: 197px;">
                            <div class="card-img-overlay" style="margin-top: 85px;">
                                <div class="img_anchor_div">
                                    <a href="#" class="card-text img_anchor_text">This is a wider card with supporting
                                        text below.</a>
                                </div>
                                <span>Last updated 3 mins ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="card text-white" style="height: 200px;">
                            <img class="card-img" src="assets/Images/uni event.jpg" style="height: 198px;">
                            <div class="card-img-overlay" style="margin-top: 85px;">
                                <div class="img_anchor_div">
                                    <a href="#" class="card-text img_anchor_text">This is a wider card with supporting
                                        text below.</a>
                                </div>
                                <span>Last updated 3 mins ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-8">
                <div class="card card-tabs">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-12">
                                <span class="h2 fw-bold">Whats New</span>
                            </div>
                            <div class="col-lg-7 col-md-12">
                                <ul class="nav nav-tabs mt-2" style="border-bottom: none;">
                                    <li class="nav-item me-3">
                                        <a class="whats_new_tabs active_news_tab" id="events_tab" href="#events_tab_one"
                                            style="font-size: 17px;">Events</a>
                                    </li>
                                    <li class="nav-item me-3">
                                        <a class="whats_new_tabs" id="seminars_tab" href="#seminars_tab_one"
                                            style="font-size: 17px;">Seminars</a>
                                    </li>
                                    <li class="nav-item me-3">
                                        <a class="whats_new_tabs" id="campuses_tab" href="#campuses_tab_one"
                                            style="font-size: 17px;">Campuses</a>
                                    </li>
                                    <li class="nav-item me-3">
                                        <a class="whats_new_tabs" id="students_tab" href="#students_tab_one"
                                            style="font-size: 17px;">Students</a>
                                    </li>
                                    <li class="nav-item me-3">
                                        <a class="whats_new_tabs" id="stags_tab" href="#stags_tab_one"
                                            style="font-size: 17px;">Stags</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="custom-tabs-two-tabContent">
                            <div class="tab-pane fade active show" id="events_tab_one">
                                <div class="container">
                                    <div class="row mt-5">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="card ms-2" id="news_card" style="width: 18rem;">
                                                <div class="img-hover-zoom img-hover-zoom--basic">
                                                    <img src="assets/Images/uni event.jpg" class="card-img-top"
                                                        style="height: 160px;">
                                                </div>
                                                <div class="card-body">
                                                    <a href="#" class="card-text anchor_text fw-bold">Some quick example text to build on the card title.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img class="card-img" src="assets/Images/uni event.jpg"
                                                        style="width: 145px; height: 100px;">
                                                </div>
                                                <div class="col-md-7">
                                                    <h6 class="card-title news_title">Events</h6>
                                                    <a href="#" class="card-text anchor_text">Some quick example text to build on the card title and make up the bulk of the card's content.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-5">
                                                    <img class="card-img" src="assets/Images/uni event.jpg"
                                                        style="width: 145px; height: 100px;">
                                                </div>
                                                <div class="col-md-7">
                                                    <h6 class="card-title news_title">Events</h6>
                                                    <a href="#" class="card-text anchor_text">Some quick example text to build on the card title and make up the bulk of the card's content.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-5">
                                                    <img class="card-img" src="assets/Images/uni event.jpg"
                                                        style="width: 145px; height: 100px;">
                                                </div>
                                                <div class="col-md-7">
                                                    <h6 class="card-title news_title">Events</h6>
                                                    <a href="#" class="card-text anchor_text">Some quick example text to
                                                        build
                                                        on the card title and make up the bulk of the card's
                                                        content.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="#" class="view_more">VIEW ALL NEWS</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="seminars_tab_two">
                                <div class="container">
                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <div class="card ms-2" id="news_card" style="width: 18rem;">
                                                <div class="img-hover-zoom img-hover-zoom--basic">
                                                    <img src="assets/Images/uni logo.jpg" class="card-img-top"
                                                        style="height: 160px;">
                                                </div>
                                                <div class="card-body">
                                                    <a href="#" class="card-text anchor_text fw-bold">Some quick example
                                                        text to
                                                        build on the card title.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img class="card-img" src="assets/Images/uni logo.jpg"
                                                        style="width: 145px; height: 100px;">
                                                </div>
                                                <div class="col-md-7">
                                                    <h6 class="card-title news_title">Seminars</h6>
                                                    <a href="#" class="card-text anchor_text">Some quick example text to
                                                        build
                                                        on the card title and make up the bulk of the card's
                                                        content.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-5">
                                                    <img class="card-img" src="assets/Images/uni logo.jpg"
                                                        style="width: 145px; height: 100px;">
                                                </div>
                                                <div class="col-md-7">
                                                    <h6 class="card-title news_title">Seminars</h6>
                                                    <a href="#" class="card-text anchor_text">Some quick example text to
                                                        build
                                                        on the card title and make up the bulk of the card's
                                                        content.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-5">
                                                    <img class="card-img" src="assets/Images/uni logo.jpg"
                                                        style="width: 145px; height: 100px;">
                                                </div>
                                                <div class="col-md-7">
                                                    <h6 class="card-title news_title">Seminars</h6>
                                                    <a href="#" class="card-text anchor_text">Some quick example text to
                                                        build
                                                        on the card title and make up the bulk of the card's
                                                        content.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="#" class="view_more">VIEW ALL NEWS</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="campuses_tab_three">
                                <div class="container">
                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <div class="card ms-2" id="news_card" style="width: 18rem;">
                                                <div class="img-hover-zoom img-hover-zoom--basic">
                                                    <img src="assets/Images/notification.jpg" class="card-img-top"
                                                        style="height: 160px;">
                                                </div>
                                                <div class="card-body">
                                                    <a href="#" class="card-text anchor_text fw-bold">Some quick example
                                                        text to
                                                        build on the card title.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <a href="#" class="view_more">VIEW ALL NEWS</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="students_tab_four">
                                <div class="container">
                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <div class="card ms-2" id="news_card" style="width: 18rem;">
                                                <div class="img-hover-zoom img-hover-zoom--basic">
                                                    <img src="assets/Images/uni logo.jpg" class="card-img-top"
                                                        style="height: 160px;">
                                                </div>
                                                <div class="card-body">
                                                    <a href="#" class="card-text anchor_text fw-bold">Some quick example
                                                        text to
                                                        build on the card title.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img class="card-img" src="assets/Images/uni logo.jpg"
                                                        style="width: 145px; height: 100px;">
                                                </div>
                                                <div class="col-md-7">
                                                    <h6 class="card-title news_title">Student</h6>
                                                    <a href="#" class="card-text anchor_text">Some quick example text to
                                                        build
                                                        on the card title and make up the bulk of the card's
                                                        content.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-5">
                                                    <img class="card-img" src="assets/Images/uni logo.jpg"
                                                        style="width: 145px; height: 100px;">
                                                </div>
                                                <div class="col-md-7">
                                                    <h6 class="card-title news_title">Student</h6>
                                                    <a href="#" class="card-text anchor_text">Some quick example text to
                                                        build
                                                        on the card title and make up the bulk of the card's
                                                        content.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-5">
                                                    <img class="card-img" src="assets/Images/uni logo.jpg"
                                                        style="width: 145px; height: 100px;">
                                                </div>
                                                <div class="col-md-7">
                                                    <h6 class="card-title news_title">Student</h6>
                                                    <a href="#" class="card-text anchor_text">Some quick example text to
                                                        build
                                                        on the card title and make up the bulk of the card's
                                                        content.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="#" class="view_more">VIEW ALL NEWS</a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="stags_tab_five">
                                <div class="container">
                                    <div class="row mt-5">
                                        <div class="col-md-6">
                                            <div class="card ms-2" id="news_card" style="width: 18rem;">
                                                <div class="img-hover-zoom img-hover-zoom--basic">
                                                    <img src="assets/Images/uni logo.jpg" class="card-img-top"
                                                        style="height: 160px;">
                                                </div>
                                                <div class="card-body">
                                                    <a href="#" class="card-text anchor_text fw-bold">Some quick example
                                                        text to
                                                        build on the card title.</a><br>
                                                    <span class="mt-1">Last updated 3 mins ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <a href="#" class="view_more">VIEW ALL NEWS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="container">
                                <div class="mt-3">
                                    <span class="card-title h4">Announcements</span>
                                </div>
                                <div class="card text-white mt-3" style="height: 500px;">
                                    <img class="card-img" src="assets/Images/uni logo.jpg" style="height: 498px;">
                                    <div class="card-img-overlay" style="margin-top: 395px;">
                                        <div class="img_anchor_div">
                                            <a href="#" class="card-text img_anchor_text">This is a wider card with
                                                supporting text below.</a>
                                        </div>
                                        <span class="mt-1">Last updated 3 mins ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <img class="card-img" src="assets/Images/uni logo.jpg"
                                            style="width: 115px; height: 100px;">
                                    </div>
                                    <div class="col-md-8">
                                        <a href="#" class="card-text anchor_text">Some quick example text to build on
                                            the card
                                            title and make up the bulk of the card's content.</a><br>
                                        <span class="mt-1">Last updated 3 mins ago</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <img class="card-img" src="assets/Images/uni logo.jpg"
                                            style="width: 115px; height: 100px;">
                                    </div>
                                    <div class="col-md-8">
                                        <a href="#" class="card-text anchor_text">Some quick example text to build on
                                            the card
                                            title and make up the bulk of the card's content.</a><br>
                                        <span class="mt-1">Last updated 3 mins ago</span>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-4">
                                    <div class="col-md-4">
                                        <img class="card-img" src="assets/Images/uni logo.jpg"
                                            style="width: 115px; height: 100px;">
                                    </div>
                                    <div class="col-md-8">
                                        <a href="#" class="card-text anchor_text">Some quick example text to build on
                                            the card
                                            title and make up the bulk of the card's content.</a><br>
                                        <span class="mt-1">Last updated 3 mins ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-12">
                            <p class="card-text mb-4 h5 fw-bold">Student News</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-wrapper ms-5">
                                    <div class="slider">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($student_news)) { 
                                            $image = $row['image'];
                                            $ImageShow = str_replace("../", "", $image)
                                             ?>
                                            <div class="slider-item">
                                                <div class="slider-img">
                                                    <img src="<?php echo $ImageShow; ?>">
                                                </div>
                                                <div class="slider-caption">
                                                    <h4><a href="#" class="anchor_text">
                                                            <?php echo $row['description']; ?>
                                                        </a></h4>
                                                    <p>
                                                        <?php echo $row['date']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <a href="#" class="view_more">VIEW ALL STUDENT RELATED NEWS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-12">
                            <p class="card-text mb-4 h5 fw-bold">Seminars and Workshops</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-wrapper ms-5">
                                    <div class="slider">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($seminars_news)) { ?>
                                            <div class="slider-item">
                                                <div class="slider-img">
                                                    <img src="<?php echo $row['image']; ?>">
                                                </div>
                                                <div class="slider-caption">
                                                    <h4><a href="#" class="anchor_text">
                                                            <?php echo $row['description']; ?>
                                                        </a></h4>
                                                    <p>
                                                        <?php echo $row['date']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <a href="#" class="view_more">VIEW ALL SEMINAR AND WORKSHOP NEWS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-12">
                            <p class="card-text mb-4 h5 fw-bold">Affiliated Campus News</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-wrapper ms-5">
                                    <div class="slider">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($affiliated_news)) { ?>
                                            <div class="slider-item">
                                                <div class="slider-img">
                                                    <img src="<?php echo $row['image']; ?>">
                                                </div>
                                                <div class="slider-caption">
                                                    <h4><a href="#" class="anchor_text">
                                                            <?php echo $row['description']; ?>
                                                        </a></h4>
                                                    <p>
                                                        <?php echo $row['date']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <a href="#" class="view_more">VIEW ALL AFFILIATED CAMPUS NEWS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-12">
                            <p class="card-text mb-4 h5 fw-bold">Notices - Circulars - Announcements</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-wrapper ms-5">
                                    <div class="slider">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($notices_news)) { ?>
                                            <div class="slider-item">
                                                <div class="slider-img">
                                                    <img src="<?php echo $row['image']; ?>">
                                                </div>
                                                <div class="slider-caption">
                                                    <h4><a href="#" class="anchor_text">
                                                            <?php echo $row['description']; ?>
                                                        </a></h4>
                                                    <p>
                                                        <?php echo $row['date']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <a href="#" class="view_more">VIEW ALL NOTICES AND CIRCULARS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-12">
                            <p class="card-text mb-4 h5 fw-bold">Scholarships</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-wrapper ms-5">
                                    <div class="slider">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($scholarships_news)) { ?>
                                            <div class="slider-item">
                                                <div class="slider-img">
                                                    <img src="<?php echo $row['image']; ?>">
                                                </div>
                                                <div class="slider-caption">
                                                    <h4><a href="#" class="anchor_text">
                                                            <?php echo $row['description']; ?>
                                                        </a></h4>
                                                    <p>
                                                        <?php echo $row['date']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <a href="#" class="view_more">VIEW ALL SCHOLARSHIP NEWS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-12">
                            <p class="card-text mb-4 h5 fw-bold">STAGS Events and News</p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-wrapper ms-5">
                                    <div class="slider">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($stages_event_news)) { ?>
                                            <div class="slider-item">
                                                <div class="slider-img">
                                                    <img src="<?php echo $row['image']; ?>">
                                                </div>
                                                <div class="slider-caption">
                                                    <h4><a href="#" class="anchor_text">
                                                            <?php echo $row['description']; ?>
                                                        </a></h4>
                                                    <p>
                                                        <?php echo $row['date']; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <a href="#" class="view_more">VIEW ALL STAGS EVENTS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$Library->Footer();
?>