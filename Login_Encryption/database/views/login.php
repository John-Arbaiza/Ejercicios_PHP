<main>
    <br><br><br>

<div class="row">
    <div class="col"></div>

    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1 style="text-align: center;">Bienvenido al sistema</h1>
                <form action="<?= BASE_DIR; ?>User/iniciar/" method="post">
                <div class="row d-flex justify-content-center">

                   <div class="col">
                      <input class="form-control" type="text" name="user" placeholder="Usuario">
                   </div>

                   <div class="col">
                       <input class="form-control" type="password" name="pass" placeholder="Password">
                  </div>

                     <input class="btn btn-dark mt-3 mb-3" type="submit" value="Ingresar">
                     <div  class="form-check form-switch" style="display:flex; justify-content:center;">
                       <input class="form-check-input" type="checkbox" role="switch" id="SessionGuardada" name="SessionGuardada">
                      <label class="form-check-label" for="SessionGuardada"> ¿Guardar datos de la session? </label>
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>

    <div class="col"></div>
</div>

</main>