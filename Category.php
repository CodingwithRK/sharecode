<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Category')]
class Category extends Component
{
    public $id;

    #[Rule('required')]
    #[Rule('unique:categories,title', onUpdate: false)]
    public $title;

    #[Rule('required')]
    public $status;

    public function mount()
    {
        if (request()->routeIs('admin.edit-category')) {
            $data = \App\Models\Category::where(['id' => $this->id])->first();
            $this->title = $data->title;
            $this->status = $data->status;
        }
    }

    public function save()
    {
        $this->validate();
        \App\Models\Category::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'status' => $this->status,
            'user_id' => Auth::user()->id,

        ]);
        session()->flash('success', 'New category added');
        $this->redirect('/admin/category', navigate: true);
    }

    public function edit()
    {
        $this->validate();
        \App\Models\Category::where(['id' => $this->id])->update([
            'title' => $this->title,
            'status' => $this->status
        ]);
        session()->flash('success', 'Category edited successfully');
        $this->redirect('/admin/category', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.category');
    }
}
