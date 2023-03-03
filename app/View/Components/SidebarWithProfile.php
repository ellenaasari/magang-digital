<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarWithProfile extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $studyprogram;
    public $grades;

    public function __construct($studyprograms = [], $grades = [])
    {
        $this->studyprogram = $studyprograms;
        $this->grades = $grades;
    }
    public function render()
    {
        return view('components.sidebar-with-profile-layout');
    }
}
