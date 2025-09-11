<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class Showtweets extends Component
{

    public $message = "Hello World";

    public function render()
    {
        $tweets = Tweet::with('user')->get();//dessa forma é mais otimizado, usando o with

        return view('livewire.showtweets', compact('tweets'));
    }
}
