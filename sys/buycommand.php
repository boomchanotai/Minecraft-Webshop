<?php
/**
 * 
 */
class pointerror
{
	
	function errormsg()
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Point ของท่านไม่พอ !')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../Shop1" >';
	}
	function errormsg2()
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Point ของท่านไม่พอ !')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../Shop1" >';
	}
	function wtferror()
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('Something went wrong !')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../index" >';
	}
	function trueerror()
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('รหัส Truemoney ไม่ถูกต้อง !')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../topup" >';
	}
	function regerror()
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('มีชื่อผู้ใช้นี้แล้ว !')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../register" >';
	}
	function loginerror()
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('ชื่อผู้ใช้ หรือ รหัสผ่าน ผิดพลาด !')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../login" >';
	}
}
/**
 * 
 */
class success
{
	
	function buysuccess()
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('การซื้อสำเร็จแล้ว โปรดเช็คของใน Inventory ของคุณ !')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../Shop1" >';
	}
	function buysuccess2()
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('การซื้อสำเร็จแล้ว โปรดเช็คของใน Inventory ของคุณ !')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../Shop2" >';
	}
	function trueinput($true)
	{
		echo "<script language=\"JavaScript\">";
		echo "alert('คุณเติมเงิน $true แล้ว')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../topup" >';
	}
	function loginsuccess(){
		echo "<script language=\"JavaScript\">";
		echo "alert('ลงชื่อเข้าใช้เรียบร้อยแล้ว !')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../index" >';
	}
	function regsuccess(){
		echo "<script language=\"JavaScript\">";
		echo "alert('สมัครสมาชิกเรียบร้อยแล้ว !')";
		echo "</script>";
		echo '<meta http-equiv="refresh" content="0; ../index" >';
	}
}
?>