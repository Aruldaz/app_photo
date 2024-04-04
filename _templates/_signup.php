<?php
print_r($_POST);
$signup = false;
if (isset($_POST['username']) and isset($_POST['pwd']) and isset($_POST['mail_id']) and isset($_POST['phone'])) {
  $username = $_POST['username'];
  $password = $_POST['pwd'];
  $email = $_POST['mail_id'];
  $phone = $_POST['phone'];
  $error = signup($username, $password, $email, $phone);
  $signup = true;
}
?>
<?php
if ($signup) {
  if (!$error) {
?>
    <main class="container">
      <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>You have been sucussfully signup</h1>
        <p class="lead">You have been sucussfully signup.<a href="/login.php">here</a>.</p>
        <!-- <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a> -->
      </div>
    </main>
  <?php
  } else {
  ?>
    <main class="container">
      <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>Signup fail</h1>
        <p class="lead">Something went wrong, <?= $error ?>
        </p>
      </div>
    </main>
  <?php
  }
} else {
  ?>
  <main class="form-signup w-100 m-auto">

    <form method="post" action="signup.php">
      <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

      <div class="form-floating">
        <input name="username" type="text" class="form-control" id="floatingInputusername" placeholder="USername">
        <label for="floatingInputusername">Username</label>
      </div>
      <div class="form-floating">
        <input name="phone" type="phone" class="form-control" id="floatingInputphone" placeholder="phone">
        <label for="floatingInputphone">Phone</label>
      </div>
      <div class="form-floating">
        <input name="mail_id" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="pwd" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>
      <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
      <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
    </form>
  </main>
<?php }
?>