<?
include "../template/header.php";
?>

<div class="promo-cosmetolog">
<div class="container">

    <section class="row bg-section section-margin section-1">
        <div class="col-12">
            <h1>Бесплатная <br>консультация <br>косметолога <br><span class="city-h1">в Магнитогорске</span></h1>
        </div>
        <div class="cosmetolog_image">
            <div class="col-12">
                <ul class="galka">
                    <li>СПА-салон<br>с медицинской<br> лицензией</li>
                    <li>Повышение<br>квалификации<br>минимум раз в год</li>
                    <li>Опытные<br>и сертифицированные<br>косметологи</li>
                </ul>
                <button class="glow-on-hover" type="button" data-toggle="modal" data-target="#modalSaveCosmetolog">Записаться</button>
            </div>
        </div>
    </section>

</div>

<div class="container overflow-hidden section-reviews">
    <div class="position-relative section-4 section-margin">
        <section class="z-i10 position-relative pb-4">
            <h2 class="text-center mb-5">Отзывы о нас</h2>
            <div id="slider-rewievs2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex">
                                <div class="element_car"><img src="../template/images/rewievs/rew1.png" alt=""></div>
                                <div class="element_car"><img src="../template/images/rewievs/rew2.png" alt=""></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex">
                                <div class="element_car"><img src="../template/images/rewievs/rew3.png" alt=""></div>
                                <div class="element_car"><img src="../template/images/rewievs/rew4.png" alt=""></div>
                            </div>
                        </div>
                </div>
                <div class="controll-slider2">
                    <a class="" href="#slider-rewievs2" role="button" data-slide="prev">
                        <span class="prev-icon slider-icon" aria-hidden="true"></span>
                    </a>
                    <a class="" href="#slider-rewievs2" role="button" data-slide="next">
                        <span class="next-icon slider-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </section>
        <div class="decoration-box"></div>
        <div class="decoration-box-dark"></div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="modalSaveCosmetolog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h2 class="modal-title" id="exampleModalLongTitle">Записаться на бесплатную консультацию косметолога</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <div class="container-form">
                            <form action="" class='form_cosmetolog' method="post" id="register_form">

                                <div class="reg-name mb-5">
                                    <input type="text" name="name" placeholder="Имя">
                                    <input type="hidden" name="service" value="cosmetolog">
                                    <p class="error" style="display: none;">*Поле имя необходимо заполнить</p>
                                </div>

                                <div class="reg-phone mb-5">
                                    <input type="text" name="phone" class="phone" placeholder="Телефон">
                                    <p class="error" style="display: none;">*Поле необходимо заполнить</p>
                                </div>

                                <div class="reg-phone mb-5 d-none">
                                    <input type="text" name="email" class="email" placeholder="email" value="">
                                </div>

                                <div class="reg-submit">
                                    <button class="glow-on-hover">Записаться</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
<?
include "../template/footer.php";
?>
