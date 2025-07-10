<?php

namespace App\View\Components;

use App\Helpers\ContentUpdateFrequencyHelper;
use Illuminate\View\Component;

class ContentUpdateFrequencySelect extends Component
{
    public $contentUpdateFrequencies;
    public $value;

    /**
     * Create a new component instance.
     *
     * @param null|mixed $value
     */
    public function __construct(ContentUpdateFrequencyHelper $contentUpdateFrequencyHelper, $value = null)
    {
        $this->contentUpdateFrequencies = $contentUpdateFrequencyHelper->all();
        $this->value = $value ?? ContentUpdateFrequencyHelper::NEVER;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.content-update-frequency-select');
    }
}
