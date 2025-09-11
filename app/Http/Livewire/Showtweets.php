<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class Showtweets extends Component
{
    use WithPagination;//para paginação
    
    public $content = "Hello World";

    protected $rules = [
        'content' => 'required|min:3|max:255'
    ];

    public function render(){

        $tweets = Tweet::with('user')->paginate(2);//dessa forma é mais otimizado, usando o with

        return view('livewire.showtweets', compact('tweets'));
    }

    public function create(){

        $this->validate();

        Tweet::create([
            'content' => $this->content,
            'user_id' => 1
        ]);

        $this->content = '';
    }
}
