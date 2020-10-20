<?php
namespace app\components\api;

use yii\db\ActiveRecordInterface;

/**
 * Class UpdateAction
 *
 * @package app\components\api
 */
class UpdateAction extends \yii\rest\UpdateAction
{
    /**
     * @param $id
     *
     * @return array|ActiveRecordInterface
     */
    public function run($id)
    {
        try {
            $model = parent::run($id);
            return ['data' => $model->getApiRecord()];

        } catch (\Exception $e) {
            return [
                'errors' => [
                    'status' => '404',
                    'source' => $e->getFile(),
                    "title"  => 'Ошибка сохранения записи.',
                    "detail" => $e->getMessage()
                ]
            ];
        }
    }
}