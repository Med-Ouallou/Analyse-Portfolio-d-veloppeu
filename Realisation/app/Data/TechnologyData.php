<?php

namespace App\Data;

class TechnologyData
{
    public function getTechnologies()
    {
        return [
            ['id' => 1, 'name' => 'Laravel'],
            ['id' => 2, 'name' => 'JavaScript'],
            ['id' => 3, 'name' => 'Tailwind CSS'],
            ['id' => 4, 'name' => 'MySQL'],
            ['id' => 5, 'name' => 'Java'],
            ['id' => 6, 'name' => 'JavaFx'],
            ['id' => 7, 'name' => 'PHP'],
            ['id' => 8, 'name' => 'HTML/CSS']
        ];
    }

    public  function getByIds($id)
    {
        $all = $this->getTechnologies();
        return array_filter($all, fn($tech) => in_array($tech['id'], $id));
    }
}