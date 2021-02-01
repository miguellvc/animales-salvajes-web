<?php
/*
 * Copyright (c) 2021. Team Biscochito.
 *
 * Licensed under the GNU General Public License v3.0
 *
 * https://www.gnu.org/licenses/gpl-3.0.html
 *
 * Permissions of this strong copyleft license are conditioned on making available complete
 * source code of licensed works and modifications, which include larger works using a licensed
 * work, under the same license. Copyright and license notices must be preserved. Contributors
 * provide an express grant of patent rights.
 */

$config = array(
    'driver' => 'mysql',
    'host' => 'localhost',
    'dbname' => 'toptrump',
    'username' => 'Oleg',
    'password' => 'oleg-',
);

require_once('DBConnection.php');
$dbc = new DBConnection($config);
$con = $dbc->getCon();
