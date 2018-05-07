<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/2 0002
 * Time: 14:24
 */
namespace frontend\models;
use Yii;
use yii\base\Model;
class EntryForm extends Model{
    public $name;
    public $email;
    public function rules()
    {
        return [
            [['name','email'],"required",'message'=>'请填写姓名'],
            ['email','email','message'=>'邮箱格式错误'],
        ];
    }
}


