<div class="sign section--bg" data-bg="../../admin/img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <?php
                        if(!empty($_SESSION['success'])){
                            echo $_SESSION['success'];
                        }
                    ?>
                    <!-- authorization form -->
                    <form action="#" class="sign__form">

                        <i class="fas fa-sign-in-alt sign__logo"></i>

                        <div class="sign__group">
                            <input type="text" class="sign__input" placeholder="Email">

                            <div class="sign__group">
                                <input type="password" class="sign__input" placeholder="Password">
                            </div>

                            <button class="sign__btn" type="button">Ingresa</button>

                            <p class="sign__text">Aún no eres lloron ? <a href="../registro-en-club/">Rsgistrate!</a>
                            </p>

                            <p class="sign__text"><a href="../olvido/">Olvidó su contraseña?</a></p>
                    </form>
                    <!-- end authorization form -->
                </div>
            </div>
        </div>
    </div>
</div>