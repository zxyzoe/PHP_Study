<?php
	class Triangle extends Shape{
		private $side1=0;
		private $side2=0;
		private $side3=0;
		function __construct(){
			$this->shapeName="三角形";
			if($this->validate($_POST["side1"],"第一个边") &
				 	$this->validate($_POST["side2"],"第二个边") &
						$this->validate($_POST["side3"],"第三个边")
			  )
			{
				if($this->validateSum($_POST["side1"],
						$_POST["side2"],$_POST["side3"]))
				{
					$this->side1=$_POST["side1"];
					$this->side2=$_POST["side2"];
					$this->side3=$_POST["side3"];
				}else{
					echo '<font color="red">
						三角形两边之和要大于第三边</font><br>';
				}
				
			}
		}
		function area(){
			$s=($this->side1+$this->side2+$this->side3)/2;
			return sqrt($s*($s-$this->side1)
					*($s-$this->side2)*($s-$this->side3));
		}
		function perimeter(){
			
			return $this->side1+$this->side2+$this->side3;
		}
		private function validateSum($s1,$s2,$s3){
			if( (($s1+$s2)>$s3) 
					&& (($s1+$s3)>$s2) 
						&& (($s2+$s3)>$s1)){
				return true;
			}else{
				return false;
			}
		}
	}
?>