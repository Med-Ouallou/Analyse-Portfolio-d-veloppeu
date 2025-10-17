<?php

namespace App\Service;

class DeveloperService{
    public function getinfo(){
        return [
            'name' => 'Mohamed Ouallou',
            'role' => 'Full Stack Web Developer',
            'bio' => 'Passionné par le développement web moderne, je crée des solutions élégantes et performantes.',
            'email' => 'mohamed.ouallou@example.com',
        ];
    }
}