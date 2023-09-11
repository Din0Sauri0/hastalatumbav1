<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Agregar Auspiciador</h2>
                </div>
            </div>
            <!-- end main title -->


            <!-- content tabs -->
            <div class="fade show active">
                <div class="col-12">
                    <div class="row">
                        <!-- details form -->
                        <div class="col-12 col-lg-6">
                            <form action="#" class="form form--profile">
                                <div class="row row--form">
                                    <div class="col-12">
                                        <h4 class="form__title">Detalles Auspiciador</h4>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="form__group">
                                            <label class="form__label" for="username">Usuario</label>
                                            <input id="username" type="text" name="username" class="form__input"
                                                placeholder="coca cola">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="form__group">
                                            <label class="form__label" for="email">Email</label>
                                            <input id="email" type="text" name="email" class="form__input"
                                                placeholder="coca@cola.cl">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="form__group">
                                            <label class="form__label" for="firstname">Contacto</label>
                                            <input id="firstname" type="text" name="firstname" class="form__input"
                                                placeholder="Juanito">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="form__group">
                                            <label class="form__label" for="lastname">Apelido</label>
                                            <input id="lastname" type="text" name="lastname" class="form__input"
                                                placeholder="Doe">
                                        </div>
                                    </div>



                                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="form__group">
                                            <label class="form__label" for="rights">Plan</label>
                                            <select class="js-example-basic-single select2-hidden-accessible"
                                                id="rights" data-select2-id="rights" tabindex="-1" aria-hidden="true">
                                                <option value="User" data-select2-id="4">Mausoleo</option>
                                                <option value="Moderator">Purgatorio</option>
                                                <option value="Admin">Boveda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="form__group">
                                            <label class="form__label" for="oldpass">Fecha Ingeeso</label>
                                            <input id="oldpass" type="date" name="oldpass" class="form__input">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                        <div class="form__group">
                                            <label class="form__label" for="newpass">Contraseña</label>
                                            <input id="newpass" type="password" name="newpass" class="form__input">
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <button class="form__btn" type="button">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end details form -->

                        <!-- password form -->
                        <div class="col-12 col-lg-6">
                            <form action="#" class="form form--profile">
                                <div class="row row--form">

                                    <div class="col-12 col-md-5 form__cover">
                                        <div class="row row--form">
                                            <div class="col-12 col-sm-6 col-md-12">
                                                <div class="form__img">
                                                    <label for="form__img-upload">Selecione archivo (.mp4 .webp .jpg
                                                        .gif .jpeg)</label>
                                                    <input id="form__img-upload" name="form__img-upload" type="file"
                                                        accept=".png, .jpg, .jpeg">
                                                    <img id="form__img" src="#" alt=" ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="form__btn" type="button">Agregar Imagen</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end password form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- end main content -->