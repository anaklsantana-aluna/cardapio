<?php

namespace App\Livewire;

use App\Support\MenuCatalog;
use Livewire\Component;

class MenuPage extends Component
{
    public function render()
    {
        return view('livewire.menu-page', ['dishes' => MenuCatalog::all()])
            ->layout('layouts.app', ['title' => 'Cardápio — Meu Cardápio']);
    }
}
