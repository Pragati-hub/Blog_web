<?php include("path.php")?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 

// $posts = selectAll('posts', ['published' ==> 1]);
// dd($posts);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/dashboard.css">

    <!-- lora font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <title>Blog</title>

</head>

<body>
   <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
   <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

  
  
    <!-- Page Wrapper  -->
    <div class="page-wrapper">
        <!-- Post Slider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <img class="prev" src="assets/images/left-arrow.png" alt="Logo" height="20px" />
            <img class="next" src="assets/images/right-arrow.png" alt="Logo" height="20px" />

            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/img-1.jpg" alt="" class="slider-image" width=100% height=60%>
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class=""> Pragati Gupta</i>
                        &nbsp;
                        <i class=""> Mar 8, 2019</i>


                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/img-1.jpg" alt="" class="slider-image" width=100% height=60%>
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class=""> Pragati Gupta</i>
                        &nbsp;
                        <i class=""> Mar 8, 2019</i>


                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/img-1.jpg" alt="" class="slider-image" width=100% height=60%>
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class=""> Pragati Gupta</i>
                        &nbsp;
                        <i class=""> Mar 8, 2019</i>


                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/img-1.jpg" alt="" class="slider-image" width=100% height=60%>
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class=""> Pragati Gupta</i>
                        &nbsp;
                        <i class=""> Mar 8, 2019</i>


                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/img-1.jpg" alt="" class="slider-image" width=100% height=60%>
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class=""> Pragati Gupta</i>
                        &nbsp;
                        <i class=""> Mar 8, 2019</i>


                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/img-1.jpg" alt="" class="slider-image" width=100% height=60%>
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class=""> Pragati Gupta</i>
                        &nbsp;
                        <i class=""> Mar 8, 2019</i>


                    </div>
                </div>
                <!-- // Post Slider -->

            </div>
            <!-- // Post Slider -->
            <!-- Content -->
            <div class="content clearfix">
                <div class="content">
                    <div class="main-content">
                        <h1 class="recent-post-title">Recent Posts</h1>

                        <div class="post">
                            <img src="assets/images/img-6.jpg " alt="" class="post-image">
                            <div class="post-preview">
                                <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a>
                                </h2>
                                <i class=""> Pragati Gupta</i>
                                &nbsp;
                                <i class=""> Mar 11, 2019</i>
                                <p class="preview-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Exercitationem optio possimus a inventore maxime laborum.
                                </p>
                                <a href="single.php" class="btn read-more">Read More</a>
                            </div>
                        </div>

                        <div class="post">
                            <img src="assets/images/img-6.jpg " alt="" class="post-image">
                            <div class="post-preview">
                                <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a>
                                </h2>
                                <i class=""> Pragati Gupta</i>
                                &nbsp;
                                <i class=""> Mar 11, 2019</i>
                                <p class="preview-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Exercitationem optio possimus a inventore maxime laborum.
                                </p>
                                <a href="single.php" class="btn read-more">Read More</a>
                            </div>
                        </div>

                        <div class="post">
                            <img src="assets/images/img-6.jpg " alt="" class="post-image">
                            <div class="post-preview">
                                <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a>
                                </h2>
                                <i class=""> Pragati Gupta</i>
                                &nbsp;
                                <i class=""> Mar 11, 2019</i>
                                <p class="preview-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Exercitationem optio possimus a inventore maxime laborum.
                                </p>
                                <a href="single.php" class="btn read-more">Read More</a>
                            </div>
                        </div>

                        <div class="post">
                            <img src="assets/images/img-6.jpg " alt="" class="post-image">
                            <div class="post-preview">
                                <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a>
                                </h2>
                                <i class=""> Pragati Gupta</i>
                                &nbsp;
                                <i class=""> Mar 11, 2019</i>
                                <p class="preview-text">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Exercitationem optio possimus a inventore maxime laborum.
                                </p>
                                <a href="single.php" class="btn read-more">Read More</a>
                            </div>
                        </div>


                    </div>
                    <div class="sidebar">
                        <div class="section search">
                            <h2 class="section-title">Search</h2>
                            <form action="index.html" method="post">
                                <input type="text" name="search-term" class="text-input" placeholder="Search...">
                            </form>
                        </div>

                        <div class="section topics">
                            <h2 class="section-title">Topics</h2>
                            <ul>


                <?php foreach ($topics as $key => $topic):  ?>
                    <li><a href="#"><?php echo $topic['name']; ?></a></li>
                 <?php endforeach; ?>

                               



                                <!-- <li><a href="#">Quotes</a></li>
                                <li><a href="#">Fiction</a></li>
                                <li><a href="#">Biography</a></li>
                                <li><a href="#">Motivation</a></li>
                                <li><a href="#">Inspiration</a></li>
                                <li><a href="#">Life lessons</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- // Content -->


            </div>

        </div>
    </div>
    <!-- // Page Wrapper -->
    
  <!-- Footer -->
  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>


    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Slick corousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- custom script -->
    <script src="assets/js/script.js"></script>
</body>

</html>