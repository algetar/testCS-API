<?php
namespace app\modules\community\models;


/**
 * Class News
 * @package app\modules\community\models
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
}