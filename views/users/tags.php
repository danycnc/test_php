<?php

// use yii\helpers\Html;
// use yii\widgets\LinkPager;
?>
<h1>Tags più usati</h1>


<?php foreach ($tags as $tag) : ?>
    <li><?= $tag->Tags ?></li>
<?php endforeach; ?>
