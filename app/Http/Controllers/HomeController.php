<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }
    public function macro()
    {
        return view('photographer');
    }

    // Outreach & Talks page
    public function outreach()
    {
        return view('outreach');
    }

    // Publications page
    public function publications()
    {
        return view('publications');
    }

    // Research page
    public function research()
    {
        return view('research');
    }

    // Teaching page
    public function teaching()
    {
        return view('teaching');
    }

    // Blog page
    public function blog()
    {
        return view('blog');
    }





     public function admin()
    {
        $user = Auth::user();

        if (!Auth::check()) {
            return redirect('/login');
        }

        // $orders = Order::with(['items.food', 'user','location'])->get();
        // $pendingOrders = Order::where('status', 0)->count();
        // $todayOrders = Order::whereDate('created_at', now())->count();
        // $completedOrders = Order::where('status', 2)->count();
        // $rejectedOrders = Order::where('status', 3)->count();
        // $inProgressOrders = Order::where('status', 1)->count();

        // $categories = Category::withCount('foods')->where('status', 1)->get();
        // $latestOrders = Order::with('user')->latest()->take(5)->get();
 return view('layouts.admin');
        // return view('layouts.admin', compact(
        //     // 'pendingOrders',
        //     // 'todayOrders',
        //     // 'completedOrders',
        //     // 'rejectedOrders',
        //     // 'categories',
        //     // 'latestOrders',
        //     // 'inProgressOrders',
        //     // 'orders'
        // ));
    }


}
