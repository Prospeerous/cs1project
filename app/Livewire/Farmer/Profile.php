<?php

namespace App\Livewire\Farmer;

use Livewire\Component;
use App\Models\User;
use Mary\Traits\Toast;

class Profile extends Component
{
    use Toast;

    public $f_name, $l_name, $email, $phone_no, $location;

    public function mount()
    {
        $user = User::find(auth()->user()->id);
        $this->f_name = $user->f_name;
        $this->l_name = $user->l_name;
        $this->email = $user->email;
        $this->phone_no = $user->phone_no;
        $this->location = $user->location;
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
        return view('livewire.farmer.profile');
    }
}
