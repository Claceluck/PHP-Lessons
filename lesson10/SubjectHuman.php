<?php
require_once 'Human.php';
class SubjectHuman extends Human
{
    protected $subject;

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }
}