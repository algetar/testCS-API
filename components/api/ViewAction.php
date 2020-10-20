<?php
namespace app\components\api;

use app\modules\community\models\News;

/**
 * Class ViewAction
 * Расширение стандарного действия
 */
class ViewAction extends \yii\rest\ViewAction
{
    /**
     * @param string $id
     *
     * @return array
     */
    public function run($id)
    {
        try {
            /* @var $model News */
            $model = parent::run($id);

            return ['data' => $model->getApiRecord()];

        } catch (\Exception $e) {
            return [
                'errors' => [
                    'status' => '401',
                    'source' => $e->getFile(),
                    "title"  => 'Ошибка получения записи.',
                    "detail" => $e->getMessage()
                ]
            ];
        }
    }
}