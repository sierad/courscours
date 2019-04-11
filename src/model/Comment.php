<?php
namespace App\src\model;

class Comment
{

    private $id;

    private $pseudo;

    private $content;

    private $date_added;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getDate_added()
    {
        return $this->date_added;
    }

    public function setDate_added($date_added)
    {
        $this->date_added = $date_added;
    }
}

