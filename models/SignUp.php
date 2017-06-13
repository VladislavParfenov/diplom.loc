<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.06.2017
 * Time: 21:54
 */

namespace app\models;

use yii\base\Model;

class SignUp extends Model
{
    public $id;
    public $email;
    public $login;
    public $password;
    public $role;

    public function rules()
    {
       return [
        [
            ['email', 'password','login'], 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'app\models\User'],
            ['password', 'string', 'min' => 6, 'max' => 32]
        ];
    }

    public function signUp(){
        $role = new Role();
        $user = new User();
        $user->email = $this->email;
        $user->login = $this->login;
        $user->setPassword($this->password);
        $user->role = $role->getRole(Role::STUDENT);
        return $user->save();
    }

}