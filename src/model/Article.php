<?php

namespace App\src\model;

class Article
{
    private $id;

    private $title;

    private $content;

    private $author;

    private $date_added;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getDate_added()
    {
        return $this->date_added;
    }

    public function setDate_added($date_added)
    {
        $this->date_added=$date_added;
    }
}