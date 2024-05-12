<html>
    <head>

    </head>

<body style="background-color:gray;">
 <div >
   <p>
       <?php
         $adsoyad =$_POST["Username"];
         $sifre =$_POST["Password"];
         if($adsoyad && $sifre)  {
            if($adsoyad == "b211210060@sakarya.edu.tr" && $sifre=="b211210060") {  
                echo "HOŞGELDİNİZ ". $adsoyad;
        
            }
            else  {
                header("location:girişyapsayfası"); 
        
            }
         } 
         else 
         {
          header("location:girişyapsayfası"); 
         }
       ?>
   </p>

 </div>


</body>
</html>
