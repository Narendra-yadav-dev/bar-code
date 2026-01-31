<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->paginate(10);
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.add', [
            'item' => null,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'status'=> 'required',
        ]);

        Item::create($request->only('name', 'status', 'description'));

        return redirect()->route('items.index')
            ->with('success', 'Item created');
    }

    public function edit(Item $item)
    {
        return view('items.add', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name'  => 'required|string',
            'status'=> 'required',
        ]);

        $item->update($request->only('name', 'status', 'description'));

        return redirect()->route('items.index')
            ->with('success', 'Item updated');
    }

    public function createPrice() {
        return view('items.addPrice', [
            'item' => null,
        ]);
    }
}
