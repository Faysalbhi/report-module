<?php

namespace App\View\Components\baf;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Showtable extends Component
{
    public $dbName;
    public $table;

    public function __construct($databaseName,$table)
    {
        $this->dbName=$databaseName;
        $this->table=$table;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.baf.showtable');
    }
}
