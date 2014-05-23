<?php
/**
 * MatchFixture
 *
 */
class MatchFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 300, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'play_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'play_time' => array('type' => 'time', 'null' => true, 'default' => null),
		'play_field' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 300, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'side_a' => array('type' => 'integer', 'null' => true, 'default' => null),
		'side_b' => array('type' => 'integer', 'null' => true, 'default' => null),
		'body' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'content_type' => array('type' => 'integer', 'null' => true, 'default' => null),
		'league_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'play_date' => '2014-05-13',
			'play_time' => '19:06:17',
			'play_field' => 'Lorem ipsum dolor sit amet',
			'side_a' => 1,
			'side_b' => 1,
			'body' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'content_type' => 1,
			'league_id' => 1
		),
	);

}
