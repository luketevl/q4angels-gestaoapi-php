<?php
namespace GestaoApi\Sdk;


trait CaseConverter
{
    use CaseConverter;
    /**
     * @param string $sentence
     * @return string
     */
    public function snakeToUpperCamel(string $sentence) : string
    {
        return preg_replace_callback("/(?:^|_)([a-zA-Z])/", function ($word) {
            return strtoupper($word[1]);
        }, $sentence);
    }
    /**
     * @param string $sentence
     * @return string
     */
    public function snakeToLowerCamel(string $sentence) : string
    {
        return lcfirst($this->snakeToUpperCamel($sentence));
    }
}