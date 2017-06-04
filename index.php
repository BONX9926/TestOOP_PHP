<?php
class myClass {
	const ball = "Const";// ตัวแปรคงที่
	protected $var1 = "Protected"; //คลาสลูกสามารถมองเห็นได้ผ่าน medthod
	private 	$var2 = "Private"; //ทำงานใน Class ตัวเองเท่านั้น
	public		$var3 = "Public";
	
	//__construct ทำงานตอนสร้าง Object 
	/*public function __construct(){
		echo "__construct";
		echo "<br>";
	}*/
	
	public function myF1(){
		echo $this->var2;	
		echo "<br>";
	}
	
	//__destruct ทำงานหลังท้ายสุด
	/*public function __destruct(){
		echo "__destruct";
		echo "<br>";
	}*/
	
	
}

//สืบทอด
class myClass2 extends myclass{
	
	public function myC2(){
		echo $this->var1; //เรียกใช้ตัวแปร private ผ่าน medthod
		echo "<br>";
	}
	
}

$pro1 = new myClass(); 
$pro1->myF1();
$pro2 = new myClass2();
$pro2->myC2();
echo $pro1::ball; //การเรียกใช้ตัวแปรคงที่
echo "<br>";
echo $pro2::ball;