<?php

namespace DesignPatterns\Creational\AbstractFactory;


class JsonFactory extends AbstractFactory
{

    /**
     * @param $content
     * @return mixed
     */
    public function createText($content)
    {
        return new Json\Text($content);
    }

    /**
     * @param $path
     * @param string $name
     * @return mixed
     */
    public function createPicture($path, $name = '')
    {
        return new Json\Picture($path, $name);
    }
}