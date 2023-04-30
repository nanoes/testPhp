<?php

namespace App; 
use PHPUnit\TextUI\Command\Command;

class Post
{
    protected $comment = [];

    public function addComment(Comment $comment)
    {
        $this->comment[] = $comment;
    }

    public function countComments()
    {
        return count($this->comments);
    }

    public function getComments()
    {
        return $this -> comments;
    }
}