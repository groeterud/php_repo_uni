<html>
   <body>
		<?php
		
			$temp_array = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
			68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);
			
			//calculating the average temperature
			$tot_temp = 0;
			$temp_array_length = count($temp_array);
			foreach($temp_array as $temp)
			{
				$tot_temp += $temp;
			}
			$avg_high_temp = $tot_temp/$temp_array_length;
			echo "Average Temperature is : ".$avg_high_temp." <br>"; 
			
			//Finding five lowest temperatures 
			sort($temp_array);
			echo " List of five lowest temperatures :";
			for ($i=0; $i< 5; $i++)
			{ 
				echo $temp_array[$i].", ";
			}
			//echo "<br>"; 
			/*
			$i=0;
			$counter=5;
			$tempo=0;

			while($i<$counter)
			{				
				if ($i===0)
				{
					echo $temp_array[$i].", ";
					$tempo=$temp_array[$i];
					
				}
				else
				{
					if($temp_array[$i]!==$tempo)
						{
							echo $temp_array[$i].", ";
							$tempo=$temp_array[$i];
						}
						else
						{
							$counter++; 
							//echo "new counter is " .$counter;
						}               
				}
				$i++;    
			}*/
			
			echo "<br>"; 
			//Finding five highest temperatures 
			echo "List of five highest temperatures :";
			for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
			{
				echo $temp_array[$i].", ";
			}
			/*
			rsort($temp_array);
			for ($i=0; $i< 5; $i++)
			{
				echo $temp_array[$i].", ";
			}*/
		?>      
   </body>
</html>