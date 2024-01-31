<?php

namespace App\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public function changeStatus($id)
    {
        $data = Product::where('id', $id)->first();

        if ($data->status == 1) {
            $data->status = 0;
        } else {
            $data->status = 1;
        }
        $data->save();
        session()->flash('valid', 'Status changed');
    }

    public function editRedirect($id)
    {
        return redirect()->route('edit-product', $id);
    }

    public function render()
    {
        return view('livewire.admin.products.index', [
            'data' => Product::orderBy('created_at', 'DESC')->get(),
        ]);
    }
}
