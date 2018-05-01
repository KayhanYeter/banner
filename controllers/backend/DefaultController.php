<?php

namespace kouosl\notification\controllers\backend;

use kouosl\notification\models\SLider;

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    
    public function actionIndex()
    {
        $notification = new Notification();
        return $this->render('index', [
            'notification' => $notification,
        ]);
    }
}
