<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function form()
    {
        return view('form');
    }
    public function form1()
    {
        return view('form1');
    }
    public function class1()
    {
        return view('class1');
    }
    public function class2()
    {
        return view('class2');
    }
    public function class3()
    {
        return view('class3');
    }
    public function class4()
    {
        return view('class4');
    }
    public function class5()
    {
        return view('class5');
    }
    public function class6()
    {
        return view('class6');
    }
    public function class99()
    {
        return view('class7');
    }
}
