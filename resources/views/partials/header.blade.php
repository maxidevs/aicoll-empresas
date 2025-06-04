<header>
  <h1 class="aicoll-body-seo">Aicoll</h1>
  <!-- ---------- Menu Horizontal Aicoll -------------- -->
  <nav id="menuHorizontalAicoll">
    <h2 class="aicoll-header-seo">Aicoll Menú Principal</h2>
    <!-- // menu-mobile -->
    <div class="mobile">
      <div class="header">
        <a href="index.php" rel="dofollow" class="aicoll-menu-horizontal__logo-mobile--container">
          <img loading="lazy" id="aicollLogoMobile" width="200px" height="60px"
            src="https://www.aicoll.co/landingpage/assets/img/logo_main.png" title="Aicoll" alt="Aicoll Logo Mobile" />
        </a>
        <div class="aicoll-menu-horizontal__items--nav-mobile-container">
          <button id="bmenu">
            <span class="material-icons">&#xe5d2;</span>
          </button>
        </div>
      </div>
      <div class="links">
        <a href="index.php" rel="dofollow"> Inicio </a>
        <a href="services.php" rel="dofollow"> Servicios </a>
        <a href="empresas/empresa-login.php" rel="dofollow" class="aicoll-menu-horizontal__items--a-mobile-container">
          <span class="material-icons">&#xe0af;</span>
          Ingresar </a>
        <a href="manager/gestor-login.php" rel="nofollow" class="aicoll-menu-horizontal__items--a-mobile-container">
          <span class="material-icons">&#xe8d3;</span>
          Gestor </a>
      </div>
    </div>
    <!-- // menu-desktop -->
    <ul>
      <li class="logo-item">
        <a href="index.php" rel="dofollow" class="aicoll-menu-horizontal__logo--container">
          <img loading="lazy" id="aicollLogoDesktop" width="250px" height="75px"
            src="https://www.aicoll.co/landingpage/assets/img/logo_main.png" title="Aicoll" alt="Aicoll Logo" />
        </a>
      </li>
    </ul>
    @if (Route::is('welcome'))
      <ul>
        <li>
          <a href="{{ route('companies.index') }}" class="link link-companies" rel="dofollow">
            <img data-aos="zoom-in" data-aos-duration="1000" loading="lazy" class="aicoll-menu-horizontal__module-img"
              id="aicollModuloEmpresa" src="https://www.aicoll.co/landingpage/assets/img/empresa.png" width="47"
              height="41" alt="Módulo Empresa" />
            Empresas
          </a>
        </li>
      </ul>
    @else
      <ul>
        <li>
          <a href="{{ route('welcome') }}" class="link link-home !flex items-center justify-center flex-col" rel="dofollow">
            <img data-aos="zoom-in" data-aos-duration="1000" loading="lazy" class="!opacity-100 !transform-none"
              id="aicollModuloEmpresa" src="https://www.aicoll.co/landingpage/assets/img/empresa.png" width="60"
              height="60" alt="Módulo Empresa" />
            <span>Home</span>
          </a>
        </li>
      </ul>
    @endif
  </nav>
  <div class="aicoll-menu-horizontal__margin--bottom">
  </div>
</header>
