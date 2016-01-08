<?php

namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class AbstractFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
abstract class AbstractFactory
{
    /**
     * @param $content
     * @return mixed
     */
    abstract public function createText($content);

    /**
     * @param $path
     * @param string $name
     * @return mixed
     */
    abstract public function createPicture($path, $name = '');
}
