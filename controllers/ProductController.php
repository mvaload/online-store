<?php

namespace app\controllers;

use Yii;
use app\models\Category;
use app\models\Product;
//use yii\data\Pagination;

class ProductController extends AppController
{
//    public function actionIndex()
//    {
//        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
//        $this->setMeta('E-SHOPPER');
//        return $this->render('index', compact('hits'));
//    }

    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);

//        $pages = new Pagination([
//            'totalCount' => $query->count(),
//            'pageSize' => 3,
//            'forcePageParam' => false,
//            'pageSizeParam' => false
//        ]);
//        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
//        $category = Category::findOne($id);
//        $this->setMeta("E-SHOPPER | " . $category->name, $category->keywords, $category->description);
//        return $this->render('view', compact('products', 'pages', 'category'));
        return $this->render('view', compact('product'));
    }

}