<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="main__title">
                <h2>Administrador De Categorías</h2>

                <span class="main__title-stat">12 Total</span>

                <div class="main__title-wrap">
                    <!-- filter sort -->
                    <div class="filter" id="filter__sort">
                        <span class="filter__item-label">Ordenar por:</span>

                        <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-sort"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <input type="button" value="ültimas">
                            <span></span>
                        </div>

                        <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-sort">

                            <li data-value="estado">Nombre</li>


                        </ul>
                    </div>
                    <!-- end filter sort -->

                    <!-- search -->
                    <form action="#" class="main__title-form">
                        <input type="text" placeholder="Buscar Categorias">
                        <button type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                    <!-- end search -->
                </div>
            </div>
            <div class="col-12">
                <div class="main__title">
                    <h2>CATEGORIAS</h2>

                    <a href="agregar/" class="main__title-link">Agregar</a>
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
                                <th>NOMBRE CATEGORIA</th>
                                <th>ACCIÓNES</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <div class="main__table-text">23</div>
                                </td>
                                <td>
                                    <div class="main__table-text"><span class="texto-truncado">LUJURIA</span></div>
                                </td>

                                <td>
                                    <div class="main__table-btns">
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


<!-- modal delete -->
<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">Eliminiar Categoria</h6>

    <p class="modal__text">Desea Eliminar Esta Cateoria??</p>

    <div class="modal__btns">
        <button class="modal__btn modal__btn--apply" type="button">SI</button>
        <button class="modal__btn modal__btn--dismiss" type="button">cancelar</button>
    </div>
</div>
<!-- end modal delete -->