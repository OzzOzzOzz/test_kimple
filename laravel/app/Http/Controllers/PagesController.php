<?php
/*
 * Creator: Ozz
 */

namespace App\Http\Controllers;

use App\Post;


class PagesController extends Controller {

    public function getBlog() {
        $isLoged = true;
        $posts = Post::all();
        $data = [];
        $data['isLoged'] = $isLoged;
        $data['posts'] = $posts;
        return view('pages.blog')->with("data", $data);
    }

    public function getHome() {
        #Process data
        $isLoged = false;
        return view('pages.home')->with("isLoged", $isLoged);
    }
/*
    public function getLogIn() {
        $isLoged = false;

        return view('pages.log_in')->with("isLoged", $isLoged);
    }
*/
    public function getSnake() {
        return view('pages.snake');
    }

    public function getPostCreate() {
        $isLoged = false;
        return view('posts.create')->with("isLoged", $isLoged);
    }
}