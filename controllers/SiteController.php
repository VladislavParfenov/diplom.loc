<?php

namespace app\controllers;

use app\models\SignUp;
use Yii;
use yii\web\Controller;


class SiteController extends Controller
{
   public function actionIndex(){
       return $this->render('index');
   }
   public function actionSignup(){
       $user = new SignUp();
       if(isset($_POST['SignUp'])){
           $user->attributes = Yii::$app->request->post('SignUp');
           if($user->validate() && $user->signUp()){
               $this->goHome();
           }
       }
       return $this->render('signup', ['user' => $user]);
   }
}
