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

        $tweets = Tweet::with('user')->latest()->paginate(5);//dessa forma é mais otimizado, usando o with

        return view('livewire.showtweets', compact('tweets'));
    }

    public function create(){

        $this->validate();

        /*
        Tweet::create([
            'content' => $this->content,
            'user_id' => 1
        ]);
        */
        auth()->user()->tweets()->create([
            'content' => $this->content
        ]);

        $this->content = '';
    }

    public function like($idTweet){

        $tweet = Tweet::find($idTweet);

            $tweet->likes()->create([
                'user_id' => auth()->user()->id
            ]);
    }

    public function unlike(Tweet $tweet){

            $tweet->likes()->delete();
    }
}
