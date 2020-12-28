<?php


namespace JeroenNoten\LaravelAdminLte\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    /**
     * The crumbs of current path [name => link]
     * @var array
     */
    public $crumbs;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($crumbs = null)
    {
        $this->crumbs = $crumbs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminlte::components.breadcrumb');
    }
}
