<?php
include_once 'connt.php';

if(isset($_POST['submit']))
{
       
         $name=($_POST['name'] ); 
		 $middlenm=($_POST['middlenm'] ); 
		 $lastnm=($_POST['lastnm'] ); 

         $shopnm=($_POST['shopnm'] ); 

         $city=($_POST['city'] ); 
         
         $area=($_POST['area'] );

         $add=($_POST['address'] ); 
         
         $areasqm= ($_POST['areasqm'] ); 

         $noroom= ($_POST['noroom'] ); 
         
         $email=($_POST['email'] ); 
         
         $mobno=($_POST['mobile'] ); 
         
          $desc=($_POST['desc'] ); 
         
        
           $filesname=($_FILES["uploadfile"]["name"]);
           $tempname=($_FILES["uploadfile"]["tmp_name"]);
           $folder="shopimage/". $filesname;
          
          
           move_uploaded_file($tempname, $folder);
		   
		   
		   
		   
           $filesname2=($_FILES["uploadfile2"]["name"]);
           $tempname2=($_FILES["uploadfile2"]["tmp_name"]);
           $folder2="shopimage/". $filesname2;
          
          
           move_uploaded_file($tempname2, $folder2);

           $rent=($_POST['rent'] ); 
		    $deposite=($_POST['deposite'] );

           //Error handlers
           // check for empty fileds

     if(!empty($name) && !empty($middlenm) && !empty($lastnm) && !empty($shopnm) && !empty($city) && !empty($area) && !empty($add) && !empty($areasqm)
      && !empty($noroom) && !empty($email) && !empty($mobno) && !empty($desc)  && !empty($folder)  && !empty($folder2) && !empty($rent) && !empty($deposite))
     {
                
                 if(strlen($name)<4)
          {   //basic firstname validation
            $error=true;
            echo "<script type='text/javascript'>alert('Firstname must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$name))
          {   //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Firstname must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }



          if(strlen($middlenm)<4)
          {    //basic middlename validation
            $error=true;
            echo "<script type='text/javascript'>alert('Middlename must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$middlenm))
          {    //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Middlename must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }


           if(strlen($lastnm)<4)
          {    //basic lastname validation
            $error=true;
            echo "<script type='text/javascript'>alert('Lastname must have atlaest 4 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$lastnm))
          {    //check alphabets or not
             $error=true;
            echo "<script type='text/javascript'>alert('Lastname must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }

   
                 //shop name validation
          if(strlen($shopnm)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Shop name must have atlaest 3 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
          else 
           
               if(!preg_match("/^[a-z A-Z]+$/",$shopnm))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Shop Name must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }

         
              //city validation

              if(strlen($city)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Name of city must have atlaest 3 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$city))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Name of city  must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }


              //area of city validation
               if(strlen($area)<4)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Area of city must have atlaest 3 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
          else 
               if(!preg_match("/^[a-z A-Z]+$/",$area))
          {   
             $error=true;
            echo "<script type='text/javascript'>alert('Area of city  must contain alphabets!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
          
              //address  validation 
               if(strlen($add)<20)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Address must have atlaest 20 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }

         
            //areasqm validation
          if(!preg_match("/^[0-9]+$/",$areasqm))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Area of shop in sqm must contain numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
         
              //number of rooms validation
          if(!preg_match("/^[0-9]+$/",$noroom))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('Number of rooms must contain numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }          
              
              //rent validation
          if(!preg_match("/^[0-9]+$/",$rent))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('rent ruppes must contain numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
         
          //deposite validation
          if(!preg_match("/^[0-9]+$/",$deposite))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('deposite ruppes must contain numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }      
                 //mobile validation
          if(!preg_match("/^[0-9]+$/",$mobno))
          {  
             $error=true;
            echo "<script type='text/javascript'>alert('mobile number must contain numbers!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
           


    //description  validation 
               if(strlen($desc)<15)
          {   
            $error=true;
            echo "<script type='text/javascript'>alert('Description must have atlaest 15 characters!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }
             
             if(!filter_var($email,FILTER_VALIDATE_EMAIL))
          {     //Check  validation of email
             $error=true;
            echo "<script type='text/javascript'>alert('please enter valid email address!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
          }





                      if(!$error)
         {
              $query="INSERT INTO  `sm`.`shop` (

`name` ,
`middlenm` ,
`lastnm` ,
`shopnm` ,
`city` ,
`area` ,
`address` ,
`areasqm` ,
`noroom` ,
`email` ,
`mobile` ,
`desc` ,
`folder` ,
`folder2` ,
`rent` ,
`deposit`
)
VALUES ( '$name', '$middlenm', '$lastnm',  '$shopnm',  '$city',  '$area',  '$add',  '$areasqm',  '$noroom',  '$email',
  '$mobno',  '$desc',  '$folder','$folder2',  '$rent','$deposite'
)";





                      if($is_query_run=mysqli_query($conn,$query))
                       {  //Insert into database Query
                          // echo " query executed";
                         echo "<script type='text/javascript'>alert('YOUR ADD SHOP WAS DONE SEUCCESFULLY!')
                         </script>";
                           echo "<script language='javascript' type='text/javascript'>location.href='owner.php'
                      </script>";


                        }
                     else
                        echo "query not executed";
      
            


             

                 }




           }
     else 
         
           { echo "<script type='text/javascript'>alert('fields are not empty!')
               </script>";

                echo "<script language='javascript' type='text/javascript'>location.href='addshop.php'
               </script>";
             }

}
else
        echo "not insert";


?>

