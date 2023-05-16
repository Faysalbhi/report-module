<?php

namespace App\View\Components\baf;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Database extends Component
{
    public $title;
    public $databaseName;
    public function __construct($title,$databaseName)
    {
        $this->title=$title;
        $this->databaseName=$databaseName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.baf.database');
    }
}
