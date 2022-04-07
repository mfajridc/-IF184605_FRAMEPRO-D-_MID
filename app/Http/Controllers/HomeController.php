<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function home()
    {
        return view('main.index',[
            'title' => 'Home'
        ]);
    }

    public function blog()
    {
        return view('main.blog.index',[
            'title' => 'Blog',
            'posts' => Post::latest()->get(),
        ]);
    }

    public function post(Post $post)
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in' . $category->name;
        }

        return view('main.blog.post', [
            "title" => 'Post',
            "post" => $post,
        ]);
    }

    public function search()
    {
        return view('main.blog.search',[
            'title' => 'Search',
            'posts' => Post::latest()->filter(request(['category']))->paginate(6)->withQueryString(),
        ]);
    }


    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login failed!',);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // 'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/')->with('success', 'Registration successful! Please login');
    }

}
