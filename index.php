<?php include("path.php")?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); ?>

<?php

$posts = array();
$postsTitle = 'Recent Posts';


if (isset($_POST['search-term'])){
$postsTitle =  'Search Results for "' . $_POST['search-term'] . '"';


    $posts =  searchPosts($_POST['search-term']);
} else
{
    $posts = getPublishedPosts();
}

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

            <?php foreach ($posts as $post) : ?>
                <div class="post">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image" width=100% height=60%>
                    <div class="post-info">
                        <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php  echo $post['title']; ?></a></h4

                        <i class=" "> <?php echo $post['username']; ?></i>

                        &nbsp;
                        <i class=""> <?php echo date('F j,Y',strtotime($post['created_at'])); ?></i>
                    </div>
                </div>
            <?php endforeach; ?>
                
</div>
          <!-- // Post Slider -->

            </div>
            <!-- // Post Slider -->
            <!-- Content -->
            <div class="content clearfix">
                <div class="content">
                    <div class="main-content">
                        <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>
                      
                        <?php foreach ($posts as $post) : ?>
                        
                            <div class="post clearfix">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                            <div class="post-preview">
                                <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php  echo $post['title']; ?></a>
                                </h2>
                                <i class=""> <?php echo $post['username']; ?></i>
                                &nbsp;
                                <i class=""> <?php echo date('F j,Y',strtotime($post['created_at'])); ?></i>
                                <p class="preview-text">
                                   <?php echo html_entity_decode(substr($post['body'], 0, 150)  . '...'); ?>

                                </p>
                                <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                            </div>
                        </div>
                            
                         <?php endforeach; ?>
                        
            </div>  
        </div>
                    <div class="sidebar">
                        <div class="section search">
                            <h2 class="section-title">Search</h2>
                            <form action="index.php" method="post">
                                <input type="text" name="search-term" class="text-input" placeholder="Search...">
                            </form>
                        </div>

                        <div class="section topics">
                            <h2 class="section-title">Topics</h2>
                            <ul>


                <?php foreach ($topics as $key => $topic):  ?>
                    <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id']?>"><?php  echo $topic['name']; ?></a></li>

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