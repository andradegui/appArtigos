<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\StringHelper;

/**var $model \app\models\Article */

?>

<div class="">

    <a href="<?php echo Url::to(['/article/view', 'id' => $model->id]) ?>">

        <h3><?php echo Html::encode($model->title) ?></h3>

    </a>

    <div>

        <?php echo StringHelper::truncateWords($model->getEncodedBody(), 40) ?>

    </div>

    <hr>

</div>

