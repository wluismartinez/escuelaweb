<?php
/**
 * Created by PhpStorm.
 * User: Letalviruz
 * Date: 10/11/14
 * Time: 11:33 PM
 */

class UserController extends BaseController {


    public function index()
    {
        return View::make('/users.index');
    }

}
