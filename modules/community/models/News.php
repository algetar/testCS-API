<?php
namespace app\modules\community\models;

/**
 * Class News
 */
class News extends TblNews
{
    /**
     * Предобработка записи перед сохранением и сохранение
     * @return bool
     */
    public function apply() {
        if ($this->RegTime === null) {
            $this->RegTime = date("Y-m-d H:i");
        }

        return $this->save();
    }

    /**
     * Текущая запись в формате JSON:API
     * @param null $fields список полей
     *
     * @return array
     */
    public function getApiRecord($fields = null) {
        if ($fields === null) {
            $fields = array_keys($this->attributes);
        }
        $result = [
            'type' => 'News',
            'id' => $this->ID,
            'attributes' => [],
        ];
        foreach ($fields as $field) {
            if ($field !== 'ID') {
                $result['attributes'][$field] = $this->getAttribute($field);
            }
        }

        return $result;
    }
}
