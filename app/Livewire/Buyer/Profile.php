<?php

namespace App\Livewire\Buyer;

use Livewire\Component;
use App\Models\User;
use Mary\Traits\Toast;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use Toast, WithFileUploads;

    public $f_name, $l_name, $email, $phone_no, $location;

    public $profile_photo_path;

    public function mount()
    {
        $user = User::find(auth()->user()->id);
        $this->f_name = $user->f_name;
        $this->l_name = $user->l_name;
        $this->email = $user->email;
        $this->phone_no = $user->phone_no;
        $this->location = $user->location;
    }

    public function uploadProfilePhoto()
    {
        if ($this->profile_photo_path && auth()->user()->id) {
            $path = $this->profile_photo_path->store('public/profile-photos', 'public');
            
            // Fetch the user by the stored user ID
            $user = User::find(auth()->user()->id);
            if ($user) {
                $user->profile_photo_path = $path;
                $user->save();
    
                $this->success('Profile photo uploaded successfully');
            } else {
                $this->error('User not found.');
            }
        } else {
            $this->error('No photo uploaded.');
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required',
            'location' => 'required',
        ]);
    }

    public function updateProfile()
    {
        $user = User::find(auth()->user()->id);
        $user->f_name = $this->f_name;
        $user->l_name = $this->l_name;
        $user->email = $this->email;
        $user->phone_no = $this->phone_no;
        $user->location = $this->location;
        $user->save();

        $this->success('Profile updated successfully');
    }
    public function render()
    {
        $this->avatarPath = User::find(auth()->user()->id)->profile_photo_path;
        return view('livewire.buyer.profile');
    }
}

