<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function home(Request $request)
    {

        return view('back.pages.home');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('author.login');
    }

    public function changeProfilePicture(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $path = 'back/author-images/';
        $file = $request->file('file');
        $old_picture = $user->getAttributes()['picture'];
        $file_path = $path.$old_picture;
        $new_image_name = 'AIMG' . $user->id.time() . uniqid() . '.jpg';

        if($old_picture != null && File::exists(public_path($file_path)))
        {
            File::delete(public_path($file_path));
           
        } 

        $upload = $file->move(public_path($path), $new_image_name);
        if ($upload) {
            $user->update([
                'picture' => $new_image_name,
            ]);
            
            return response()->json(['status' => 1, 'msg' => 'Your profile picture has been successfully updated.']);
        } else {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong, try again later']);
        }
    }

   
}
