<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarLayout extends Component
{
    public $studyprogram;
    public $grades;

    public function __construct($studyprograms = [],$grades = [])
    {
        $this->studyprogram = $studyprograms;
        $this->grades = $grades;
    }

    public function render()
    {
        return view('components.sidebar-layout');
    }
}
