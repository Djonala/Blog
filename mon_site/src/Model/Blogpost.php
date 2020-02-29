<?php

namespace App\Model;
use DateTime;
use DateTimeInterface;

class Blogpost
{
    private $id;
    private $title;
    private $content;
    private $publication_date;

    /**
     * Blogpost constructor.
     * @param $id
     * @param $title
     * @param $content
     * @param $publication_date
     */
    public function __construct(
        int $id =null,
        string $title =null ,
        string $content=null,
        DateTimeInterface $publication_date =null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->publication_date = $publication_date ?? newDateTime();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return DateTime|DateTimeInterface
     */
    public function getPublicationDate()
    {
        return $this->publication_date;
    }

    /**
     * @param DateTime|DateTimeInterface $publication_date
     */
    public function setPublicationDate($publication_date): void
    {
        $this->publication_date = $publication_date;
    }


}