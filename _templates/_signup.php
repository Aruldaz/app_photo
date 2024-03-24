
  <main class="form-signup w-100 m-auto">
    <form method="post" action="test.php">
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
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
    </form>
  </main>
