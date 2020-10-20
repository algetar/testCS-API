<?php
namespace app\components\api;

use app\modules\community\models\News;
use yii\helpers\Url;

/**
 * Class IndexAction
 * Расширение стандарного действия
 */
class IndexAction extends \yii\rest\IndexAction
{
    /**
     * @return array
     */
    public function run()
    {
        try {
            $models = parent::run();
            $result = [];
            /* @var $model News */
            foreach ($models->query->all() as $model) {
                if (isset(\Yii::$app->request->queryParams['fields'])) {
                    $result[] = $model->getApiRecord(explode(',', \Yii::$app->request->queryParams['fields']));
                } else {
                    $result[] = $model->getApiRecord();
                }

            }

            return ['data' => $result];
        } catch (\Exception $e) {
            return [
                'errors' => [
                    'status' => '404',
                    'source' => $e->getFile(),
                    "title"  => 'Ошибка получения записей.',
                    "detail" => $e->getMessage()
                ]
            ];
        }
    }
}
