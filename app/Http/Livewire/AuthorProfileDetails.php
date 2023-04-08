<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AuthorProfileDetails extends Component
{
    public $author;
    public $name, $username, $email, $biography;

    public function mount()
    {
        $this->author = User::find(Auth::user()->id);
        $this->name = $this->author->name;
        $this->username = $this->author->username;
        $this->email = $this->author->email;
        $this->biography = $this->author->biography;
    }

    public function UpdateDetails()
    {
        $this->validate([
            'name' => 'required|string',
            'username' => 'required|unique:users,username,' . auth('web')->id(),
        ]);

        User::find(Auth::user()->id)->update([
            'name' => $this->name,
            'username' => $this->username,
            'biography' => $this->biography,
    
        ]);

        $this->emit('updateAuthorProfileHeader');
        $this->emit('updateTopHeader');

        $this->showToaster('Your Profile info updated successfully!','success');

    }

    public function showToaster($message, $type)
    {
        return $this->dispatchBrowserEvent('showToaster',[
            'type' => $type,
            'message' => $message,
        ]);
    }

    public function render()
    {
        return view('livewire.author-profile-details');
    }
}
