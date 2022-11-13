<?php

namespace App\Http\Livewire\Filter;

use App\Models\product;
use Livewire\Component;

class Filtering extends Component
{
    public $searchColumn = [
        'name',
        'slug',
        'description',
        'price' => ['', ''],
        'category_id'
    ];
    
    public function render()
    {
        $products = product::select(['name','slug','description','price','category_id']);
        foreach ($this->searchColumn as $column => $value) {

            if (!empty($value)) {
                if ($column == 'name') {
                    $products->where($column,'like',"%$value%");
                }elseif ($column == 'slug') {
                    $products->where($column,'like',"%$value%");
                }elseif ($column == 'description') {
                    $products->where($column,'like',"%$value%");
                }elseif ($column == 'price') {
                    if (is_numeric($value[0])) {
                        $products->where($column,'>=',$value[0]);
                    }
                    if (is_numeric($value[1])) {
                        $products->where($column,'<=',$value[1]);
                    }
                }elseif ($column == 'category_id') {
                    $products->where($column,$value);
                }
            }
        }
        return view('livewire.filter.filtering',['products'=>$products->get()])->layout('layouts/app');
    }
}
