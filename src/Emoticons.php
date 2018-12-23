<?php

namespace Lacasera\Emojis;

use Exception;

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

    public function getCategory($category)
    {
        if (!property_exists(self::class, $category)){
            throw new Exception("No category found for '$category'",500);
        }
        return $this->$category;
    }

    private function appendSemiColonToName($name)
    {
        if (!str_contains($name, ':'))
            return ':'.$name;
        return $name;
    }
}