<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.06.2017
 * Time: 19:20
 */

namespace app\module\admin\controllers;


use app\module\admin\models\Role;
use app\module\admin\models\RoleModel;
use Yii;
use yii\web\Controller;

class RoleController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionAddrole(){
        $role = new RoleModel();
        if(isset($_POST['RoleModel'])){

            $role->attributes = Yii::$app->request->post('RoleModel');
//            print_r(['post' =>Yii::$app->request->post('RoleModel'),'attr' => $role->attributes]);die();
            if($role->validate() && $role->addRole()){
                return $this->render('add_role',['success' => true]);
            }else{
                return $role->getErrors();
            }
        }
        return $this->render('add_role',['role' => $role]);
    }
}