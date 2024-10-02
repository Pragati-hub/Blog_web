<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <!-- admin css -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <!-- lora font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.css">
    <title>Admin Section-Edit Posts</title>

</head>
<body>
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <!-- Admin Page Wrapper  -->
    <div class="admin-wrapper">
    
    <!-- Left sidebar -->
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!-- Admin content -->
        <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big">Add Post</a>
            <a href="index.php" class="btn btn-big">Manage Posts</a>
        </div>

        <div class="content">
            <h2 class="page-title">Edit Posts</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

          <form action="edit.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $id?>" >
          <div>
              <label>Title</label>
              <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
          </div>
          <div>
            <label>Body</label>
            <textarea name="body" id="body" value="<?php echo $body ?> "></textarea>
        </div>

         <div>
            <label>Image</label>
            <input type="file" name="image"  class="text-input">
         </div>
        <div>
            <label>Topic</label>
            <select name="topic_id" class="text-input">
            <option value="Poetry"></option>
                <?php foreach ($topics as $key => $topic): ?>
                    <?php if (!empty($topic_id) && $topic_id  == $topic['id']): ?>
                        <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                  <?php else: ?>
                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                    <?php endif; ?>

                <?php  endforeach; ?>

                
            </select>
        </div>
        <div>
            
                <?php if (empty($published) && $published == 0): ?>

                 
                    <label>   
                <input type="checkbox" name="published">
               Publish
            </label>
                    <?php else: ?>

                        
                    <label>   
                <input type="checkbox" name="published" checked>
               Publish
            </label>
                        <?php endif;  ?>
        </div>

       <div>
        <button type="submit" value=""update-post class="btn btn-big">Edit Post</button>
    </div>
          </form>
        </div>
           </div>
        </div>
          <!-- //Admin content -->

      <!--// Left sidebar -->

    <!-- // Page Wrapper -->


 

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom script -->
    <script src="../../assets/js/script.js"></script>
    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.1/"
            }
        }
    </script>
    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Paragraph,
            Bold,
            Italic,
            Font
        } from 'ckeditor5';
        ClassicEditor
            .create( document.querySelector( '#body' ), {
                plugins: [ Essentials, Paragraph, Bold, Italic, Font ],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                ]
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>

</html>