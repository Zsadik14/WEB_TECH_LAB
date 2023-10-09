<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <h1>Profile</h1>
</body>
</html>
<?php
 
    $FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$FatherName = $_POST['FatherName'];
$MotherName = $_POST['MotherName'];
$Gender = $_POST['Gender'];
$BloodGroup = $_POST['BloodGroup'];
$Religion = $_POST['Religion'];
$Dob = $_POST['Dob'];
$Image = $_POST['image'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Website = $_POST['Website'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$PostalCode = $_POST['PostalCode'];
$Country = $_POST['Country'];


echo "
<table>

        <tr >
            <td>
    
                <fieldset>
                    <legend>General Information</legend>
                    <table>
                        <tr>
                            <td>
                               <p><b>&nbsp;&nbsp;&nbsp;First Name &nbsp;&nbsp;&nbsp;:</b> $FirstName </p> 
                               <p><b>&nbsp;&nbsp;&nbsp;Last Name &nbsp;&nbsp;&nbsp;&nbsp;:</b> $LastName</p>
                               <p><b>Father's Name&nbsp;&nbsp;:</b>$FatherName</p>
                               <p><b>Mother's Name&nbsp;:</b>$MotherName</p>
                               <p><b>Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>$Gender</p>
                               <p><b>&nbsp;&nbsp;&nbsp;Blood Group&nbsp;&nbsp;:</b>$BloodGroup</p>
                               <p><b>&nbsp;&nbsp;&nbsp;Religion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>$Religion</p>
                
                            </td>
                            <td>
                          $Image
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </td>
            <td>
                <fieldset>
                    <legend>Contact Information</legend>
                
                       <table>
                        <tr >
                            <td >
                            <p><b>&nbsp;&nbsp;&nbsp;&nbsp;Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> $Email</p>
                            <p><b>Phone/Mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>$PhoneNumber</p>
                            <p><b>&nbsp;&nbsp;&nbsp;&nbsp;Website &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>$Website</p>
                            <p><b>Present Address &nbsp;:</b> $Address , $City $PostalCode , $Country</p>
                            </td>
                        </tr>

                       </table>
                    
                </fieldset>
            </td>
        </tr>

    </table>
";

 
?>
<br><br>
<a href="p1.html">Go back</a>