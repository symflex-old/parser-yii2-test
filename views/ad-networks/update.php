<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AdNetworks */

$this->title = 'Update Ad Networks: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ad Networks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ad-networks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'parsers' => $parsers
    ]) ?>

</div>
