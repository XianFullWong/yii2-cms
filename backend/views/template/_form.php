<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yiichina\icons\Icon;

/* @var $this yii\web\View */
/* @var $model common\models\Template */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="template-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'key')->textInput() ?>

    <?= $form->field($model, 'description')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 10]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Icon::show('plus') . Yii::t('app', 'Create') : Icon::show('edit') . Yii::t('app', 'Reset'), ['class' => $model->isNewRecord ? 'btn btn-success btn-flat' : 'btn btn-primary btn-flat']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
