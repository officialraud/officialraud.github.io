<?php

if(isset($_SESSION['Nick']))
{
	class profile extends hf 
	{
		public function get_content() 
		{ 
			global $user,$connect;
		    unset($_SESSION['inf']);    
			if (isset($_SESSION['Nick']))
			{
				session_start();
				$nick = $_SESSION['Nick'];
				
		
				$sql = "SELECT * FROM `{$user['table']}` WHERE `{$user['name']}` = '".$nick."'";
				$result = $connect->query($sql);

				if($result->num_rows == 1)
				{ 
					$data = $result->fetch_assoc();
					if(md5($data["{$user['pass']}"]) != $_SESSION['Password'])
					{
						session_destroy();
						echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;'/login'>";
					}
					
				} 
				else 
				{
					session_destroy();
					echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;'/login'>";
					
				}

				
				function FixName($name){
					$order = array("_");
					$replace = " ";
					$newstr = str_replace($order,$replace,$name);
					$pos = strpos($newstr," ",1);
					$name = substr($newstr,0,$pos);
					$subname = substr($newstr,$pos,24);
					echo "".$name." ".$subname."";
				}
				
				if($data[$user['admin']] > 0) $status = "Администратор"; else $status = "Игрок";
				if($data[$user['leader']] > 0) $status = "Лидер";

				switch($data[$user['job']])
				{
					case 0: $job = "Отсутствует"; break; 
					case 1: $job = "Таксист"; break;
				}

				$frac = $member[$data[$user['member']]];

				switch($data[$user['member']])
				{
					case 0: $frac = "Безработный"; break; 
					case 1: $frac = "Мэрия"; break;
					case 2: $frac = "Полиция"; break;
					case 3: $frac = "ДПС"; break;
					case 4: $frac = "ФСБ"; break;
					case 5: $frac = "Минздрав"; break; 
					case 6: $frac = "Гопари"; break;
					case 7: $frac = "Лыткаринская Братва"; break;
					case 8: $frac = "Батыревская Братва"; break;
					case 9: $frac = "Южная Братва"; break;
					case 10: $frac = "Армия"; break; 
					case 11: $frac = "ЛКН"; break;
					case 12: $frac = "Триада"; break;
					case 13: $frac = "РМ"; break;
					case 14: $frac = "Н.Е.Ритм"; break;
					case 15: $frac = "Н.Е.Антенкино"; break;
					case 16: $frac = "Нет"; break;
					case 17: $frac = "Нет"; break; 
					case 18: $frac = "Нет"; break;
					case 19: $frac = "Нет"; break;
					case 20: $frac = "Нет"; break;
					case 21: $frac = "Нет"; break;
					case 22: $frac = "Нет"; break;
					case 23: $frac = "Нет"; break;
					case 24: $frac = "Нет"; break;
					case 25: $frac = "Нет"; break;

				}
				
	    	}
			include "view/main/profile.php"; 
		}
	}
}
else echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/login'>";
?>
