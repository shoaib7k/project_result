<?php            
           
   string gradeCal($grad){
            if ($grad < 40)
             {
                 return $grad = 'F';
             }
            else if ($grad<= 44 && $grad >=40)
            {
               return $grad = 'D';
            }
            else if ($grad <= 49 && $grad >=45)
          {
             return $grad = 'C';
          }
            else if ($grad<= 54 && $grad >=50)
            {
                return $grad = 'C+';
            }
             else if ($grad <= 59 && $grad >=55)
            {
                return $grad = 'B-'; 
            }
             else if ($grad <= 64 && $grad >=60)
           {
              return $grad = 'B';
           }
              else if ($grad <= 69 && $grad >=65)
           {
              return $grad = 'B+';
           }
             else if ($grad <= 74 && $grad >=70)
           {
              return $grad = 'A-';
           }
             else if ($grad <= 79 && $grad >=75)
           {
              return $grad = 'A';
           }
            else if ($grad >= 80)
          {
            return $grad = 'A+';
          }
      }

?>