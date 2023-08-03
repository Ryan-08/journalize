<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // View
    public function profile()
    {
        $context = [
            'page'=>'Profile',
        ];
        return view('event.profile', compact('context'));
    }
    public function project($id = null)
    {
        $arr = [
            ['nama'=>'username', 'password'=>'secretpass'],
            ['nama'=>'username1', 'password'=>'secretpass1'],
            ['nama'=>'username2', 'password'=>'secretpass2'],
        ];
        $context = [
            'page'=>'Project',
            'data'=>null,
        ];
        // dd($id);
        if ($id != null) {
            $context['data'] = $arr[$id];
        }
        return view('event.project', compact('context'));
    }
    public function research()
    {
        $arr = [
            ['nama'=>'username', 'password'=>'secretpass'],
            ['nama'=>'username1', 'password'=>'secretpass1'],
            ['nama'=>'username2', 'password'=>'secretpass2'],
        ];
        $context = [
            'page'=>'Research',
            'data'=>null,
        ];
        // dd($id);       
        return view('event.research', compact('context'));
    }
    public function activities()
    {
        $arr = [
            ['nama'=>'username', 'password'=>'secretpass'],
            ['nama'=>'username1', 'password'=>'secretpass1'],
            ['nama'=>'username2', 'password'=>'secretpass2'],
        ];
        $context = [
            'page'=>'Activities',
            'data'=>null,
        ];
        // dd($id);        
        return view('event.activities', compact('context'));
    }

    // Edit Event
    
}
