<?php

namespace Marvel;

class Character
{
    /**
     * @return array
     */
    protected static function getCharacterInfo()
    {
        $data = explode('\\', get_called_class());
        return [
            'name' => array_pop($data),
            'place' => array_pop($data)
        ];
    }

    public static function whoAmI()
    {
        $character = static::getCharacterInfo();
        return 'I’m ' . $character['name'] . ' from ' . $character['place'];
    }
}