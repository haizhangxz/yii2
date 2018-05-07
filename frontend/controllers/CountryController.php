<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/3 0003
 * Time: 13:49
 */

namespace frontend\controllers;

use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use frontend\models\Country;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $quire = Country::find();
        $pagination = new Pagination([
            'defaultPageSize'=>5,
            'totalCount'=>$quire->count(),
        ]);


        $countries = $quire->orderBy('name')->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render("index",['pagination'=>$pagination,'countries'=>$countries]);

    }
}