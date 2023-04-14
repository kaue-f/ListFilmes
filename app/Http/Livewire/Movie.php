<?php

namespace App\Http\Livewire;

use App\Models\filme;
use Laravel\Sail\Console\PublishCommand;
use Livewire\Component;


class Movie extends Component
{   


    public function render()
    {
        return view('{{livewire.table');
    }

    public function movie($id){
        
        $movie = filme::find($id);

        //dd($movie);

        return view('livewire.movie', compact('movie'));
    }
}
