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
                                            <input type="text" value="1" id="qty"/>
                                            <a href="#" data-id="<?= $product->id ?>" class="btn btn-fefault add-to-cart cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                В корзину
                                            </a>
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
                            <p><?= $product->content ?></p>
                        </div>
                    </div>
                </div><!--/product-details-->
                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Рекомендуемые товары</h2>
                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $count = count($hits); $i = 0; foreach ($hits as $hit): ?>

                                <?php if ($i % 3 == 0): ?>
                                    <div class="item <?php if ($i = 0) echo 'active' ?>">
                                <?php endif; ?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <?= Html::img("@web/images/products/{$hit->img}", ['alt' => $hit->name]) ?>

                                                <h2>$<?= $hit->price ?></h2>
                                                <p><a href="<?= Url::to(['product/view', 'id' => $hit->id]) ?>"><?= $hit->name ?></a></p>
                                                <a href="<?= Url::to(['cart/add', 'id' => $hit->id]) ?>" data-id="<?= $hit->id ?>" class="btn btn-default add-to-cart">
                                                    <i class="fa fa-shopping-cart"></i>В корзину
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <?php $i++; if ($i % 3 == 0 || $i == $count): ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->
            </div>
        </div>
    </div>
</section>
        
