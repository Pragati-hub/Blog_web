<?php include("../../path.php"); ?>
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
    <title>Admin Section-manage Users</title>

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
            <a href="create.php" class="btn btn-big">Add User</a>
            <a href="index.php" class="btn btn-big">Manage Users</a>
        </div>

        <div class="content">
            <h2 class="page-title">Manage Users</h2>
            <table>
                <thead>
                    <th>SN</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pragati</td>
                        <td>Admin</td>
                        <td><a href="#" class="edit">edit</a></td>
                        <td><a href="#" class="delete">delete</a></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Rashika</td>
                        <td>Author</td>                        
                        <td><a href="#" class="edit">edit</a></td>
                        <td><a href="#" class="delete">delete</a></td>

                    </tr>
                    
                </tbody>
            </table>
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
    <script src="../../script.js"></script>
</body>

</html>