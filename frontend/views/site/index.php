<?php

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php if (Yii::$app->user->isGuest){?>
    <div class="jumbotron">
        <p class="lead">Здравствуйте, для входа <a href="<?= Url::to(['site/signup']) ?>">зарегистрируйтесь</a>  или <a href="<?= Url::to(['site/login']) ?>">авторизуйтесь</a></p>
   </div>
    <?php }else{ ?>
        <div class="jumbotron">
            <p class="lead">Перейдите в  <a href="<?= Url::to(['site/cabinet']) ?>">Личный кабинет</a></p>
        </div>
    <?php } ?>
</div>
