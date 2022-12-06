<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="/"> <img src="img/Logo.png" alt="Mandala Projects" width="142px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
            <style>
                .nav-link {
                    color: black;
                }
        
                .nav-item>a:hover {
                    color: #2EB104;
                }
        
                /*code to change background color*/
                .navbar-nav>.active>a {
                    background-color: #C0C0C0;
                    color: #2EB104;
                    font-weight: bold;
                }
            </style>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Mandala Projects" ? 'active' : '') }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Ruang Lingkup Layanan" ? 'active' : '') }}" href="/layanan">Lingkup Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Portofolio" ? 'active' : '') }}" href="/portofolio">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About" ? 'active' : '') }}" href="/about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>