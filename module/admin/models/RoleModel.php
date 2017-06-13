<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.06.2017
 * Time: 19:40
 */

namespace app\module\admin\models;


use yii\base\Model;

class RoleModel extends Model
{
    public $id;
    public $label_role;

   public function rules()
   {
       return parent::rules();
   }

   public function addRole(){
       $role = new Role();
       $role->label_role = $this->label_role;
       return $role->save();
   }

}