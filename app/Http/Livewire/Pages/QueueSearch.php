<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Queue;
use Auth;

class QueueSearch extends Component
{
    use WithPagination;

    public $search, $queues;

    public function searchx()
    {
        $this->search = $this->search;
    }
    public function mount()     
    {
        $this->queues = Queue::where('user_id', Auth::user()->id)->get();
    }
    public function render()
    {
        return view('livewire.pages.queue-search');
    }
}