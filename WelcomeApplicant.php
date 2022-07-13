
 <?php
 include 'connection.php';
 if(isset($_POST['view']))
 {
    

    $query = "SELECT * FROM personal_details";
    $query_run = $dbh->query($query);

    if($query_run){

        echo '<table class="tab" width="100%" border="1% cellpadding="5" cellspacing="5"
              <tr style="color:black; font-family:sans-serif ;">
                <th>First Name</th>
                <th>Surname</th>
                <th>Date Of Birth</th>
                <th>Sex</th>
                <th>Title</th>
                <th>National ID</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Email Address</th>
              </tr>
              ';
        while($row = $query_run->fetch(PDO::FETCH_OBJ)){
            echo'<tr>
                    <td> '.$row->firstname.' </td>
                ';
        }//end of while loop

        echo '<table>';

    }
    else
    {
        echo '<script> alert("No Record Found")</script>';
    }

 }
?>
 <!DOCTYPE html>
 <html>
    <head>
        <style>
            body{
                background: #f5f6fa;
                
            }
            
            .tab{
                border-collapse: collapse;
                
                
            }
            th{
                background-color: #54585d;
                color: #ffffff;
                font-weight: bold;
                font-size: 13px;
                border: 1px solid #54585d;
            }
            tr {
	            background-color:  #FFFF00;
            }
            tr:nth-child(odd) {
                background-color: #ffffff;
            }
        </style>
    </head>
    <body>
        <form action="" method="POST">
            <button type="submit" name="view">VIEW</button>
        </form>
    </body>
 </html>