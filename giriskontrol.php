<html>
<head>
    <title>Hoşgeldin Sayfası</title>
    <link rel="stylesheet" type="text/css" href="giriskontrol.css">
    <head>

    </head>

<body style="background-color:darkgray;">
 <div >
   <p>
       <?php
         $adsoyad =$_POST["Username"];
         $sifre =$_POST["Password"];
         if($adsoyad && $sifre) // veriler boş değilse buradan devam eder
         {
            if($adsoyad == "b211210060@sakarya.edu.tr" && $sifre=="b211210060")
            {  
                echo "HOŞGELDİN ". $adsoyad;
        
            }
            else
            {
                header("location:giriş.html"); 
        
            }
         } 
         else 
         {
          header("location:giris.html"); // veriler boşsa sayfaya geri gönderir
         }
       ?>
   </p>

 </div>


</body>
</html>
