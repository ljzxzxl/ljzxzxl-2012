<?php
require('config.php');
require('cls_mysql.php'); 
$db = new cls_mysql($db_host, $db_user, $db_pass, $db_name);

function test_getAll()
{
	global $db;
	
	echo $sql = "SELECT user_id, user_name, email FROM ecs_admin_user";
	$result = $db->getAll($sql);
	print_r($result);
}
echo test_getAll();
echo '<hr/>';

function test_getRow()
{
	global $db;
	
	$sql = "SELECT user_id, user_name, email FROM ecs_admin_user LIMIT 1";
	$result = $db->getRow($sql);
	print_r($result);
}
echo test_getRow();
echo '<hr/>';

function test_getCol()
{
	global $db;
	
	$sql = "SELECT email FROM ecs_admin_user";
	$result = $db->getCol($sql);
	print_r($result);
}
echo test_getCol();
echo '<hr/>';

function test_getOne()
{
	global $db;
	
	$sql = "SELECT email FROM ecs_admin_user WHERE user_id = 1";
	$result = $db->getOne($sql);
	print_r($result);
}
echo test_getOne();
echo '<hr/>';

function test_query()
{
	global $db;
	
	$sql = "UPDATE ecs_admin_user SET todolist = 'You have an new email!' WHERE user_id = 1";
	$db->query($sql);
	$sql = "SELECT todolist FROM ecs_admin_user WHERE user_id = 1";
	$result = $db->getOne($sql);
	echo $result;
}
echo test_query();
echo '<hr/>';

function test_autoExecute()
{
	global $db;
	
	$table = "ecs_role";
	$field_values = array("role_name" => "manager", "role_describe" => "manager room", "action_list" => "all");
	$db->autoExecute($table, $field_values, "INSERT");
	// 执行的SQL：INSERT INTO ecs_role (role_name, action_list, role_describe) VALUES ('总经理办', 'all', '总经理办')
	
	$role_id = $db->insert_id(); // 新记录的ID：5
	
	$field_values = array("action_list" => "goods_manage");
	$db->autoExecute($table, $field_values, "UPDATE", "role_id = $role_id");
	// 执行的SQL：UPDATE ecs_role SET action_list = 'goods_manage' WHERE role_id = 5
	
	$sql = "SELECT action_list FROM ecs_role WHERE role_id = $role_id";
	$result = $db->getOne($sql);
	print_r($result);
}
echo test_autoExecute();
echo '<hr/>';
