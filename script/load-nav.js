const fileName = location.href.split("/").slice(-1);

const loadLogin = () => {
  if (fileName == "" || fileName == "index.php" || fileName == "#") {
    var targetLogin = 'p/_login.php';
    var targetRegister = 'p/_register.php';
  } else {
    var targetLogin = '_login.php';
    var targetRegister = '_register.php';
  }
  const loginForm = `<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Login
  </a>
  <form action="${targetLogin}" method="POST" class="dropdown-menu" id="login-form">
    <input class="form-control login-input" type="text" name="username" placeholder="Username">
    <input class="form-control login-input" type="password" name="password" placeholder="Password">
    <button class="btn btn-primary" id="login-btn" type="submit">Login</button>
  </form>
  </li>

  <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Register
  </a>
  <form action="${targetRegister}" method="POST" class="dropdown-menu" id="login-form">
    <input class="form-control login-input" type="text" name="username" placeholder="Username">
    <input class="form-control login-input" type="password" name="password" placeholder="Password">
    <button class="btn btn-primary" id="login-btn" type="submit">Register</button>
  </form>
  </li>
  `;
  document.getElementById('nav-list').innerHTML += loginForm;
};

const loadProfile = () => {
  if (fileName == "" || fileName == "index.php" || fileName == "#") {
    var targetLogout = 'p/_logout.php';
    var targetFav = 'p/favorite.php';
  } else {
    var targetLogout = '_logout.php';
    var targetFav = 'favorite.php';
  }
  document.getElementById('nav-list').innerHTML += `<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Profile
  </a>
    <ul class="dropdown-menu profile-menu">
      <li class="dropdown-item"><a href="${targetFav}">Favorites</a></li>
      <li class="dropdown-item"><a href="${targetLogout}">Logout</a></li>
    </ul>
  </li>`;
}
