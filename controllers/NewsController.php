<?php
namespace app\controllers;

use app\modules\community\models\News;
use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * Class NewsController
 */
class NewsController extends ActiveController
{
    /**
     *{@inheritDoc}
     */
    public $modelClass = 'app\modules\community\models\News';

    /**
     * {@inheritDoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\ContentNegotiator',
                'only' => ['view', 'index', 'create', 'update'],  // in a controller
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                    'application/vnd.api+json' => 'vnd.api+json',
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $actions = parent::actions();
        $actions['view']['class'] = 'app\components\api\ViewAction';
        $actions['index']['class'] = 'app\components\api\IndexAction';
        $actions['create']['class'] = 'app\components\api\CreateAction';
        $actions['update']['class'] = 'app\components\api\UpdateAction';
        return $actions;
    }
}
