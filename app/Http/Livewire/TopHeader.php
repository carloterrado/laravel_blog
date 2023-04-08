<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TopHeader extends Component
{
    public $author;

    protected $listeners = [
        'updateTopHeader' => '$refresh'
    ];
    
    public function mount()
    {
        $this->author = User::find(Auth::user()->id);
    }

    public function render()
    {
        return view('livewire.top-header');
    }
}
