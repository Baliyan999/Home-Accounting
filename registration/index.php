<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Форма регистрации</title>
</head>

<body>
  <div class="section">
    <div class="container">
      <?php error_reporting(0); ?> <!-- убирает визуальный вывод ошибок с экрана -->
      <?php if ($_COOKIE['user'] == '') : ?>

        <div class="row full-height justify-content-center">
          <div class="col-12 text-center align-self-center py-5">
            <div class="section pb-5 pt-5 pt-sm-2 text-center">
              <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
              <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
              <label for="reg-log"></label>
              <div class="card-3d-wrap mx-auto">
                <div class="card-3d-wrapper">

                  <div class="card-front">
                    <div class="center-wrap">
                      <div class="section text-center">
                        <h4 class="mb-4 pb-3">Log in</h4>
                        <form method="post" action="validation-form/auth.php">
                          <div class="form-group">
                            <input type="text" name="login" class="form-style" placeholder="Your login" id="login"">
                              <div class=" input-icon">
                                <img src="./images/login.svg" alt="">
                              </div>
                          </div>
                          <div class="form-group mt-2">
                            <input type="password" name="pass" class="form-style" placeholder="Your password" id="pass">
                            <div class=" input-icon">
                                <img src="./images/password.svg" alt="">
                            </div>
                          </div>
                        <button type="submit" class="btn mt-4">Submit</button>
                      </form>
                      <!-- <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p> -->
                    </div>
                  </div>
                </div>

                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-3">Sign up</h4>
                      <form method="post" action="validation-form/check.php">
                        <div class="form-group">
                          <input type="text" name="login" class="form-style" placeholder="Your login" id="login">
                          <div class=" input-icon">
                            <img src="./images/login.svg" alt="">
                          </div>
                        </div>
                        <div class="form-group mt-2">
                          <input type="text" name="name" class="form-style" placeholder="Your name" id="name">
                          <div class=" input-icon">
                              <img src="./images/name.svg" alt="">
                          </div>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" name="pass" class="form-style" placeholder="Your password" id="pass">
                          <div class=" input-icon">
                              <img src="./images/password.svg" alt="">
                          </div>
                        </div>
                        <button type="submit" class="btn mt-4">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
    </div>


    <!--  -->
    
  </div>
</div>
<?php else : ?>
<p> Привет <?=$_COOKIE['user']?>! Добро пожаловать!</p> 

<script src="script.js"></script>
<table class="table aaaaa table-striped table-responsive">
  <thead>
    <tr>
      <th>1</th>
      <th>2</th>
      <th>2</th>
      <th>2</th>
      <th>2</th>
      <th>2</th>
    </tr>
  </thead>
  <tbody class="aaaaa">
    <tr class="aaaaa">
      <th class="aaaaa">День</th>
      <th class="aaaaa">Заработал</th>
      <th class="aaaaa">Потратил</th>
      <th class="aaaaa">Осталось</th>
    </tr>
    <tr>
      <td><input type="date"> сўм</td>
      <td><input type="number" step="500"> сўм</td>
      <td><input type="number" step="500"> сўм</td>
      <td><input type="number" disabled step="500"> сўм</td>
    </tr>
  </tbody>
</table>
<p>Чтобы выйти нажмите <a href="/exit.php">здесь</a>. </p>
<?php endif; ?>
</body>

</html>