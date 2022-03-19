<?php

namespace App\Http\Livewire\Seller;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class SellerCategoryComponent extends Component
{
    use WithPagination;

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message', 'Category has been deleted successfully!');
    }

    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.seller.seller-category-component', ['categories' => $categories])->layout('layouts.base');
    }
}
