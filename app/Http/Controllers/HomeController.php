<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('usertype','user')->get()->count();
        $product = Product::all()->count();
        return view('admin.index', compact('user','product'));
    }
    public function home()
    {
        $product = Product::all();
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Favorite::where('user_id', $userid)->count();
        }
        else
        {
            $count = '';
        }
        return view('home.index', compact('product', 'count'));
    }

    public function login_home()
    {
        $product = Product::all();
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Favorite::where('user_id', $userid)->count();
        }
        else
        {
            $count = '';
        }
        return view('home.index', compact('product', 'count'));
    }

    public function product_details($id)
    {
        $data = Product::find($id);
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Favorite::where('user_id', $userid)->count();
        }
        else
        {
            $count = '';
        }
        return view('home.product_details', compact('data', 'count'));
    }

    public function favorite_page($id)
    {
        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;
        $data = new Favorite;
        $data->user_id = $user_id;
        $data->product_id = $product_id;
        $data->save();
        flash()->success('Favorilere Eklendi');
        return redirect()->back();
    }
    public function favorilerim()
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Favorite::where('user_id', $userid)->count();
            $favorites = Favorite::where('user_id', $userid)->get();
        }
        return view('home.favorilerim', compact('count', 'favorites'));
    }
    public function delete_favorite($id)
    {
        $data = Favorite::find($id);
        $data->delete();
        flash()->success('Ürün Başarıyla Favorilerden Kaldırıldı');
        return redirect()->back();
    }
}
