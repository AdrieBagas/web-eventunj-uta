<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <h4 class="navbar-brand" href="/home"><i><b>EventUNJ</b></i></h4>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-8 mt-2">
          <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" " href="/home"><h6>Home</h6></a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{ ($title === "Event") ? 'active' : '' }}" href="/event"><h6>Event</h6></a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{ ($title === "Reviews") ? 'active' : '' }}" href="/reviews"><h6>Reviews</h6></a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about"><h6>About Us</h6></a>
          </li>
        </ul>
        <form>
        <a href="/login" type="button" class="btn btn-primary btn-outline-light">Login </a>
        <a href="/signup" type="button" class="btn btn-white btn-outline-light">Sign Up</a>
        </form>
      </div>
    </div>
  </nav>