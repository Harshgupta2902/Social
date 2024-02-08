<header class="navbar-light header-static bg-transparent">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index-2.html">
        <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
        <img class="dark-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">		
      </a>

    <button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-animation">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav navbar-nav-scroll me-auto">
        <li class="nav-item">
          <a class="nav-link" href="blog.html">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="settings.html">Security</a> 
        </li>
      </ul>
    </div>

    <div class="ms-3 ms-lg-auto">
      <a class="btn btn-dark" href="<?= base_url('sign-in') ?>" target="blank"> Login </a>
    </div>
    </div>
  </nav>
</header>