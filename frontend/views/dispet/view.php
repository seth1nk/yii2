<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Dispet $model */

$this->title = $model->Код_авто;
$this->params['breadcrumbs'][] = ['label' => 'Dispets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<link rel="stylesheet" type="text/css" href="/css/1.css" />
<div class="dispet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'Код_авто' => $model->Код_авто], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'Код_авто' => $model->Код_авто], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Код_авто',
            'Время_прибытия',
            'Время_отбытия',
            'Код_водителя',
            'Путевка',
            'Товар',
        ],
    ]) ?>

</div>
