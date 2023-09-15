<?php

namespace App\View\Components\search;

use Illuminate\View\Component;

class SearchTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url,$name;
    public function __construct($url,$name)
    {
        $this->url = $url;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search.search-table');
    }
}
