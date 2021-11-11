
<main class="d-flex align-items-center justify-content-center height-100">
     <div class="content">
          <header class="text-center">
               <h2>Login</h2>
          </header>

          <form action=<?php	echo FRONT_ROOT?>Session\Login method="POST" class="login-form bg-dark-alpha p-5 bg-light">
               <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Ingresar usuario">
               </div>
               <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña">
               </div>
               <button class="btn btn-primary btn-block btn-lg" type="submit">Iniciar Sesión</button>
               
               <a class="btn btn-primary btn-block btn-lg" href=<?php echo FRONT_ROOT?>Student\Register role="button">registrarse</a>

              

          </form>
     </div>
</main>


