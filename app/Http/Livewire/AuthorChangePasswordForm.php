<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AuthorChangePasswordForm extends Component
{
    public $current_password, $new_password, $confirm_password;
    public function changePassword()
    {
        $this->validate(
            [
                'current_password' => [
                    'required', function ($attribute, $value, $fail) {
                        if (!Hash::check($value, User::find(Auth::user()->id)->password)) {
                            return $fail(__('The current password is incorrect'));
                        }
                    }
                ],
                'new_password' => 'required|min:5|max:25',
                'confirm_password' => 'same:new_password',
            ],
            [
                'current_password.required' => 'Enter your current password',
                'newpassword.required' => 'Enter your new password',
                'confirm_password.same' => 'Confirm password not matched'

            ],
        );

        $passwordUpdated = User::find(Auth::user()->id)->update([
            'password' => Hash::make($this->new_password),
        ]);

        if($passwordUpdated){
            $this->showToaster('Password updated successfully!', 'success');
            $this->current_password = $this->new_password = $this->confirm_password = null;
        }else {
            $this->showToaster('Update password failed!', 'error');
        }

    }

    public function showToaster($message, $type)
    {
        return $this->dispatchBrowserEvent('showToaster',[
            'message' => $message,
            'type' => $type,
        ]);
    }
    public function render()
    {
        return view('livewire.author-change-password-form');
    }
}
