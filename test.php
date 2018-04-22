<?php 

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('views');

$twig = new Twig_Environment($loader);

echo $twig ->render('test.html', array(
	'name' => 'USCSS Nostromo',
	'type' => 'Haular',
	'owner' => 'Weyland-Yutani',
	'reg-no' => '180924609',

	'crew' => array(

		array('name' =>'Ellen Ripley' ,'role'=> 'Warrant Officer','status' => 'Alive','reg-no' => '01'),
		array('name' =>'Ash' ,'role'=> 'Science Officer','notes' =>'Possibly synthetic', 'status' => 'Unkown','reg-no' => '02' ),
		array('name' =>'PArker' ,'role'=> 'Chief Engineer','status' => 'Dead','reg-no' => '03' ),
		array('name' =>'Dallas' ,'role'=> 'Captain','status' => 'Unkown','reg-no' => '04','badges' =>array('gold','sliver')),

	)

));
?>