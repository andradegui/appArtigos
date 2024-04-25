<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

// Como pegar o tempo que o registro foi criado
/* <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>*/

?>

<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-muted">

        <small>
            <b>Autor: <?php echo $model->createdBy->username ?></b>
        </small>

    </p>

    <p class="text-muted">

        <small>
            <b>Criado em: <?php echo Yii::$app->formatter->asDateTime($model->created_at) ?></b>
            
        </small>

    </p>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


    <div>
        <?php echo $model->getEncodedBody(); ?>
    </div>

</div>
