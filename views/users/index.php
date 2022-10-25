<?php

use yii\grid\GridView;

?>
<h1>Lista contatti</h1>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'Nome',
        'Cognome',
        'Numero',
        'Tags'
    ],
]) ?>
