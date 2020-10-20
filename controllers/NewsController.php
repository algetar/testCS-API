<?php
namespace app\controllers;

use yii\rest\ActiveController;

/**
 * Class NewsController
 */
class NewsController extends ActiveController
{
    /**
     * @var string
     */
    public $modelClass = 'app\modules\community\models\News';
}
