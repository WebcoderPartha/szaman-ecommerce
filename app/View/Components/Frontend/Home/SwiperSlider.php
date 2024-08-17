<?php

namespace App\View\Components\Frontend\Home;

use App\Models\Slider;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SwiperSlider extends Component
{
    /**
     * Create a new component instance.
     */

    public $sliders;

    public function __construct()
    {
        $this->sliders = Slider::where('status', 1)->orderBy('id', 'DESC')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.home.swiper-slider');
    }
}
