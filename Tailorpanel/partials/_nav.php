    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="assetsForSideBar/img/perfil.jpg" alt="">
        </div>
    </header>

    <div class="l-navbar bg-info" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="index.php" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">Tailor panel</span>
                </a>

                <div class="nav__list">
                    <a href="index.php" class="nav__link nav-home">
                        <i class='bx bx-grid-alt nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>
                    <a href="index.php?page=orderManage" class="nav-orderManage nav__link ">
                        <i class='bx bx-bar-chart-alt-2 nav__icon'></i>
                        <span class="nav__name">Orders</span>
                    </a>
                    <a href="index.php?page=categoryManage" class="nav__link nav-categoryManage">
                        <i class='bx bx-folder nav__icon'></i>
                        <span class="nav__name">Create post</span>
                    </a>
                 


                    <a href="partials/_logout.php" class="nav__link">
                        <i class='bx bx-log-out nav__icon'></i>
                        <span class="nav__name">Log Out</span>
                    </a>

                </div>
            </div>
        </nav>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
<?php $page = isset($_GET['page']) ? $_GET['page'] :'home'; ?>
$('.nav-<?php echo $page; ?>').addClass('active')
    </script>