<?php

namespace App\Livewire;

use Livewire\Component;

class HeroCarousel extends Component
{
    public array $slides = [];
    public int $current = 0;

    public function mount(): void
    {
        // Load localized slides from lang files (home.php)
        $slides = trans('home.slides');
        if (is_array($slides) && count($slides) > 0) {
            // Ensure each slide contains image path and text keys
            $this->slides = array_map(function($s) {
                return array_merge([
                    'title' => $s['title'] ?? '',
                    'subtitle' => $s['subtitle'] ?? '',
                    'lead' => $s['lead'] ?? '',
                    'cta' => $s['cta'] ?? '',
                    'cta_link' => $s['cta_link'] ?? '#',
                    'image' => $s['image'] ?? 'img/hero-img.png',
                ], $s);
            }, $slides);
        } else {
            // Fallback to default defined in code
            $this->slides = [
                ['title' => 'Transitaire Officiel en RD Congo', 'subtitle' => 'Formalités douanières et logistique maîtrisées', 'lead' => 'La Manne des Braves simplifie vos formalités douanières et logistiques.', 'cta' => 'Nos Services', 'cta_link' => '#services', 'image' => 'img/hero-img.png'],
                ['title' => 'Simplifiez Vos Opérations Douanières', 'subtitle' => 'Un partenaire fiable pour vos flux import-export', 'lead' => "Votre partenaire de confiance pour des formalités douanières rapides et efficaces en RDC.", 'cta' => 'Demander un devis', 'cta_link' => '/contact', 'image' => 'img/1.png'],
            ];
        }
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
        return view('livewire.hero-carousel');
    }
}
