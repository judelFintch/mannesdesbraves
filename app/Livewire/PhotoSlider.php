<?php

namespace App\Livewire;

use Livewire\Component;

class PhotoSlider extends Component
{
    public array $slides = [];
    public int $current = 0;

    public function mount(): void
    {
        // Slides can be moved to config or DB later
        $this->slides = [
            ['image' => 'img/project-1.svg', 'title' => 'Project Title One', 'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'alt' => 'Project 1 — Robotic Automation'],
            ['image' => 'img/project-2.svg', 'title' => 'Project Title Two', 'excerpt' => 'Ut enim ad minim veniam.', 'alt' => 'Project 2 — Machine Learning'],
            ['image' => 'img/project-3.svg', 'title' => 'Project Title Three', 'excerpt' => 'Duis aute irure dolor in reprehenderit in voluptate.', 'alt' => 'Project 3 — Predictive Analysis'],
        ];
    }

    public function next(): void
    {
        $this->current = ($this->current + 1) % count($this->slides);
    }

    public function prev(): void
    {
        $this->current = ($this->current - 1 + count($this->slides)) % count($this->slides);
    }

    public function goTo(int $index): void
    {
        if ($index >= 0 && $index < count($this->slides)) {
            $this->current = $index;
        }
    }

    public function render()
    {
        return view('livewire.photo-slider');
    }
}
