<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreatePost extends Component
{
    public $user, $name;
    
    public function mount(User $user){
        $this->fill($user->only(['name', 'email']));
    }

    public function save(){
        // dd($this->name);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
