<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

      public $message;
      public $type;

    public function __construct($message, $type = null) 
    {
       $this->message = $message;
       $this->type = $type;
    }

    public function typeClass(){
        if ($this->type == 'success') {
            return 'alert-success';
        }
        elseif ($this->type == 'info') {
            return 'alert-info';
        }
        elseif ($this->type == 'warning') {
            return 'alert-warning';
        }
        elseif ($this->type == 'danger') {
            return 'alert-danger';
        }
        else {
            return 'alert-info';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
