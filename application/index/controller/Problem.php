<?php
namespace app\index\controller;
use app\index\model;
use think\Controller;
use think\Session;

class Problem extends Controller
{

    public function get($id) {
        $problem = model\Problem::get($id);
        if($problem) {
            return json_encode([
                'error' => null,
                'id' => $problem->id,
                'title' => $problem->title,
                'time_limit' => $problem->time_limit,
                'memory_limit' => $problem->memory_limit,
                'appcepted' => '上课了，上课去了'
            ]);
        }
    }

    public function add() {
        $problem = json_decode(input('post.problem'));
    }
}


















