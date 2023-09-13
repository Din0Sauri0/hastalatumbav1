<div class="sign section--bg" data-bg="../../admin/img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">

                    <!-- authorization form -->
                    <form action="./login.php" method="POST" class="sign__form">

                        <i class="fas fa-sign-in-alt sign__logo"></i>
                            <div class="sign__group">
                                <div class="sign__group">
                                    <input type="text" class="sign__input <?php if(isset($_SESSION['formError']['email'])){echo('border-danger bg-danger bg-opacity-10');} ?>" name="email" placeholder="Email">
                                    <span class="form-text text-danger">
                                        <?php if(isset($_SESSION['formError']['email'])){echo $_SESSION['formError']['email'];} ?>
                                    </span>
                                </div>
                                <div class="sign__group">
                                    <input type="password" class="sign__input <?php if(isset($_SESSION['formError']['passwrd'])){echo('border-danger bg-danger bg-opacity-10');} ?>" name="passwrd" placeholder="Password">
                                        <span class="form-text text-danger">
                                    <?php if(isset($_SESSION['formError']['passwrd'])){echo $_SESSION['formError']['passwrd'];} ?>
                            </span>
                                </div>

                                <button class="sign__btn" type="submit">Ingresa</button>

                                <p class="sign__text">Aún no eres lloron ? <a href="../registro-en-club/">Rsgistrate!</a>
                                </p>

                                <p class="sign__text"><a href="../olvido/">Olvidó su contraseña?</a></p>
                            </div>
                    </form>
                    <!-- end authorization form -->
                </div>
            </div>
        </div>
    </div>
</div>