<?php 

namespace App\Controllers;

use App\Models\Info_site_model;

class Home extends BaseController
{
	public function index() // affichage de la vue home à la connexion 
	{
		// $data['liste'] =$test->get_all();
		echo view('home.php');
	}


	public function indexo($p) // appel de la methode de mon model qui requete sur ma table et l'affiche dans la view 
	{
		$test = new Info_site_model();
		$data['site'] = $test->get_site($p);
		$data['note'] = $p; // récuperation de l'id que l on réutilisera dans l'url et ainsi le passer en argument pour notre prochaine méthode
		$data['skeleton'] = $p;
		echo view('home.php');
		echo view('info_site.php',$data);
	}

	public function indexo_n($p)
	{
		$test1 = new Info_site_model();
		$data['liste_notes'] = $test1->get_notes($p);
		$data['index'] = $p;
		// $data['location'] = $liste[0]->location;
		echo view('home.php');
		echo view('notes.php',$data); 
	}

	public function indexo_s($p)
	{
		$test2 = new Info_site_model();
		$data['liste_skeletons'] = $test2->get_skeletons($p);
		$data['index'] = $p;
		echo view('home.php');
		echo view('skeletons.php',$data); 
	}

	public function skel_info($p)
	{
		$test3 = new Info_site_model();
		$data['dino_info'] = $test3->get_dino_info($p);
		$data['index'] = $p;
		echo view('home.php');
		echo view('dino_info',$data);
	}
}
