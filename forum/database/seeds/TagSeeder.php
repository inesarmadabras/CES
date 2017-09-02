<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run()
    {
        $this->createTag('MySNS', 'mysns');
        $this->createTag('MySNS Tempos', 'mysns tempos');
        $this->createTag('MySNS Carteira', 'mysns carteira');
        $this->createTag('Sugestão', 'sugestao');
        $this->createTag('Bugs', 'bugs');
        $this->createTag('Ajuda', 'ajuda');
        $this->createTag('Outros', 'outrs');
    }

    private function createTag($name, $slug)
    {
        factory(Tag::class)->create(compact('name', 'slug'));
    }
}
