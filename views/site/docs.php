<?php

/**
 * @var yii\web\View $this
 */

$this->title = $title;
$this->params['breadcrumbs'][] = ['label' => 'Docs', 'url' => ['site/docs']];
$this->params['breadcrumbs'][] = yii\helpers\Html::encode($this->title);

?>

<?= $markdown ?>