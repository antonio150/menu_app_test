<?php

namespace App\Twig\Components;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('menu')]
class MenuComponent
{
    public array $items = [];
    public string $activeRoute = '';

    public function __construct(private Security $security)
    {
        $this->items = [
            ['label' => 'Accueil', 'route' => 'app_home'],
            ['label' => 'A propos', 'route' => 'app_about'],
            ['label' => 'Contact', 'route' => 'app_contact'],
        ];
    }
}
