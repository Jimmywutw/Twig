<?php

require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('views');

$twig = new Twig_Environment($loader);

$md5Filter = new Twig_SimpleFilter('md5',function($string) {

	return md5($string);


});

$twig->addFilter($md5Filter);

$lexer = new Twig_Lexer($twig, array(

	'tag_block'    => array('{','}'),

	'tag_variable' => array('{{ ','}}' )

));

$twig->setLexer($lexer);

echo $twig->render('index.html', array(
	'name' => 'Michael',
	'age' => 54,

	'users' =>array(

		array('name' => 'Max','age' =>22),
		array('name' => 'Jacky','age' =>42),
		array('name' => 'Jimmy','age' =>37),

		 ),

	'family' =>array(
		array('name' => 'John','age'=>55),
		array('name' => 'Mary','age'=>45),
		array('name' => 'ken','age'=>25),

		)

));

