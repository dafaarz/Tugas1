<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">Hustle University</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "welcome") ? 'active' : '' }}" href="/">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "about") ? 'active' : '' }}" href="/about">About </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>



