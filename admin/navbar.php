<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php">dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php" target="_blank">Visit website</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              frontend
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="guest_msg.php">guest message <span class="badge bg-secondary">4</span> </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item"  href="../banner.php">banner</a></li>
          </ul>
        </li>
      </ul>
      <div class="dropdown">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <?=$_SESSION['email']?>
        </button>
         <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
           <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="change_password.php">change password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger"  href="../logout.php">logout</a></li>
          </ul>
        </div>
      
    </div>
  </div>
</nav>