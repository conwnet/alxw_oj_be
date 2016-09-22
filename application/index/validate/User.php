<?php
namespace app\index\validate;

use think\Validate;

class User extends Validate  {
    protected $rule = [
        ['username', ['require', 'min' => 3, 'max' => 64], ['username is must', 'username to short', 'username to long']],
        ['password', ['require'], ['password is must']],
        ['email', ['email'], ['email bad format']],
    ];
}
