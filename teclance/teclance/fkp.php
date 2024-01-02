<?php
include_once 'reg_database.php';
echo"test";
$a =$_POST["amount"];
$b =$_POST["cs"];
$z =$_POST["student"];
//echo $a;
//echo $b;
include("reg_database.php");
$sql3= "SELECT * FROM amount WHERE amount_id =$a";
$result3=$conn->query($sql3);
while($row3 = $result3->fetch_assoc()) 
{
    $m= $row3['amount'];
   
    }
$c =$m/$b;



// $sql2= "SELECT * FROM reg_form WHERE course =$a";
// $result2=$conn->query($sql2);
// while($row2 = $result2->fetch_assoc()) 
// {
//     $n= $row2['id'];
    
//     }





?>
<input type="hidden" id="tname" name="te" value="<?php echo $c ; ?>">
<!-- <input type="text" id="mt" name="ta" value="<?php echo $n ; ?>"> -->
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>

<tr class="text-dark">
    <th><b>SL.NO</b></th>
    <th><b>payment</b></th>
    <th><b>amount</b></th>
    <th><b>status</b></th>
   
     <!--  <th><b>SIGNATURE</b></th> -->


</tr>
</thead>
<tbody>



<?php
                        $i=0;
                        
              while($b>=1) 
{
  ?>
   <tr>
                                <td ><?php $i=$i+1; echo $i.")";  ?></td>
                                <td> payment</td>
                                <td> <?php echo $c;?></td>
                              <td>  <a class="btn btn-sm btn-primary" href="trick.php?ids=<?php echo $row3['id'];?>">pay</a></td>
                                <?php $b=$b-1;?>
                            </div>
                                 
                                </tr>
                           
                           <?php
            }
             
?>  
 </tbody>
                     
                            
                     </table>
         



 
<!-- <input type="text" id="bname" value="<?php echo $b; ?>"> -->
