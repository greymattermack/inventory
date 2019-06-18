<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoresController extends Controller
{
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('auth');
        }
    
        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function index()
        {
            $stores = Store::all();
            return view('stores',compact("stores"));
        }

        public function getcreate()
        {
            return view('stores_create');
        }

        public function postcreate(Request $request)
        {
            $store = new Store;
            $store->name = $request->get("store");
            $store->address = $request->get("address");
            $store->save();

            return redirect("/stores");
        }
}
