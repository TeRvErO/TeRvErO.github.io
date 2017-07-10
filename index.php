<?php
/**
 * Created by PhpStorm.
 * User: zhumadilov
 * Date: 03.07.2017
 * Time: 16:48
 */
header('Content-Type: text/html; charset=utf-8');
error_reporting( E_ERROR );
$host='localhost';
$database='www_kair';
//$database='www_education';

$user='www_kair';
$pswd='z3x4c7v1rfbh';
//$user='root';
//$pswd='';

$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.".mysql_error());

mysql_query("SET NAMES 'utf8';");

function getsqldata($res, $array = false)
{
    if($res) {
        $i = 0;
        while ($row = mysql_fetch_array($res)) {
            foreach ($row as $key => $item) {
                if (!is_int($key) and $key != 'password') {
                    if ($array) {
                        $data[$i][$key] = $item;
                    } else {
                        $data[$key] = $item;
                    }
                }
            }
            $i++;
        }
        return $data;
    }else{
        return false;
    }
}

if(isset($_GET['key'])){
    $key = $_GET['key'];
    $key = mysql_escape_string($key);

    $query = "SELECT * FROM `andry_key` WHERE `key` = '$key'";
    $res = mysql_query($query);
    $data = getsqldata($res);
    $result['status'] = false;
    if($data != null){
        if($data['activate'] == 0) {
            $id = (int)$data['id'];
            $query = "UPDATE `andry_key` SET `activate` = 1 WHERE `id` = $id;";
            $res = mysql_query($query);
        }
        $result['key'] = $data['key'];
        $result['activate'] = $data['activate'];
        $result['status'] =  $data['activate'] == 0 ? true : false;
    }
    $json = json_encode($result);
    echo $json;
}
if(isset($_GET['add'])){
    $key = $_GET['add'];
    $key = mysql_escape_string($key);

    $query = "INSERT INTO `andry_key` (`key`,`activate`) VALUES  ('$key', 0)";
    $res = mysql_query($query);
}