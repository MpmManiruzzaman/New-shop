<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function colorCreate()
    {
        $categories = Category::get();
        return view('backend.admin.color.create', compact('categories'));
    }

    public function colorManage()    
    {
        $colors = Color::with('category')->paginate(5);
        return view('backend.admin.color.list', compact('brands'));
    }

    public function colorStore(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required|integer',
            'name' => 'required|string'
        ]);

        $color = new Color();
        $color->category_id = $request->category_id;
        $color->name = $request->name;
        $color->slug = str_replace(' ', '-', strtolower($request->name));
        $color->save();
        return redirect()->back()->with('success', 'Color has been created');
    }
}
