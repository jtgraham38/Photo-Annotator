<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\PhotoRecord;


class PhotoUpload extends Component
{
    use WithFileUploads;
 
    public $photos = [];
    public $notification = '';
 
    public function save()
    {

        //validate the photos
        $this->validate([
            'photos.*' => 'image|mimes:jpeg,png,jpg,webp|max:1024', // 1MB Max
        ]);

        //get the disk to store the photos on
        $disk = env('DEFAULT_STORAGE_DISK');
 
        // Store photos on nextcloud
        foreach ($this->photos as $photo) {
            //store the photo file
            $path = $photo->store('photos', $disk);

            //get photo attributes
            $size = $photo->getSize();
            $mime = $photo->getMimeType();
            $name = basename($path);

            //create a photo record
            PhotoRecord::create([
                'name' => $name,
                'mime_type' => $mime,
                'size' => $size,
                'path' => $path,
                'disk' => $disk,
            ]);

            
            //show a success message, x photos uploaded successfully
            $this->notification = count($this->photos) . ' photos uploaded successfully.';
            
            //clear the photos array
            $this->photos = [];
        }
    }

    public function render()
    {
        return view('livewire.photo-upload');
    }
}
