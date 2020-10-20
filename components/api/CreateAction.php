<?php
namespace app\components\api;

use app\modules\community\models\News;
use yii\db\ActiveRecordInterface;
use yii\helpers\Url;

/**
 * Class CreateAction
 * Расширение стандарного действия
 */
class CreateAction extends \yii\rest\CreateAction
{
    /**
     * @return array|ActiveRecordInterface
     */
    public function run()
    {
        try {
            //Postman отправляет параметры post в QueryParams
            $params = \Yii::$app->request->getBodyParams();
            if (!isset($params['Title']) || !isset($params['Body'])) {
                return [
                    'errors' => [
                        'status' => '404',
                        'source' => __FILE__,
                        "title"  => 'Ошибка добавления записи.',
                        "detail" => 'Не все поля заполнены.'
                    ]
                ];
            }
            if (!isset($params['RegTime'])) {
                $params['RegTime'] = date("Y-m-d H:i");
                \Yii::$app->request->setBodyParams($params);
            }

            $model = parent::run();
            return ['data' => $model->getApiRecord()];

        } catch (\Exception $e) {
            return [
                'errors' => [
                    'status' => '401',
                    'source' => $e->getFile(),
                    "title"  => 'Ошибка добавления записи.',
                    "detail" => $e->getMessage()
                ]
            ];
        }
    }
}
