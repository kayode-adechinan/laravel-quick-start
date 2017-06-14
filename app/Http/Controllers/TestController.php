<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
use App\Role;
use App\Capability;
use App\Shop;
use App\Tag;
use App\Order;
use App\OrderLine;
Use App\PaymentMethod;

class TestController extends Controller
{
    // load some data in database
    public function index()
    {
        $role = Role::create([
            'name' => 'manager'
        ]);

        $user = User::create([
            'name' => 'john doe'
        ]);

        $user->roles()->attach($role->id);

        $shop = Shop::create([
            'name' => 'walmart',
            'user_id'=> $user->id
        ]);

        $cat = Category::create([
            'name' => 'mode'
        ]);

        $tag = Tag::create([
            'name' => 'men'
        ]);

        $product = Product::create([
            'name' => 'pant',
            'shop_id'=> $shop->id
        ]);

        $product->categories()->attach($cat->id);
        $product->tags()->attach($tag->id);


        echo 'everything is done !';









    }
}
