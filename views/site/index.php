<?php

/**
 * @var yii\web\View $this
 */

$this->title = 'Home';
?>
<div class="jumbotron text-center">
    <h1>Welcome to Yii2-user!</h1>
    <p class="lead">Yii2-user  is a flexible user management module for Yii2 that handles common tasks such as registration, authentication and password retrieval.</p>
    <p>
        <a class="btn btn-success" target="_blank" href="http://yii2-user.readthedocs.org/en/latest/getting-started/installation.html">Getting started</a>
        <a class="btn btn-primary" target="_blank" href="http://yii2-user.readthedocs.org/en/latest/">Read the documentation</a>
        <a class="btn btn-info" target="_blank" href="https://github.com/dektrium/yii2-user/blob/master/CONTRIBUTING.md">Contribute</a>
    </p>
</div>
<div class="alert alert-info">
    This site is running Yii2-user version <strong><?= \dektrium\user\Module::VERSION ?></strong> and Yii version
    <strong><?= Yii::getVersion() ?></strong>. You can see it's source code on <a href="https://github.com/dektrium/yii2-user-demo">Github</a>.
</div>

