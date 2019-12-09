<?php
  if(isset($_SESSION['USER_SESSION'])){
?>

  <!-- NAVBAR LOGIN -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
    <?php echo $_SESSION['USER_SESSION']['full_name'];?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php" title="Новости"><i class="fas fa-newspaper"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php" title="Профиль"><i class="fas fa-user"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addblog.php" title="Добавить новость"><i class="fas fa-plus"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" title="Выход"><i class="fas fa-door-open"></i></a>
      </li>
    </ul>

<style>
  body {
    background-color: #d3dbf0; /* Цвет фона */
   }
</style>

    <?php
      $key = "";
      if(isset($_GET['key'])){
        $key = $_GET['key'];
      }
    ?>
     <!-- Поисковая строка (LOGIN) -->
    <form class="form-inline my-2 my-lg-0" title="Поиск" action="search.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search" name="key" value="<?php echo $key; ?>">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>
<?php
  }else{
?>
 <!-- NAVBAR LOGOUT -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">NewsToday</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php" title="Новости"><i class="fas fa-newspaper"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php" title="Войти"><i class="fas fa-sign-in-alt"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php" title="Регистрация"><i class="fas fa-user-plus"></i></a>
      </li>
    </ul>
    <?php
      $key = "";
      if(isset($_GET['key'])){
        $key = $_GET['key'];
      }
    ?>
     <!-- Поисковая строка (LOGOUT) -->
    <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search" name="key" value="<?php echo $key; ?>">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit" title="Поиск"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>
  <style>
   body {
    background-color: #d3dbf0; /* Цвет фона */
   }
  </style>

<?php
  }
?>