<?php
include('TestSqlite3.php');

class TestMysql extends TestSqlite3 {

        public static function setUpBeforeClass() {
                $db = new dbFacile_mysql();
		$db->open('dbFacile', 'dbfacile', 'dbfacile');
		$db->execute('create table test (b int(11) auto_increment, c text, primary key(b))');
		Main::$db = $db;
	}
}
