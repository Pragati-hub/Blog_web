<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); ?>
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
    <title>Admin Section-Add Topic</title>

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
            <a href="create.php" class="btn btn-big">Add Topic</a>
            <a href="index.php" class="btn btn-big">Manage Topics</a>
        </div>

        <div class="content">
            <h2 class="page-title">Add Topic</h2>
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

          <form action="create.php" method="post">

          <div>
              <label>Name</label>
              <input type="text" name="name" value=" <?php echo $name ?>" class="text-input">
          </div>
          <div>
            <label>Description</label>
            <textarea name = "description"  value=" <?php echo $description ?>" id="body" ></textarea>
        </div>

       <div>
        <button type="submit" name="add-topic" class="btn btn-big">Add Topic</button>
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