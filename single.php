<?php include("path.php") ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); 

if (isset($_GET['id'])){
  $post = selectOne('posts' , ['id' => $_GET['id']]);
}
$topics =  selectAll('topics');
$posts = selectAll('posts',['published' => 1]);

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
    <title><?php echo $post['title']; ?> | BlogInspires</title>

 
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
                <h1 class="post-title"><?php echo $post['title']; ?></h1>
                        
                <div class="post-content">
               <?php echo html_entity_decode($post['body']) ?>        
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
                            <?php foreach ($topics as $topic): ?>

                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id']?>"><?php  echo $topic['name']; ?></a></li>

                               <?php endforeach  ?>
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