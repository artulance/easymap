<?php defined('ROOT_PATH') or exit('Direct access forbidden'); ?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card body-secondary text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase text-white">Login</h2>
              <p class="text-white mb-5">Please enter your login and password!</p>
              <form  orm name="loginform" method="POST" action="<?php echo Helper::$urlGeneration->route('login')?>" enctype="application/x-www-form-urlencoded">  
                <input type="hidden" name="temp_random" value="{{random}}">
                <div class="form-outline mb-4">
                    <input type="text" id="typeEmail" name="email" autofocus class="form-control form-control-lg"  />
                    <label class="form-label" for="typeEmail">Email</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" id="typePassword" name="pass" class="form-control form-control-lg"  />
                    <label class="form-label" for="typePassword">Password</label>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0">
                        <input class="form-check-input" name="loginCheck" type="checkbox" value="checked" id="loginCheck">
                        <label class="form-check-label" for="loginCheck"> Recordar contraseña </label>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        <a class="text-white" href="#!">He olvidado mi contraseña</a>
                    </div>
                    </div>

                <button class="btn btn-outline-light btn-lg px-5" noprefetch name="submit" type="submit" value="submit">Login</button>
              </form>
                
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="https://github.com/C1b3r" class="text-white"><i class="bi bi-github"></i></a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
