<?php
namespace app\models;
use yii\db\ActiveRecord;

/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.06.2017
 * Time: 22:13
 */

class Role extends ActiveRecord
{
    const STUDENT = 'Student';
    const ADMIN = 'Admin';
    public $id;
    public $role;

    public static function tableName(){
        return 'role';
    }

    public function getRole($role){
        return Role::findOne(['role'=>Role::STUDENT]);
    }

}