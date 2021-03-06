<?php include 'head.php';?>
<?php include 'page-setup.php';?>

<div class="container">
    <div class="row">
        <div class="main col-sm-10">
            <div class="header col-sm-12">
                <h1 class="h1 col-sm-10">Dashboard</h1>
                <?php include 'header.php'?>
            </div>

            <div id="dashboard">
                <div class="profile-completion-section col-sm-12">
                    <div class="profile-completion-header">
                        <h2>Profile Completion</h2>
                        <div class="close-btn">
                            <div class="fa fa-close"></div>
                        </div>
                    </div>
                    <div class="completion-level">
                        <div class="circle">
                            <div class="circle-fg"></div>
                            <div class="circle-bg"></div>
                        </div>
                        <p class="circle-percent">80%</p>
                    </div>
                    <div class="complete-profile">
                        <a href="#">Complete your profile
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                </div>

                <div class="curent-assignment-section col-sm-12">
                    <div class="assignment-completion-header">
                        <h2>Current Assignment</h2>
                        <div class="type-of-job">
                            <h3>Freelance</h3>
                        </div>
                        <div class="details">
                            <div class="company">
                                <span class="fa fa-group"></span>ScanCommcerce A/S</a>
                            </div>
                            <div class="email">
                                <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">
                                    <span class="fa fa-envelope"></span>adv@scancommerce.dk</a>
                            </div>
                        </div>
                    </div>
                    <div class="assignment-completion-level">
                        <div class="completion-line">
                            <div class="line-fg"></div>
                            <div class="line-bg"></div>
                        </div>
                        <p class="days-left">6 Days Left</p>
                    </div>
                </div>


                <div class="job-highlight-section col-sm-12">
                    <h2>New Jobs For You</h2>

                    <!-- #1 -->
                    <div class="job-container col-md-4 col-sm-6">
                        <a href="job-detail.php">
                            <h4 class="job-title">Angular Developer</h4>
                            <p class="job-company">
                                <span class="fa fa-group"></span>ScanCommerce A/S</p>
                            <p class="job-location">
                                <span class="fa fa-map-marker"></span>Aarhus, Denmark</p>
                            <div class="job-description-container">
                                <p class="detail">Description</p>
                                <p class="job-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi neque neque, tempus nec iaculis at, consequat auctor metus.
                                    Maecenas in est vel dolor laoreet scelerisque et euismod dui. Mauris vulputate metus
                                    sed sapien volutpat, ut dapibus elit congue. Donec quis dapibus justo.
                                </p>
                            </div>
                            <a class="read-more" href="#">Read More
                                <span class="fa fa-angle-right"></span>
                            </a>
                        </a>
                    </div>

                    <!-- #2 -->
                    <div class="job-container col-md-4 col-sm-6">
                        <a href="job-detail.php">
                            <h4 class="job-title">Angular Developer</h4>
                            <p class="job-company">
                                <span class="fa fa-group"></span>ScanCommerce A/S</p>
                            <p class="job-location">
                                <span class="fa fa-map-marker"></span>Aarhus, Denmark</p>
                            <div class="job-description-container">
                                <p class="detail">Description</p>
                                <p class="job-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi neque neque, tempus nec iaculis at, consequat auctor metus.
                                    Maecenas in est vel dolor laoreet scelerisque et euismod dui. Mauris vulputate metus
                                    sed sapien volutpat, ut dapibus elit congue. Donec quis dapibus justo.
                                </p>
                            </div>
                            <a class="read-more" href="#">Read More
                                <span class="fa fa-angle-right"></span>
                            </a>
                        </a>
                    </div>

                    <!-- #3 -->
                    <div class="job-container col-md-4 col-sm-6">
                        <a href="job-detail.php">
                            <h4 class="job-title">Angular Developer</h4>
                            <p class="job-company">
                                <span class="fa fa-group"></span>ScanCommerce A/S</p>
                            <p class="job-location">
                                <span class="fa fa-map-marker"></span>Aarhus, Denmark</p>
                            <div class="job-description-container">
                                <p class="detail">Description</p>
                                <p class="job-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi neque neque, tempus nec iaculis at, consequat auctor metus.
                                    Maecenas in est vel dolor laoreet scelerisque et euismod dui. Mauris vulputate metus
                                    sed sapien volutpat, ut dapibus elit congue. Donec quis dapibus justo.
                                </p>
                            </div>
                            <a class="read-more" href="#">Read More
                                <span class="fa fa-angle-right"></span>
                            </a>
                        </a>
                    </div>

                </div>



                <div class="news-highlight-section col-sm-12">
                    <h2>New Jobs For You</h2>

                    <div class="news-container col-md-4 col-sm-6">
                        <a href="news-detail.php">
                            <div class="news-img">
                                <img src="assets/img/ilya-pavlov-87438.jpg" alt="news image">
                            </div>
                            <h4 class="news-title">Behind the Code</h4>
                            <p class="news-author">
                                <span class="fa fa-user"></span>Robert Johnson</p>
                            <p class="news-date">
                                <span class="fa fa-calendar"></span>17/12/2017</p>
                            <div class="news-footer">
                                <a class="read-more" href="#">Read More
                                    <span class="fa fa-angle-right"></span>
                                </a>
                                <div class="category">
                                    <span class="fa fa-tag"></span>Tech</div>
                            </div>
                        </a>
                    </div>

                    <div class="news-container col-md-4 col-sm-6">
                        <a href="news-detail.php">
                            <div class="news-img">
                                <img src="assets/img/ilya-pavlov-87438.jpg" alt="news image">
                            </div>
                            <h4 class="news-title">Behind the Code</h4>
                            <p class="news-author">
                                <span class="fa fa-user"></span>Robert Johnson</p>
                            <p class="news-date">
                                <span class="fa fa-calendar"></span>17/12/2017</p>
                            <div class="news-footer">
                                <a class="read-more" href="#">Read More
                                    <span class="fa fa-angle-right"></span>
                                </a>
                                <div class="category">
                                    <span class="fa fa-tag"></span>Tech</div>
                            </div>
                        </a>
                    </div>

                    <div class="news-container col-md-4 col-sm-6">
                        <a href="news-detail.php">
                            <div class="news-img">
                                <img src="assets/img/ilya-pavlov-87438.jpg" alt="news image">
                            </div>
                            <h4 class="news-title">Behind the Code</h4>
                            <p class="news-author">
                                <span class="fa fa-user"></span>Robert Johnson</p>
                            <p class="news-date">
                                <span class="fa fa-calendar"></span>17/12/2017</p>
                            <div class="news-footer">
                                <a class="read-more" href="#">Read More
                                    <span class="fa fa-angle-right"></span>
                                </a>
                                <div class="category">
                                    <span class="fa fa-tag"></span>Tech</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>