<?php

namespace Lacasera\Emojis;

class Emoticons
{
    use Faces, Animals;

    protected $emojis;

    public function __construct()
    {
       $this->emojis = collect(array_merge(
           $this->faces,
           $this->animals
       ));
    }

    public function getEmoji($name)
    {
        return $this->emojis->get($this->appendSemiColonToName($name));
    }

    public function getRandomEmojis()
    {
        return $this->emojis->random();
    }

    protected function appendSemiColonToName($name)
    {
        if (!str_contains($name, ':'))
            return ':'.$name;
        return $name;
    }
}