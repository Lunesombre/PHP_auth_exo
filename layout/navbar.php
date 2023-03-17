<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./assets/img/homepage_pic_unsplash.jpg" alt="sessions" width="100" class="rounded-5">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active text-bg-dark" aria-current="page" href='../exo_authentification/index.php'>Home</a>
            </li>
            <li class="nav-item">
                <?php
                ?>
                
                <?php 
                echo '<a class="nav-link text-bg-dark" ';
                if ($_SESSION['isConnected']=== true){
                    echo "href='../exo_authentification/logout.php'>Log out</a>";
                } else {
                    echo "href='../exo_authentification/login.php'>Login</a>";
                }
                ?>
            </li>
            <?php
            if ($_SESSION['isConnected']=== true){
                echo '<li class="nav-item">
                <a class="nav-link text-bg-dark" href="../exo_authentification/admin.php">Admin</a>
                </li>';
            }
            ?>
        </ul>
        </div>
    </div>
</nav>