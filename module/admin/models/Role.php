<?php
namespace app\module\admin\models;

use yii\db\ActiveRecord;

/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.06.2017
 * Time: 19:13
 */
class Role extends ActiveRecord
{
    const STUDENT = 'Student';
    const ADMIN = 'Admin';
    public $id;
    public $label_role;


    public static function tableName()
    {
        return 'role';
    }

}