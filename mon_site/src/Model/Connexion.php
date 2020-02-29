<?php
namespace App\Model;

class Connexion
{
    private static $instance;
    private $connexion;

    private function __construct() {

    }

    public static function getInstance():Connexion {
        if(self::$instance === null) {
            self::$instance = new Connexion();

        }
        return self::$instance;
    }

    public function connect(){
        //@todo connexion à la BDD
        if($this->connexion ===null) {
            $this->connexion = pg_connect(
                'host=127.0.0.1 dbname=mon-site port=5432 user=superadmin password=test');
        }
    return $this->connexion;
    }

    public function getVersion():String {
        $result = pg_query($this->connexion, "SELECT version();");
        $version = '';
        while ($data = pg_fetch_object($result)) {
            $version = $data->version;
        }
        pg_free_result($result);
        return $version;

    }
    public function disconnect(){
        //@todo deconnexion à la BDD
        if($this->connexion !== null) {
            pg_close($this->connexion);
            $this->connexion = null;
        }

    }

    /**
     * @return mixed
     */
    public function getConnexion()
    {
        return $this->connexion;
    }
}