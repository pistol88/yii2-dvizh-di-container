<?php
namespace dvizh\dic;

use yii\base\BootstrapInterface;
use yii;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        yii::$container->set('dvizh\dic\interfaces\Cart', 'pistol88\cart\models\Cart');
        yii::$container->set('dvizh\dic\interfaces\CartElement', 'pistol88\cart\models\CartElement');
    }
}