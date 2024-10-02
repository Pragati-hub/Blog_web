<?php include("path.php") ?>
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
    <title>Single Post</title>

</head>

<body>
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

    <!-- Page Wrapper  -->
    <div class="page-wrapper">
            <!-- Content -->
            <div class="content clearfix">
                <div class="content">
                    <!-- Main content -->
                    <div class="main-content single">
                <h1 class="post-title">This is the titile of the Post</h1>
                        
                <div class="post-content">
                    <p>One day, your entire life will flash before your eyes, and in that moment, all the decisions, memories, and experiences will unfold like a movie. It’s a moment we all will face, and it will force us to reflect on how we’ve lived, loved, and learned.</p>

                    <p>When that moment arrives, what do you want to see? Will it be filled with regrets for the risks you didn’t take or the dreams you let slip away? Or will it be a tapestry of bold choices, of love given and received, and the pursuit of your passions?</p>
                    
                    <p>Every day is a new page in that story. The actions you take, the words you say, and the people you touch all contribute to the narrative that will eventually define your life. You hold the pen—how will you write your story?</p>
                    
                    <p>It’s easy to get caught up in the routine of life, letting days blur into weeks, and weeks into years. But remember, the moments that will flash before your eyes will not be the mundane ones. They will be the moments where you were truly alive—when you followed your heart, pursued your purpose, and connected deeply with others.</p>
                    
                    <p>The things we often worry about—like material success, recognition, or superficial achievements—won’t matter in that final reel. What will matter are the relationships you nurtured, the lives you impacted, and the legacy you left behind. Did you live authentically? Did you give love freely? Did you chase the dreams that set your soul on fire?</p>
                    
                    <p>Now is the time to live intentionally. Don’t wait for the distant future to create the life you desire. Live with purpose now, so that when your life does flash before your eyes, you can smile knowing you made the most of every moment.</p>
                    
                    <p>In the end, it’s not the years in your life that count, but the life in your years. Make every moment count, and let your story be one worth watching.</p>
                    
                </div>

                    </div>
                      <!-- //Main content -->
                    <!-- Sidebar -->
                    <div class="sidebar single">
                        <div  class="section popular">
                     <h2 class="section-title">Popular</h2>


                     <div  class="post clearfix">
                        <img src="assets/images/img-8.jpg" alt=""/>
                        <a href="" class="title"><h4>How to overcome your fears</h4></a>
                     </div>

                     <div  class="post clearfix">
                        <img src="assets/images/img-8.jpg" alt=""/>
                        <a href="" class="title"><h4>How to overcome your fears</h4></a>
                     </div>

                     <div  class="post clearfix">
                        <img src="assets/images/img-8.jpg" alt=""/>
                        <a href="" class="title"><h4>How to overcome your fears</h4></a>
                     </div>


                     <div  class="post clearfix">
                        <img src="assets/images/img-8.jpg" alt=""/>
                        <a href="" class="title"><h4>How to overcome your fears</h4></a>
                     </div>
                    
                    </div>

                    
                        <div class="section topics">
                            <h2 class="section-title">Topics</h2>
                            <ul>
                                <li><a href="#">Poems</a></li>
                                <li><a href="#">Quotes</a></li>
                                <li><a href="#">Fiction</a></li>
                                <li><a href="#">Biography</a></li>
                                <li><a href="#">Motivation</a></li>
                                <li><a href="#">Inspiration</a></li>
                                <li><a href="#">Life lessons</a></li>
                            </ul>
                        </div>
                    </div>
                     <!-- //Sidebar -->
                </div>
                <!-- // Content -->


            </div>

        </div>
    </div>
    <!-- // Page Wrapper -->
    <!-- footer -->
    <?php include("app/includes/footer.php"); ?>



    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Slick corousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- custom script -->
    <script src="script.js"></script>
</body>

</html>