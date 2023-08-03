<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // web page view GET
    public function home()
    {
        $context = [
            'page'=>'Home',
        ];

        return view('home', compact('context'));
    }
    public function profile()
    {
         // data sample
         $profiles = collect([
            (object)[
                'id'=>1,
                'name'=>'Citra Kirana'
            ],
            (object)[
                'id'=>2,
                'name'=>'Kirana Citra'
            ],
        ]);   
        $context = [
            'page'=>'Profile',            
        ];        
        return view('profile', compact('context', 'profiles'));
    }
    public function project()
    {
        $context = [
            'page'=>'Project',
        ];

        return view('project', compact('context'));
    }
    public function research()
    {
        $context = [
            'page'=>'Research',
        ];
        $data = Research::paginate(10);
        return view('research', compact('context', 'data'));
    }
    public function activities()
    {
        $context = [
            'page'=>'Activities',
        ];

        return view('activities', compact('context'));
    }
    public function login()
    {
        $context = [
            'page'=>'login',
        ];

        return view('login', compact('context'));
    }
    public function register()
    {
        $context = [
            'page'=>'register',
        ];

        return view('register', compact('context'));
    }

    // open view GET
    // Request $request, $id
    public function openProfile(Request $request)
    {
        // data sample
        $profiles = collect([
            (object)[
                'id'=>1,
                'name'=>'Citra Kirana'
            ],
            (object)[
                'id'=>2,
                'name'=>'Kirana Citra'
            ],
        ]);      
        
        $context = [
            'page'=>'Profile A',
            'id'=>$request->id,
        ];
        $profile = $profiles->firstWhere('id', $request->id);        
        return view('inside.profile', compact('context', 'profile'));
    }
    public function openProject()
    {
        $context = [
            'page'=>'Project A',
        ];
        return view('inside.project', compact('context'));
    }
    public function openResearch($id)
    {
        $context = [
            'page'=>'Research '.$id,
        ];
        $data = Research::find($id);
        // dd($data);
        return view('inside.research', compact('context', 'data'));
    }
    public function openActivities()
    {
        $context = [
            'page'=>'Activities A',
        ];
        return view('inside.activities', compact('context'));
    }

}
