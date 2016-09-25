<?php
namespace app\index\controller;
use app\index\model;
use think\Controller;

class User extends Controller
{
    public function index() {
        return $this->fetch();
    }

    public function login() {
        $user = model\User::get(['username' => input('post.username')]);
        if($user == NULL) {
            return json_encode(['error' => 'username not exist']);
        } else {
            if(password_encrypt(input('post.password')) == $user->password) {
                return json_encode(['error' => null]);
            } else {
                return json_encode(['error' => 'wrong password']);
            }
        }
    }

    public function register() {
        $username = input('post.username');
        $password = input('post.password');
        $len = strlen($username);
        if($len < 3) return json_encode(['error' => 'username too short']);
        if($len > 64) return json_encode(['error' => 'username too long']);
        $len = strlen($password);
        if($len < 3) return json_encode(['error' => 'password too short']);
        if($len > 64) return json_encode(['error' => 'password too long']);
        $user = model\User::get(['username' => $username]);
        if($user == NULL) {
            $_POST['password'] = password_encrypt($_POST['password']);
            if((new model\User())->save(['username' => $username, 'password' => $password, 'status' => 1])) {
                return json_encode(['error' => null]);
            } else {
                return json_encode(['error' => 'db error']);
            }
        } else {
            return json_encode(['error' => 'username exist']);
        }
    }
}


















