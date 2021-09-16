<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<div class="inicioMain">
    <h1>Hola Mundo</h1>
    <p>Este es mi primera vista con Yii2</p>

    <?php
        if($mensaje){
            echo Html::tag('div',Html::encode($mensaje), ['class'=>'alert alert-success']);
        }
    ?>
    
    <?php $formulario = activeForm::begin(); ?>
    <?= $formulario->field($model, 'valora') ?>
    <?= $formulario->field($model, 'valorb') ?>

    <div class="form-group">
        <?= Html::submitButton('Enviar', ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>


