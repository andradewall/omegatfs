<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT ?>"><?php echo SITENAME; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample05">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT ?>/pages/about">About</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        <?php if (isset($_SESSION['user_id'])) : ?>
        <li class="nav-item mr-3">
          <span class="navbar-text">Hi, <?php echo $_SESSION['user_name'] ?>.</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT ?>/users/logout">Logout</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT ?>/users/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT ?>/users/login">Log In</a>
        </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>