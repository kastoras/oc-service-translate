<?php

class ModelExtensionModuleStHtmlDecode extends Model
{

    private $str;

    public function __construct($registry, $str)
    {
        parent::__construct($registry);

        $this->str = $str;
    }

    public function removeHTMLCodes($codes): void
    {
        $this->str = str_replace($codes, '', $this->str);
    }

    public function decode(): void
    {
        $this->str = html_entity_decode($this->str);
    }

    public function get(): string
    {
        return $this->str;
    }
    public static function clearAll($text)
    {
        $codes = ['<b>', '</b>', '<div>', '</div>', '<em>', '</em>', '<i>', '</i>', '<p>', '</p>', '<span>', '</span>', '<strong>', '</strong>'];
        $text = str_replace($codes, '', $text);
        return html_entity_decode($text);
    }
}
