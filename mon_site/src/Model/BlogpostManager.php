<?php


namespace App\Model;


class BlogpostManager
{
    private $connexion;
    /**
     * BlogpostManager constructor.
     */
    public function __construct(Connexion $connexion)
    {
        $this->connexion = $connexion;

    }

    public function list() {
        $this->connexion->connect();
        $result = pg_query($this->connexion->getConnexion(),"SELECT * FROM blogpost;");
        $blogs = [];
        while ($data = pg_fetch_object($result)) {
            $blogs[] = new Blogpost(
                $data->id,
                $data->title,
                $data->content,
                $data->publication_date
            );
        }
        pg_free_result($result);
        return $blogs;
    }

    public function get($id) {

    }

}