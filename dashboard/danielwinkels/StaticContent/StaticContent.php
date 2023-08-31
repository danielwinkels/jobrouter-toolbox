<?php
namespace dashboard\danielwinkels\StaticContent;
 
use JobRouter\Api\Dashboard\v1\Widget;
 
class StaticContent extends Widget
{
    public function getTitle()
    {
        return "Wichtige Informationen";
    }
 
    public function getCategory()
    {
        return 'gruppe_allgemein';
    }
 
    public function getDimensions()
    {
        return ([
            'minHeight' => 2,
            'minWidth' => 2,
            'maxHeight' => 4,
            'maxWidth' => 4,
        ]);
    }
 
    public function getData()
    {
        return [];
    }
 
    private function getActiveUsers()
    {
        $jobDB = $this->getJobDB();
        $sql = 'SELECT username as label, last_action as value FROM JRSESSIONS';
 
        $result = $jobDB->query($sql);
 
        if ($result === false) {
            return [];
        }
 
        return $jobDB->fetchAll($result);
    }
 
    public function isAuthorized()
    {
        return false;
    }
 
    public function isMandatory()
    {
        return false;
    }
}