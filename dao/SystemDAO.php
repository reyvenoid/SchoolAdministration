<?php


        include 'BaseDAO.php';
        
        class SystemDAO extends BaseDAO{
        
        
        function viewFirstYearEnrollee(){
           $this->openConn();
           $stmt=$this->dbh->prepare("SELECT * FROM firstyearenrollee Order By Lastname");
                
           $stmt->execute();
                     
            while ($row=$stmt->fetch()){
             echo "<tr id=".$row[0].">";
             echo "<td>".$row[0]."</td>";
             echo "<td>".$row[1]."</td>";
             echo "<td>".$row[2]."</td>";
             echo "<td>".$row[3]."</td>";
             echo "<td>".$row[4]."</td>";
             echo "<td>".$row[5]."</td>";
             echo "<td>".$row[6]."</td>";
             echo "<td><img class='delete' src='images/delete.png' onclick='deleteEnrolle(".$row[0].")'/>";
             echo "<img class='edit' src='images/edit.png' onclick='editList(".$row[0].")'/></td>";
             
           	 echo "</tr>"; 
               
    		}
                  
             $this->closeConn();   
                     
        }
        
      
        
      function addEnrollee($firstname,$lastname,$gender,$age,$address,$number){
       
        $this->openConn();
        
        $stmt =$this->dbh->prepare("INSERT INTO firstyearenrollee(Firstname, Lastname, Gender, Age, Address, Mobile) values (?, ?, ? , ?, ?, ?)");
        $stmt ->bindParam(1, $firstname);
        $stmt ->bindParam(2, $lastname);
        $stmt ->bindParam(3, $gender);
        $stmt ->bindParam(4, $age);
        $stmt ->bindParam(5, $address);
        $stmt ->bindParam(6, $number);
        $stmt->execute();
        $id=$this->dbh->lastInsertId();

        $this->closeConn();
          
        echo "<tr id=".$id.">";
        echo "<td>".$id."</td>";
        echo "<td>".$firstname."</td>";
        echo "<td>".$lastname."</td>";
        echo "<td>".$gender."</td>";
        echo "<td>".$age."</td>";
        echo "<td>".$address."</td>";
        echo "<td>".$number."</td>";
        echo "<td><img class='delete' src='images/delete.png' onclick='deleteEnrolle(".$id.")'/>";
				echo "<img class='edit' src='images/edit.png' onclick='editList(".$id.")'/></td>";
        echo "</tr>";
            
      }
 
    function searchName($firstname){
			$this->openConn();
                                         
         					$stmt = $this->dbh->prepare("select * from firstyearenrollee where Firstname like '".$firstname."%'");
                  $stmt->execute();
             
             $counter=0;
				
			     while($row = $stmt->fetch()) {
			          
			              while($counter <1) {

                    echo "<tr>
					          <th>ID</th>
					          <th>Firstname</th>
					          <th>Lastname</th>
					          <th>Gender</th>
					          <th>Age</th>
                    <th>Address</th>
                    <th>Mobile</th>
					          <th>Action</th>
			
				          </tr>";
                  $counter++;
                }


				         
			        
					    echo "<tr id= '".$row[0]." '>";
					    echo "<td>".$row[0]."</td>";
					    echo "<td>".$row[1]."</td>";
					    echo "<td>".$row[2]."</td>";
					    echo "<td>".$row[3]."</td>";
					    echo "<td>".$row[4]."</td>";
              echo "<td>".$row[5]."</td>";
              echo "<td>".$row[6]."</td>";
					    echo "<td ><img class='delete'src='images/delete.png' onclick= 'deleteEnrolle(".$row[0].")'/>";
					    echo "<img class='edit' src='images/edit.png' onclick='editList(".$row[0].")'/></td>";
					    echo "</tr>";
					 
			     }
			
			
						
        $this->closeConn();
        
        
     }
        
        
        
    function deleteEnrollee($id){
			
			$this->openConn();

			$stmt = $this->dbh->prepare("DELETE FROM firstyearenrollee WHERE id = ?");
			$stmt->bindParam(1, $id);
			$stmt->execute();
	
			$this->closeConn();	
		}
		
		
     function editInfo($id){

			$this->openConn();

			$stmt = $this->dbh->prepare("SELECT * FROM firstyearenrollee WHERE id = ?");
			$stmt->bindParam(1, $id);
			$stmt->execute();
		
			$record = $stmt->fetch();
			
			$firstname = array("id"=>$record[0], "Firstname"=>$record[1], "Lastname"=>$record[2],  "Gender"=>$record[3],  "Age"=>$record[4],  "Address"=>$record[5],  "Mobile"=>$record[6]);

			$json_string = json_encode($firstname);			
 
			echo $json_string;

			$this->closeConn();	
			
			
		}
       
       
       function save($id, $firstname, $lastname, $gender, $age , $address, $number){
			$this->openConn();
	
			$stmt = $this->dbh->prepare("UPDATE firstyearenrollee SET  Firstname= ?, Lastname = ?, Gender = ?, Age = ?, Address = ?, Mobile =?, WHERE id = ?");
			$stmt->bindParam(1, $firstname);
			$stmt->bindParam(2, $lastname);
			$stmt->bindParam(3, $gender);
			$stmt->bindParam(4, $age);
      $stmt->bindParam(5, $address);
      $stmt->bindParam(6, $number);
			$stmt->bindParam(7, $id);
			$stmt->execute();
 
			$this->closeConn();
			echo "<td>".$id."</td>";
			echo "<td>".$firstname."</td>";
			echo "<td>".$lastame."</td>";
			echo "<td>".$gender."</td>";
			echo "<td>".$age."</td>";
      echo "<td>".$address."</td>";
      echo "<td>".$number."</td>";
			echo "<td><img class='delete' src='images/bura.png' onclick='deleteEnrolle(".$id.")'/>";
			echo "<img class='edit' src='images/edit.png' onclick='editList(".$id.")'/></td>";
		}
       
       
}
      
      /*
      
      function register($username, $password){
      
      $this->openConn();
      $stmt = $this->dbh->prepare("INSERT INTO user (username, password) VALUES (?,?)");
      
      $stmt->bindParam(1, $username);
      $stmt->bindParam(2, $password);
      $stmt->execute();
      $id = $this->dbh->lastInsertId();
      
      $stmt = $this->dbh->prepare("CREATE TABLE ".$username."id int(11)auto_increment primary key, ngaran varchar(20), address varchar(30), phone varchar(15), klase varchar(15);");
      $stmt->execute();
      $this->closeConn();$sql="CREATE TABLE ".$userName." (id int(11) auto_increment primary key, lname varchar(20), fname varchar(20), phone varchar(20) )";
      echo "<tr id = ".$id.">";
      echo "<td>".$fullname."</td>";
      echo "<td>".$sddress."</td>";
      echo "<td>".$phone."</td>";
      echo "<td>".$klase."</td>";
      echo "<td><img class='delete' src='images/bura.png' onclick='deleteContact(".$id.")'/>";
      echo "<img class='edit' src = 'images/edit.png' onclick='editContact(".$id.")'/></td>";
      echo "</tr>";
      
      
      }
      
      
       */
      
      
    

		
		/*
		
   function logIn($username, $password){
      	
      $this->openConn();
      		
      $stmt = $this->dbh->prepare("SELECT username,password FROM user");
      $stmt->execute();
      
		$found = false;   		
      while($row = $stmt->fetch()){
         if($row[0]==$username && $row[1] == $password){
            $found = true;
           
         }
        
      }	
      										
      $this->closeConn();
      return $found;
      }
        */
     
?>
