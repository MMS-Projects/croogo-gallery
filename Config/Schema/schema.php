<?php 
/* gallery schema generated on: 2011-06-07 16:44:00 : 1307439840*/
class GallerySchema extends CakeSchema {
	var $name = 'Gallery';

	//var $connection = 'gallery';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $albums = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'position' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 11),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'max_width' => array('type' => 'integer', 'null' => true),
		'max_height' => array('type' => 'integer', 'null' => true),
		'max_height_thumbnail' => array('type' => 'integer', 'null' => true),
		'max_width_thumbnail' => array('type' => 'integer', 'null' => true),
		'quality' => array('type' => 'integer', 'null' => true),
		'params' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'indexes' => array(
			'id' => array('column' => array('id'), 'unique' => true),
			),
		'tableParameters' => array(
			'charset' => 'utf8',
			'collate' => 'utf8_unicode_ci',
			'engine' => 'InnoDb'
			),
		);

	var $photos = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'url' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 255),
		'small' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1024),
		'large' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1024),
		'original' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1024),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'weight' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 11),
		'params' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'indexes' => array(
			'id' => array('column' => array('id'), 'unique' => true),
			),
		'tableParameters' => array(
			'charset' => 'utf8',
			'collate' => 'utf8_unicode_ci',
			'engine' => 'InnoDb'
			),
		);

	var $photos_albums = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'photo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'album_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11),
		'master' => array('type' => 'boolean', 'null' => false, 'default' => 0),
		'indexes' => array(
			'id' => array('column' => array('id'), 'unique' => true),
			'ix_photos_category' => array(
				'column' => array('photo_id', 'album_id'),
				'unique' => true,
			),
		),
		'tableParameters' => array(
			'charset' => 'utf8',
			'collate' => 'utf8_unicode_ci',
			'engine' => 'InnoDb',
		),
	);

}
?>
