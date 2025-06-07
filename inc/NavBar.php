<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="blog.php">
            <img src="img/logo_wobg.png" alt="logo" style="width:90px; height:90px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.php">Category</a>
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <form class="d-flex me-3" role="search" method="GET" action="blog.php">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <?php
                // Assuming $logged is defined and holds the login status
                if ($logged) {
                ?>
                    <ul class="navbar-nav mb-2 mb-lg-0"> <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="profile.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i> <?= htmlspecialchars($_SESSION['username'] ?? 'Guest') ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end"> <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                <li><a class="dropdown-item" href="userprofile.php">Profile</a></li>
                            </ul>
                        </li>
                    </ul>
                <?php
                } else {
                ?>
                    <ul class="navbar-nav mb-2 mb-lg-0"> <li class="nav-item">
                            <a class="nav-link" href="login.php">Login | Signup</a>
                        </li>
                    </ul>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</nav>