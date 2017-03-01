<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
  <?php require_once './dist/css/style.critical.min.css'; ?>
  </style>
  <title>CSS Sidebar</title>
</head>
<body>
  <div class="wrapper">
    <input type="checkbox" id="menuToggler" class="input-toggler" value="1" autofocus="true"/>
    <label for="menuToggler" id="menuTogglerLabel" class="menu-toggler" role="button" aria-pressed="false" aria-expanded="false" aria-label="Navigation button">
      <span class="menu-toggler__line"></span>
      <span class="menu-toggler__line"></span>
      <span class="menu-toggler__line"></span>
    </label>
    <nav id="sidebar" class="sidebar" role="navigation" aria-labelledby="menuTogglerLabel" aria-hidden="true">
      <ul id="menubar" class="menu" role="menubar" aria-orientation="vertical">
        <li class="menu__item" role"none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">Home</a></li>
        <li class="menu__item" role"none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">Blog</a></li>
        <li class="menu__item" role"none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">Portfolio</a></li>
        <li class="menu__item" role"none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">About</a></li>
        <li class="menu__item" role"none"><a class="menu__link" href="#" role="menuitem" tabindex="-1">Contact</a></li>
      </ul>
    </nav>
    <main class="content">
      <h1>CSS sidebar toggle</h1>
      <p>Pure CSS solution for hiding and showing sidebar.</p>
    </main>
  </div>
  <a class="sb-link" href="//silvestarbistrovic.from.hr/en/articles/css-sidebar-toggle/">silvestarbistrovic.from.hr</a>
  <link rel="stylesheet" href="/dist/css/style.min.css">
</body>
</html>
