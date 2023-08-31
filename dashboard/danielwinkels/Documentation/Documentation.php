<?php
namespace dashboard\danielwinkels\Documentation;
 
use JobRouter\Api\Dashboard\v1\Widget;
 
class Documentation extends Widget
{
    public function getTitle()
    {
        return "Dokumentation";
    }
 
    public function getCategory()
    {
        return 'gruppe_allgemein';
    }
 
    public function getDimensions()
    {
        return ([
            'minHeight' => 1,
            'minWidth' => 1,
            'maxHeight' => 2,
            'maxWidth' => 2,
        ]);
    }
 
    public function getData()
    {
        return ["url" => "/dokumentation/documentation.html?t=" . round(microtime(true) * 1000)];
    }
 
    public function isAuthorized()
    {
        return true;
    }
 
    public function isMandatory()
    {
        return true;
    }
}