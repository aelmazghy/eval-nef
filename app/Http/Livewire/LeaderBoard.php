<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LeaderBoard extends Component
{
    public $comments;
    public $evaluations;

    public function  __construct()
    {
        // $this->comments = \DB::table('comments')->get();
        // $this->bad = \DB::table('evaluations')->where('result', 3)->count();
        // $this->good = \DB::table('evaluations')->where('result', 1)->count();
        // $this->neutral = \DB::table('evaluations')->where('result', 2)->count();
        // $this->evaluations = $this->getResults();
    }

    public function render()
    {
        return view('livewire.leader-board');
    }

    public function mount()
    {
        $this->getResults();
    }

    public function getResults() {
        $this->comments = \DB::table('comments')->get();
        $this->bad = \DB::table('evaluations')->where('result', 3)->count();
        $this->good = \DB::table('evaluations')->where('result', 1)->count();
        $this->neutral = \DB::table('evaluations')->where('result', 2)->count();
        $results = [
            [
                'id' => 0,
                'name' => 'TRÈS SATISFAIT',
                'note' => $this->good
            ],
            [
                'id' => 1,
                'name' => 'NEUTRE',
                'note' => $this->neutral
            ],
            [
                'id' => 2,
                'name' => 'TRÈS INSATISFAIT',
                'note' => $this->bad
            ]
        ];
        // sort results array by note
        $this->evaluations = collect($results)->sortByDesc('note')->values()->all();
    }
}
