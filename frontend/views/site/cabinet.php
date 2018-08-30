<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Личный кабинет';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <br>
    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin();?>
            <?php $items = [
                    'BMV' => 'BMV' ,
                    'Mercedes' => 'Mercedes',
                    'Honda'=>'Honda',
                    'Opel'=>'Opel',
                ];
               $params = [
                   'prompt' => 'Выберите марку авто...',
               ];
                echo $form->field($model, 'mark')->dropDownList($items,$params)->label('Марка автомобиля :');
           ?>
            <?php $items = [
                    'Red' => 'Red',
                    'White' => 'White',
                    'Black'=>'Black',
                    'Blue'=>'Blue',
                ];
                $params = [
                    'prompt' => 'Выберите цвет авто...',
                ];
                echo $form->field($model, 'color')->dropDownList($items,$params)->label('Цвет автомобиля :');
            ?>
            <?= $form->field($model, 'registration_number')->textInput()->label('Государственный номер :');?>

            <?= $form->field($model, 'user_id')->hiddenInput(['value'=> Yii::$app->user->id])->label(false);?>

            <div class="form-group">
                <?= Html::submitButton('Зарегистрировать', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>

        <div class="col-lg-8">
            <h3>Список ваших автомобилей:</h3>

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID записи</th>
                    <th>Марка авто</th>
                    <th>Цвет авто</th>
                    <th>Гос. номер</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cars as $item):?>
                <tr>
                    <td><?= $item->id ; ?></td>
                    <td><?= $item->mark ; ?></td>
                    <td><?= $item->color ; ?></td>
                    <td><?= $item->registration_number ; ?></td>
                </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>

</div>
