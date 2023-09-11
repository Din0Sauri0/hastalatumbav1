<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Administrador De Historias</h2>

                    <span class="main__title-stat">14,452 Total</span>

                    <div class="main__title-wrap">
                        <!-- filter sort -->
                        <div class="filter" id="filter__sort">
                            <span class="filter__item-label">Ordenar por:</span>

                            <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <input type="button" value="ültimas">
                                <span></span>
                            </div>

                            <ul class="filter__item-menu dropdown-menu scrollbar-dropdown"
                                aria-labelledby="filter-sort">
                                <li data-value="date created">Con mas Me gusta</li>
                                <li data-value="estado">Estado</li>
                                <li data-value="fecha">Fecha</li>
                                <li data-value="visitas">Visitas</li>
                            </ul>
                        </div>
                        <!-- end filter sort -->

                        <!-- search -->
                        <form action="#" class="main__title-form">
                            <input type="text" placeholder="Buscar en historias">
                            <button type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                        <!-- end search -->
                    </div>
                </div>
            </div>
            <!-- end main title -->

            <!-- users -->
            <div class="col-12">
                <div class="main__table-wrap">
                    <table class="main__table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TÍTULO</th>
                                <th>CATEGORIA</th>
                                <th>VISTAS</th>
                                <th>ESTADO</th>
                                <th>FECHA</th>
                                <th>CANTIDAD MEGUSTA</th>
                                <th>ACCIÓNES</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <div class="main__table-text">23</div>
                                </td>
                                <td>
                                    <div class="main__table-text"><span class="texto-truncado">acá el
                                            titulo de la
                                            historia :D:D:D:D resumidooo cdasasdadasda
                                            zjhakjdhaskjdhaskjhdkjashdkjsa hdkjhsaKJDHSAkjhs</span></div>
                                </td>
                                <td>
                                    <div class="main__table-text">Lujuria</div>
                                </td>
                                <td>
                                    <div class="main__table-text">111.122</div>
                                </td>
                                <td>
                                    <div class="main__table-text main__table-text--green">Publicada</div>
                                </td>
                                <td>
                                    <div class="main__table-text">24-10-2023</div>
                                </td>
                                <td>
                                    <div class="main__table-text">11.222 </div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                        <a href="#modal-status"
                                            class="main__table-btn main__table-btn--banned open-modal">
                                            <i class="fas fa-lock-open"></i>
                                        </a>
                                        <a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="editar/" class="main__table-btn main__table-btn--edit">
                                            <i class="fas fa-cog"></i>
                                        </a>
                                        <a href="#modal-delete"
                                            class="main__table-btn main__table-btn--delete open-modal">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="main__table-text">24</div>
                                </td>
                                <td>
                                    <div class="main__table-text"><span class="texto-truncado">acá el
                                            titulo de la
                                            historia :D:D:D:D resumidooo cdasasdadasda
                                            zjhakjdhaskjdhaskjhdkjashdkjsa hdkjhsaKJDHSAkjhs</span></div>
                                </td>
                                <td>
                                    <div class="main__table-text main__table-text--rate"><i
                                            class="icon ion-ios-star"></i> Lujuria</div>
                                </td>
                                <td>
                                    <div class="main__table-text">1001</div>
                                </td>
                                <td>
                                    <div class="main__table-text main__table-text--red">Pendiente</div>
                                </td>
                                <td>
                                    <div class="main__table-text">24-10-2023</div>
                                </td>
                                <td>
                                    <div class="main__table-text">112</div>
                                </td>
                                <td>
                                    <div class="main__table-btns">
                                        <a href="#modal-status"
                                            class="main__table-btn main__table-btn--banned open-modal">
                                            <i class="fas fa-lock"></i>
                                        </a>
                                        <a href="#modal-view" class="main__table-btn main__table-btn--view open-modal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="editar/" class="main__table-btn main__table-btn--edit">
                                            <i class="fas fa-cog"></i>
                                        </a>
                                        <a href="#modal-delete"
                                            class="main__table-btn main__table-btn--delete open-modal">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end users -->

            <!-- paginator -->
            <div class="col-12">
                <div class="paginator-wrap">
                    <span>5 de 14 452</span>

                    <ul class="paginator">
                        <li class="paginator__item paginator__item--prev">
                            <a href="#"><i class="icon ion-ios-arrow-back"></i></a>
                        </li>
                        <li class="paginator__item"><a href="#">1</a></li>
                        <li class="paginator__item paginator__item--active"><a href="#">2</a></li>
                        <li class="paginator__item"><a href="#">3</a></li>
                        <li class="paginator__item"><a href="#">4</a></li>
                        <li class="paginator__item paginator__item--next">
                            <a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end paginator -->
        </div>
    </div>
</main>
<!-- end main content -->

<!-- modal status -->
<!-- modal view -->
<div id="modal-view" class="zoom-anim-dialog mfp-hide modal modal--view">
    <div class="comments__autor">
        <img class="comments__avatar" src="../img/user.svg" alt>
        <span class="comments__name">Pseudonimo</span>
        <span class="comments__time">30.08.2018, 17:53</span>
    </div>
    <p class="comments__text">TEXTO HISTORIA</p>
</div>
<!-- end modal view -->

<div id="modal-status" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">Cambiar Estado</h6>

    <p class="modal__text">Publicar Historia??</p>

    <div class="modal__btns">
        <button class="modal__btn modal__btn--apply" type="button">Si</button>
        <button class="modal__btn modal__btn--dismiss" type="button">Cancelar</button>
    </div>
</div>
<!-- end modal status -->

<!-- modal delete -->
<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">Eliminiar Historia</h6>

    <p class="modal__text">Desea Eliminar Esta Historia??</p>

    <div class="modal__btns">
        <button class="modal__btn modal__btn--apply" type="button">SI</button>
        <button class="modal__btn modal__btn--dismiss" type="button">cancelar</button>
    </div>
</div>
<!-- end modal delete -->