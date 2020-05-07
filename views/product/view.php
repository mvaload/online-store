<?php

use app\components\MenuWidget;
use yii\helpers\Html;
use yii\helpers\Url;
use \yii\widgets\LinkPager;

?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="catalog category-products">
                        <?= MenuWidget::widget(['tpl' => 'menu']) ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <?= Html::img("@web/images/products/{$product->img}", ['alt' => $product->name]) ?>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <?php if ($product->new): ?>
                                    <?= Html::img("@web/images/home/new.png", ['alt' => 'Новинка', 'class' => 'newarrival']) ?>
                                <?php endif; ?>
                                <?php if ($product->sale): ?>
                                    <?= Html::img("@web/images/home/sale.png", ['alt' => 'Распродажа', 'class' => 'newarrival']) ?>
                                <?php endif; ?>
                                <h2><?= $product->name ?></h2>
                                <p>Код товара: 1089772</p>
                                <span>
                                            <span>US $<?= $product->price ?></span>
                                            <label>Количество:</label>
                                            <input type="text" value="1" />
                                            <button type="button" class="btn btn-fefault cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </button>
                                        </span>
                                <p><b>Наличие:</b> На складе</p>
                                <p><b>Состояние:</b> Новое</p>
                                <p><b>Производитель:</b> <a href="<?= Url::to(['category/view', 'id' => $product->category->id]) ?>"><?= $product->category->name ?></a></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h5>Описание товара</h5>
                            <p>Разнообразный и богатый опыт постоянный количественный рост и
                                сфера нашей активности требуют определения и уточнения направлений
                                прогрессивного развития. Таким образом реализация намеченных плановых
                                заданий требуют определения и уточнения форм развития.</p>
                            <p>Повседневная практика показывает, что новая модель организационной
                                деятельности способствует подготовки и реализации позиций, занимаемых
                                участниками в отношении поставленных задач. Таким образом постоянное
                                информационно-пропагандистское обеспечение нашей деятельности влечет
                                за собой процесс внедрения и модернизации форм развития.</p>
                            <p>Повседневная практика показывает, что новая модель организационной
                                деятельности способствует подготовки и реализации позиций, занимаемых
                                участниками в отношении поставленных задач. Таким образом постоянное
                                информационно-пропагандистское обеспечение нашей деятельности влечет
                                за собой процесс внедрения и модернизации форм развития.</p>
                            <p>Повседневная практика показывает, что новая модель организационной
                                деятельности способствует подготовки и реализации позиций, занимаемых
                                участниками в отношении поставленных задач. Таким образом постоянное
                                информационно-пропагандистское обеспечение нашей деятельности влечет
                                за собой процесс внедрения и модернизации форм развития.</p>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>
        
