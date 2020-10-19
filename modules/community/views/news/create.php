<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\community\models\News */

$this->title = 'Добавление';
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1  style="text-align: center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
