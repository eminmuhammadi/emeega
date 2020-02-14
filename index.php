<?php

	/**
	*  @author Emin eminmuhammadi <muemin17631@sabah.edu.az>
	*  @license MIT
	*/
	require_once 'vendor/autoload.php';

	/**
	 * Cache Extension
	 */
	$cacheProvider  = new \Twig\CacheExtension\CacheProvider\DoctrineCacheAdapter(new \Doctrine\Common\Cache\ArrayCache());
	$cacheStrategy  = new \Twig\CacheExtension\CacheStrategy\LifetimeCacheStrategy($cacheProvider);

	/**
	 * Main variables
	 */
	$build    = new eminmuhammadi\emeega\Builder\Assets('public/build/entrypoints.json');
	$env 	    = (new \Symfony\Component\Dotenv\Dotenv())->load(__DIR__.'/.env');
	$template = new \Twig\Loader\FilesystemLoader('assets/view');
	$html     = new \Twig\Environment($template, []);

	/**
	 * Extensions
	 */
	$html->addExtension(new \nochso\HtmlCompressTwig\Extension());
	$html->addExtension(new \Twig\CacheExtension\Extension($cacheStrategy));

	/**
	 * Render
	 */
	print($html->render('app.html.twig', [
		'PUBLIC_URL'   => $_ENV['PUBLIC_URL'],
		'PUBLIC_PATH'  => $_ENV['PUBLIC_PATH'],
		'CSS' => ($build->build_css_tags('css/app',$_ENV['PUBLIC_URL'])),
		'JS'  => ($build->build_js_tags('js/app',$_ENV['PUBLIC_URL']))
	]));
