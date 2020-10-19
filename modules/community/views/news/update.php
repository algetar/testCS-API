<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\community\models\News */

$this->title = 'Изменение: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="news-update">

    <h1  style="text-align: center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
