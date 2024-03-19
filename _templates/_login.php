<?php
$username = $_POST['mail_id'];
$password = $_POST['pwd'];
$results = validate_credentials($username, $password);
if ($results) {
?>
<main class="container">
  <div class="bg-body-tertiary p-5 rounded mt-3">
    <h1>Welcome</h1>
    <p class="lead">You have been sucussfully logIn.</p>
    <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
  </div>
</main>
<?php


} else {  ?>

  <main class="form-signin w-100 m-auto">
    <form method="post" action="login.php">
      <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

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
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
    </form>
  </main>

<?php
}
?>