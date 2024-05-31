<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    
    <title>Dashboard</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                <img src="img/logo.png" alt="logo">  
                </span>
                <div class="text header-text">
                    <span class="name">Hihi</span>
                    <span class="profession">Hehe</span>
                </div>
            </div>
            <i class="toggle">
                        <img src="img\arrow_icon.png" alt="icon">
            </i>
        </header>

        <div class="menu-bar">
            <div class="menu">
            <li class="search-box">
                    <i class="icon">
                        <img src="img\seacrh_icon.png" alt="icon">
                    </i>
                    <input type="search" placeholder="Search...">
                </li>
                <li class="nav-link">
                    <a href="#">
                    <i class="icon">
                        <img src="img\dashboard_icon.png" alt="icon">
                    </i>
                    <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                    <i class="icon">
                        <img src="img\trophy_icon.png" alt="icon">
                    </i>
                    <span class="text nav-text">Scores</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                    <i class="icon">
                        <img src="img\seacrh_icon.png" alt="icon">
                    </i>
                    <span class="text nav-text">Chuchu2</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                    <i class="icon">
                        <img src="img\seacrh_icon.png" alt="icon">
                    </i>
                    <span class="text nav-text">Chuchu3</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                    <i class="icon">
                        <img src="img\seacrh_icon.png" alt="icon">
                    </i>
                    <span class="text nav-text">Chuchu4</span>
                    </a>
                </li>

            </div>
            <div class="bottom-content">
                <li class="nav-link">
                    <a href="index.html">
                    <i class="icon">
                        <img src="img\logout_icon.png" alt="icon">
                    </i>
                    <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class = "moon">
                            <img src="img\moon_icon1.png" alt="icon">
                        </i>
                        <i class="sun">
                            <img src="img\sun_icon.png" alt="icon">
                        </i>
                    </div>
                        <span class="mode-text text">Dark Mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <script src="mode.js"></script>
</body>
</html>