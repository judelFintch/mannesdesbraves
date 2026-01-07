<?php

namespace App\Livewire;

use Livewire\Component;

class TestimonialCarousel extends Component
{
    public array $items = [];
    public int $current = 0;

    public function mount(): void
    {
        $this->items = [
            ['text' => 'Service rapide et professionnel, très satisfait.', 'author' => 'Jean K.', 'role' => 'Importateur', 'avatar' => 'img/testimonial-1.jpg'],
            ['text' => 'Ils ont géré toutes nos formalités douanières sans accrocs.', 'author' => 'Marie L.', 'role' => 'Exportatrice', 'avatar' => 'img/testimonial-2.jpg'],
            ['text' => 'Accompagnement personnalisé et équipe disponible.', 'author' => 'Paul M.', 'role' => 'Logisticien', 'avatar' => 'img/testimonial-3.jpg'],
        ];
    }

    public function next(): void
    {
        $this->current = ($this->current + 1) % count($this->items);
    }

    public function prev(): void
    {
        $this->current = ($this->current - 1 + count($this->items)) % count($this->items);
    }

    public function goTo(int $index): void
    {
        if ($index >= 0 && $index < count($this->items)) {
            $this->current = $index;
        }
    }

    public function render()
    {
        return view('livewire.testimonial-carousel');
    }
}
