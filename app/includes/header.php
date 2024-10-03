<header>
        <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
            <h1 class="logo-text"><span>Blog</span>Inspires</h1>
        </a>
        <img class="menu-img" src="assets/images/menu-bar.png" alt="Logo" width="20" height="20">
        <ul class="nav">
            <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a>
                <!-- <ul style="left:900px;">
            <li><a href="#">Landing Page</a></li>
            <li><a href="#">Team</a></li>   
        </ul> -->
            </li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./service.php">Services</a></li>
                        <?php if  (isset($_SESSION['id'])):  ?>
                <li><a href="#">
                    <?php echo $_SESSION['username']; ?>
                    <img class="arrow" src="assets/images/down-arrow.png" alt="Logo" height="20px"
                        style="position: relative; left: 10px;">
                </a>
                <ul>
                    <?php if($_SESSION['admin']): ?>
                    <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
                    <?php endif; ?>

                    <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
                </ul>
            </li>
            <?php else: ?>
               <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
               <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
               
            <?php endif; ?>   
        </ul>
    </header>
