<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
//   echo "Connected successfully";
	
	
	
?>

<!DOCTYPE html>
<html>

<head>
    <title>SOAL 3</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php
	$pnama = $_GET['tnama']; 
    $palamat = $_GET['talamat'];
    $phobi = $_GET['thobi'];	
    $qnama =' ';
    $qalamat=' ';
    $qhobi=' ';

    if($pnama){
        $qnama=" ( nama LIKE '%".$pnama."%') ";
    }
    if($palamat){
        $qalamat=" ( alamat LIKE '%".$qalamat."%') ";
    }
    if($phobi){
        $qhobi=" ( hobi LIKE '%".$phobi."%') ";
    }

    if($pnama){
        $query= $qnama;
        
        if($palamat){
            $query=$query.' AND ' .  $qalamat;
        }else{
            if($phobi){
                $query=$query.' AND ' . $qhobi;
            }
        } 
    }
    else if ($palamat){
        $query= $qalamat;
        if($phobi){
            $query=$query.' AND ' .  $qhobi;
        }
    }
    else{
        $query= $qhobi;
    }
		 
            $sql = "SELECT nama, a.alamat, b.hobi 
            FROM person a
                    LEFT JOIN hobi b on a.id= b.person_id 
                    where 
                     ".$query."  ";
   //      var_dump($sql);
           
            echo '<table border="1" cellspacing="2" cellpadding="2"> 
            <tr> 
                <td> <font face="Arial">Nama</font> </td> 
                <td> <font face="Arial">Alamat</font> </td> 
                <td> <font face="Arial">Hobi</font> </td> 
                
            </tr>';

            if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
            $fnama = $row["nama"];
            $falamat = $row["alamat"];
            $fhobi = $row["hobi"];
             
            echo '<tr> 
            <td>'.$fnama.'</td> 
            <td>'.$falamat.'</td> 
            <td>'.$fhobi.'</td> 
            
        </tr>';
           
            }
            $result->free();

            
            } 

 
?>
    <input type="button" onclick="location.href='soal3.php';" value="Kembali" />
    <br> <br>

</body>

</html>