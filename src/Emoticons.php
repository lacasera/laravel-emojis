<?php

namespace Lacasera\Emojis;

class Emoticons
{
    use EmojiList;

    protected $emojis;

    public function __construct()
    {
       $this->emojis = collect($this->emogiList);
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