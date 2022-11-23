<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttribute;
use Livewire\Component;

class AdminAddAtributeComponent extends Component
{
    public $name;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required'
        ]);
    }

    public function storeAttribute(){
        $this->validate([
            'name'=>'required'
        ]);

        $pattribute = new ProductAttribute();
        $pattribute->name = $this->name;
        $pattribute->save();
        session()->flash('message','Attribute Has Been Created');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-atribute-component')->layout('layouts.base');
    }
}
