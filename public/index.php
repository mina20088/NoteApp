<?php
error_reporting(32767);

session_start ();

const BASE_PATH = __DIR__ . "/../";
require BASE_PATH . 'utils/basePath.php';
require base_path ('utils/Render.php');
require base_path ('utils/dumper.php');
require base_path ('utils/sessionDestrory.php');
require base_path ('utils/authorization.php');
require base_path ('utils/url.php');
require base_path ('utils/Validator.php');

require base_path ('database/Database.php');

require base_path ('router.php');


























