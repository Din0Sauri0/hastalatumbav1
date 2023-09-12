<div class="sign section--bg" data-bg="../../admin/img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- registration form -->
                    <form action="./registro.php" method="POST" class="sign__form">
                        <h1>Registro</h1>
                        <h2>Club Llorón</h2>

                        <div class="sign__group">
                            <input type="text" class="sign__input" name="nombre" placeholder="Nombre">
                        </div>

                        <div class="sign__group">
                            <input type="text" class="sign__input" name="alias" placeholder="Pseudonimo">
                        </div>

                        <div class="sign__group">
                            <input type="text" class="sign__input <?php if($_SESSION['formError']['email']){echo('border-danger bg-danger bg-opacity-10');} ?>" name="email" placeholder="Email">
                            <span class="form-text text-danger">
                                <?php if($_SESSION['formError']['email']){echo $_SESSION['formError']['email'];} ?>
                            </span>
                        </div>

                        <div class="sign__group">
                            <select class="sign__input <?php if($_SESSION['formError']['genero']){echo('border-danger bg-danger bg-opacity-10');} ?>" name="genero" id="genero">
                                <option value="0" selected>--Seleccione un genero--</option>
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                                <option value="3">Elles</option>
                            </select>
                            <span class="form-text text-danger">
                                <?php if($_SESSION['formError']['genero']){echo $_SESSION['formError']['genero'];} ?>
                            </span>
                        </div>

                        <div class="sign__group">
                            <textarea class="sign__input" name="descripcion" id="descripcion" placeholder="Describete en un breve texto"></textarea>
                        </div>

                        <div class="sign__group">
                            <input class="sign__input <?php if($_SESSION['formError']['edad']){echo('border-danger bg-danger bg-opacity-10');} ?>" type="date" name="fecha_nacimiento" id="fecha_nacimiento">
                            <span class="form-text text-danger">
                                <?php if($_SESSION['formError']['edad']){echo $_SESSION['formError']['edad'];} ?>
                            </span>
                        </div>

                        <div class="sign__group">
                            <input type="password" name="passwrd" class="sign__input <?php if($_SESSION['formError']['password_len']){echo('border-danger bg-danger bg-opacity-10');} ?>" placeholder="contraseña">
                            <span class="form-text text-danger">
                                <?php if($_SESSION['formError']['password_len']){echo $_SESSION['formError']['password_len'];} ?>
                            </span>
                        </div>

                        <div class="sign__group">
                            <input type="password" name="re-passwrd" class="sign__input <?php if($_SESSION['formError']['password_verificate']){echo('border-danger bg-danger bg-opacity-10');} ?>" placeholder="Repita su contraseña">
                            <span class="form-text text-danger">
                                <?php if($_SESSION['formError']['password_verificate']){echo $_SESSION['formError']['password_verificate'];} ?>
                            </span>
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="terminos" name="terminos" type="checkbox" checked="checked">
                            <label for="termino">Acepto Términos</label>
                        </div>

                        <button class="sign__btn" type="submit">Registrate</button>

                        <span class="sign__delimiter">o</span>

                        <span class="sign__text">Éres lloron? <a href="../ingreso/">Ingresa!</a></span>
                    </form>
                    <!-- registration form -->
                </div>
            </div>
        </div>
    </div>
</div>