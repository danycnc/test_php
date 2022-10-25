<?php

// use yii\helpers\Html;
// use yii\widgets\LinkPager;
?>
<h1>Tag più usati</h1>

<!-- sono arrivato a questa soluzione 'estrema' perchè dopo svariate prove, non riuscivo a stampare a video il count associato a ogni Tags. Tramite una var_dump ho scoperto che 'count' era effettivamente all'interno dell'array ritornato dal controller.
Mi rendo conto che la soluzione usata non è delle migliori (anzi...) e che mi sarò perso probabilmente in un bicchiere d'acqua, ma abbiate pietà (: -->

<?php foreach ($tags as $tag) : ?>
    <li><?= implode(" --- ", $tag) ?></li>
<?php endforeach; ?>
