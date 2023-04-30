<?php
  require_once 'connection.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username=$_POST['username'];
  }
?>
<link rel="stylesheet" href="../assets/bootstrap.css">

<div class="container">
  <h1 class="text center">Sign up!!!</h1>
  <form action="" method="post">
    <div class="form-group">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <div class="form-group">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
      <label for="conform" class="form-label">Conform Password</label>
      <input type="password" class="form-control" id="conform" name="conform">
    </div>
    <button type="submit" class="btn btn-primary">Sign up</button>
  </form>
</div>

