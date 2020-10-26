<?php

namespace App\Models{
    use CodeIgniter\Model;

    class Info_site_model extends Model
    {
        //connexion à DB et recuperation des infos sur les differents sites de fouille
        public function get_site($p){ 
            $db = \Config\Database::connect();
            $query_sites = $db->query("SELECT location, info_site, coordinates, name, phone FROM Sites INNER JOIN Managers ON Sites.manager_id = Managers.manager_id WHERE site_id = $p")->getResult();
            // $results = $query->getResult();
            // foreach ($results as $row)
            // {
            //         echo $row->id;
            //         echo $row->name;
            //         echo $row->number;
            // }
            return $query_sites;
        }
        //connexion DB et recuperation des differents notes relatives au site de fouille selectionné
        public function get_notes($p)
        {
            $db = \Config\Database::connect();
            $query_notes = $db->query("SELECT title, content, date, Sites.location FROM Notes INNER JOIN Sites ON Notes.site_id = Sites.site_id WHERE Sites.site_id = $p")->getResult();
            return $query_notes;
        }

        //connexion DB et recuperation des squelettes présents sur chaque site
        public function get_skeletons($p)
        {
            $db = \Config\Database::connect();
            $query_skeletons = $db->query("SELECT name, skeleton_id, Sites.location FROM skeletons INNER JOIN Sites ON skeletons.site_id = Sites.site_id WHERE Sites.site_id = $p")->getResult();
            return $query_skeletons;
        }

        //connextion DB et recuperation des info relatives a chaque squelette de dino
        public function get_dino_info($p)
        {
            $db = \Config\Database::connect(); // $db = db_connect();
            $query_dino = $db->query("SELECT name, photo, depht, position, Sites.location, Sites.site_id FROM skeletons INNER JOIN Sites ON skeletons.site_id = Sites.site_id WHERE skeletons.skeleton_id = $p")->getResult();
            return $query_dino;
        }
    }
}
