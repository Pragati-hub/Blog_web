<header>
        <a class="logo" href="<?php echo BASE_URL . '/index.php' ?>">
            <h1 class="logo-text"><span>Blog</span>Inspires</h1>
        </a>
        <img class="menu-img" src="../../assets/images/menu-bar.png" alt="Logo" width="20" height="20">
        <ul class="nav">
           <?php if (isset($_SESSION['username'])): ?>

            <li><a href="#">
                    <?php echo $_SESSION['username']; ?>
                    <img class="arrow" src="../../assets/images/down-arrow.png" alt="Logo" height="20px"
                        style="position: relative; left: 10px;">
                </a>
                <ul>
                    <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
                </ul>
            </li>

            <?php endif; ?>
        </ul>
    </header>