<?
/**
* adodb
*/
$dbdriver="mysql";
$server="localhost";
$user="root";
$password="";
$database="migotest";
include('adodb5/adodb.inc.php');
$conn = ADONewConnection($dbdriver); # eg 'mysql' or 'postgres'
$conn->Connect($server, $user, $password, $database);
$conn->SetFetchMode(ADODB_FETCH_ASSOC);
//$conn->debug = true;

/*get all*/
$sql="select * from info";
$re=$conn->GetAll($sql);

if ($re){
?>
<table>
<tr>
<td colspan="3">Get All</td>
</tr>
<tr>
<td colspan="3"><?=$sql?></td>
</tr>
<tr>
<td>ID</td>
<td>Name</td>
<td>Password</td>
</tr>
<?
foreach ($re as $k=>$v){
?>
<tr>
<td><?=$v['id']?>
<td><?=$v['name'];?>
<td><?=$v['password'];?>
</tr>
<?
}
echo "**********************************";}
//GetAll一般用于取所有用户的信息列表
?>
</table>

<?
/*get row*/
$re2=$conn->GetRow($sql);
if ($re2){
?>
<table>
<tr>
<td colspan="3">Get Row</td>
</tr>
<tr>
<td colspan="3"><?=$sql?></td>
</tr>
<tr>
<td>ID</td>
<td>Name</td>
<td>Password</td>
</tr>
<tr>
<td><?=$re2['id']?>
<td><?=$re2['name'];?>
<td><?=$re2['password'];?>
</tr>
<?
echo "**********************************";}//GetRow一般用于取某一个用户的信息
?>
</table>

<?
/*get one*/
$sql2="select name from info";
$re3=$conn->GetOne($sql2);
if ($re3){
?>
<table>
<tr>
<td colspan="3">Get One</td>
</tr>
<tr>
<td colspan="3"><?=$sql2?></td>
</tr>
<tr>
<td colspan="3"><?=$re3?></td>
</tr>
<?
echo "**********************************";}//GetOne用于取得一列数组的第一个元素
?>
</table>