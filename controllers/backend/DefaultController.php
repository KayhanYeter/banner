<?php

namespace kouosl\banner\controllers\backend;

use kouosl\banner\models\SLider;

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    
    public function actionIndex()
    {
        $banner = new Banner();
        return $this->render('index', [
            'banner' => $banner,
        ]);
    }
}
