<?php
// This file is generated. Do not modify it manually.
return array(
	'animate-on-scroll' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'school-site-blocks/animate-on-scroll',
		'version' => '0.1.0',
		'title' => 'Animate On Scroll',
		'category' => 'design',
		'icon' => 'cover-image',
		'description' => 'Adds animation on scroll effect',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'innerBlocks' => true
		),
		'attributes' => array(
			'animation' => array(
				'type' => 'string',
				'default' => 'fade-up'
			)
		),
		'textdomain' => 'animate-on-scroll',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css'
	)
);
