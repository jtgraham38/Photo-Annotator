<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;


class PhotoUpload extends Component
{
    use WithFileUploads;
 
    public $photos = [];
 
    public function save()
    {
        $this->validate([
            'photos.*' => 'image|max:1024', // 1MB Max
        ]);
 
        // Store photos on nextcloud
        foreach ($this->photos as $photo) {
            $photo->store( '.' , 'nextcloud' );
        }
    }

    public function render()
    {
        return view('livewire.photo-upload');
    }
}
