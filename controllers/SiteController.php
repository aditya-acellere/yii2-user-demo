<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionCommunity()
    {
        return $this->render('community');
    }
    
    public function actionDocs($title = null)
    {
        if ($title == null) {
            $title = 'README';
        }
        
        $file = \Yii::getAlias('@dektrium/user/docs/' . $title . '.md');
        
        if (!file_exists($file)) {
            throw new \yii\web\NotFoundHttpException('Page is not found');
        }
        
        $markdown = (new \app\helpers\Markdown)->parse(file_get_contents($file));
        preg_match('/<h1.*?>(.*)<\/h1>/', $markdown, $matches);
        $title = $matches[1];
        
        return $this->render('docs', [
            'markdown' => $markdown,
            'title'    => $title,
        ]);
    }
}
