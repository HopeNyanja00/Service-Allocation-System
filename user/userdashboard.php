<?php
 include("./connection/DB.php");

session_start();
if(!$_SESSION["email"]){
header("Location:userdashboard.php");
}else {
?>

<head>
    <link rel="stylesheet" href="user.css">
    <script src="functions.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <style>
       
        
ul {
  list-style:none;
  margin-top:0;
  padding:0;
}
a {
  cursor:pointer;
  display:block;
  color:white;
  text-decoration:none;
}
.bckg {
  background-color:red;
  box-shadow:-4px 0px 10px rgba(255, 255, 255, 0.48) inset;
  width:200px;
  height:100%;
  position:fixed;
  left:0;
  top:0;
}
h1 {
    text-align: center;
    font-weight: normal;
    color: #F6F6EF;
    line-height:60px;
    margin:0;
    font-size:20px;
    letter-spacing:2px;
    background-color:red;
    border-bottom:1px solid rgb(255, 255, 255);
}
h2 {
  font-size: 20px;
  text-transform: uppercase;
  margin: 0;
  letter-spacing: 3px;
  color: #919191;
  font-weight: normal;
  padding-left: 40px;
  line-height: 60px;
  text-shadow: 1px 1px 2px #fff;
  position: relative;
  flex:1;
  -webkit-flex:1;
  -ms-flex:1;
}
  h2:before {
    content:'';
    width: 36px;
    height: 36px;
    position: absolute;
    left: -19px;
    top: 12px;
    background-color:red;
    -webkit-transform:rotate(45deg);
    -moz-transform:rotate(45deg);
    transform:rotate(45deg);
  }

h3 {
  font-size:17px;
  margin:0;
  line-height: 40px;
  color: #555;
  cursor:pointer;
  position:relative;
}

header {
  width:200px;
  height:100%;
  float:left;
  position:relative;
  z-index:99;
}



   nav ul li {
    border-bottom:1px solid white;
    padding-left:48px;
    transition:all 0.6s;
    border-top:1px solid #2E3036;
   }
   nav ul li :hover {
        background-color: #eb6d69;
        transition: all 0.6s;
        border-bottom: 1px solid #797979;
      }
      
      nav ul li :hover a {
        color:#fff;
        transition:all 0.6s;
      }
      
      nav ul li  a {
        line-height:55px;
        font-size:18px;
        position:relative;
        letter-spacing:1px;
        transition:all 0.6s;
      }
        nav ul li a:before {
          font-family: 'entypo', sans-serif;
          font-size:20px;
          position:absolute;
          left:-32px;
        }
      


        .round{
          width:20px;
          height:20px;
          border-radius:50%;
          position:relative;
          background:red;
          display:inline-block;
          padding:0.3rem 0.2rem !important;
          margin:0.3rem 0.2rem !important;
          left:-18px;
          top:10px;
          z-index: 99 !important;
        }
        .round > span {
          color:white;
          display:block;
          text-align:center;
          font-size:1rem !important;
          padding:0 !important;
        }
        #list{
         
          display: none;
          top: 33px;
          position: absolute;
          right: 2%;
          background:#ffffff;
  z-index:100 !important;
    width: 25vw;
    margin-left: -37px;
   
    padding:0 !important;
    margin:0 auto !important;
    
          
        }
        .message > span {
           width:100%;
           display:block;
           color:red;
           text-align:justify;
           margin:0.2rem 0.3rem !important;
           padding:0.3rem !important;
           line-height:1rem !important;
           font-weight:bold;
           border-bottom:1px solid white;
           font-size:1.8rem !important;

        }
        .message{
          /* background:#ff7f50;
          margin:0.3rem 0.2rem !important;
          padding:0.2rem 0 !important;
          width:100%;
          display:block; */
          
        }
        .message > .msg {
           width:90%;
           margin:0.2rem 0.3rem !important;
           padding:0.2rem 0.2rem !important;
           text-align:justify;
           font-weight:bold;
           display:block;
           word-wrap: break-word;
         
          
        }


  .card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-top: 20px;
  gap: 20px; /* Set the gap between the cards */
}

  .card {
  display: inline-block;
  width: 200px;
  height: 200px;
  background-color: #ffffff;
  border-radius: 5px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
  text-align: center;
  text-decoration: none;
  color: red;
  transition: all 0.3s ease;
 

}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);
  color: grey;
}

.card i {
  font-size: 50px;
  margin-top: 40px;
  margin-bottom: 20px;
}

.card h3 {
  font-size: 20px;
  margin-bottom: 10px;
}


       
    </style>

</head>
<span class="bckg"></span>

<header>
  <h1>Toyota Malawi</h1>
  <nav>
    <ul>
      
      <li>
        <a href="registervehicle.php">Register Vehicle</a>
      </li>
      <li>
        <a href="appointments.php">Make Appointment</a>
      </li>
      <li>
        <a href="viewappointment.php">View Appointment</a>
      </li>
      <li>
        <a href="chat.php">Chat</a>
      </li>
      <li>
        <a href="cart.php">Purchase Parts</a>
      </li>
    </ul>
  </nav>
</header>
<main>

<?php
       $find_notifications = "Select * from inf where active = 1";
       $result = mysqli_query($connection,$find_notifications);
       $count_active = '';
       $notifications_data = array(); 
       $deactive_notifications_dump = array();
        while($rows = mysqli_fetch_assoc($result)){
                $count_active = mysqli_num_rows($result);
                $notifications_data[] = array(
                            "n_id" => $rows['n_id'],
                            "notifications_name"=>$rows['notifications_name'],
                            "message"=>$rows['message']
                );
        }
        //only five specific posts
        $deactive_notifications = "Select * from inf where active = 0 ORDER BY n_id DESC LIMIT 0,5";
        $result = mysqli_query($connection,$deactive_notifications);
        while($rows = mysqli_fetch_assoc($result)){
          $deactive_notifications_dump[] = array(
                      "n_id" => $rows['n_id'],
                      "notifications_name"=>$rows['notifications_name'],
                      "message"=>$rows['message']
          );
        }

     ?>


  <div class="title">
    <h2>User Dashboard</h2>
    <a href="">Hello: <?php echo $_SESSION["email"];?></a>
    <a href="../logout.php">Logout</a>
    <ul class="nav navbar-nav navbar-right">
                    <li><i class="fa fa-bell"   id="over" data-value ="<?php echo $count_active;?>" style="z-index:-99 !important;font-size:32px;color:white;margin:0.5rem 0.4rem !important;"></i></li>
                    <?php if(!empty($count_active)){?>
                    <div class="round" id="bell-count" data-value ="<?php echo $count_active;?>"><span><?php echo $count_active; ?></span></div>
                    <?php }?>
                     
                    <?php if(!empty($count_active)){?>
                      <div id="list">
                       <?php
                          foreach($notifications_data as $list_rows){?>
                            <li id="message_items">
                            <div class="message alert alert-warning" data-id=<?php echo $list_rows['n_id'];?>>
                              <span><?php echo $list_rows['notifications_name'];?></span>
                              <div class="msg">
                                <p><?php 
                                  echo $list_rows['message'];
                                ?></p>
                              </div>
                            </div>
                            </li>
                         <?php }
                       ?> 
                       </div> 
                     <?php }else{?>
                        <!--old Messages-->
                        <div id="list">
                        <?php
                          foreach($deactive_notifications_dump as $list_rows){?>
                            <li id="message_items">
                            <div class="message alert alert-danger" data-id=<?php echo $list_rows['n_id'];?>>
                              <span><?php echo $list_rows['notifications_name'];?></span>
                              <div class="msg">
                                <p><?php 
                                  echo $list_rows['message'];
                                ?></p>
                              </div>
                            </div>
                            </li>
                         <?php }
                       ?>
                        <!--old Messages-->
                     
                     <?php } ?>
                     
                     </div>
                  </ul>
    
  </div>
  <div class="card-container">
  <a href="registervehicle.php" class="card">
  <i class="fa fa-car"></i>
  <h3>Register Vehicle</h3>
  
</a> 

<a href="appointments.php" class="card">
  <i class="fa fa-calendar"></i>
  <h3>Make Appointment</h3>
  
</a>

<a href="viewappointment.php" class="card">
  <i class="fa fa-eye"></i>
  <h3> View Appointment</h3>
  
</a>

<a href="chat.php" class="card">
  <i class="fa fa-comments"></i>
  <h3>Chat</h3>
  
</a>

<a href="Cart.php" class="card">
  <i class="fa fa-gears"></i>
  <h3>Servicing parts</h3>
  
</a>

</div>
</main>


<script>
$(document).ready(function(){
    var ids = new Array();
    $('#over').on('click',function(){
           $('#list').toggle();  
       });

   //Message with Ellipsis
   $('div.msg').each(function(){
       var len =$(this).text().trim(" ").split(" ");
      if(len.length > 12){
         var add_elip =  $(this).text().trim().substring(0, 65) + "…";
         $(this).text(add_elip);
      }
     
}); 


   $("#bell-count").on('click',function(e){
        e.preventDefault();

        let belvalue = $('#bell-count').attr('data-value');
        
        if(belvalue == ''){
         
          console.log("inactive");
        }else{
          $(".round").css('display','none');
          $("#list").css('display','block');
          
          // $('.message').each(function(){
          // var i = $(this).attr("data-id");
          // ids.push(i);
          
          // });
          //Ajax
          $('.message').click(function(e){
            e.preventDefault();
              $.ajax({
                url:'./connection/deactive.php',
                type:'POST',
                data:{"id":$(this).attr('data-id')},
                success:function(data){
                 
                    console.log(data);
                    location.reload();
                }
            });
        });
     }
   });

   $('#notify').on('click',function(e){
        e.preventDefault();
        var name = $('#notifications_name').val();
        var ins_msg = $('#message').val();
        if($.trim(name).length > 0 && $.trim(ins_msg).length > 0){
          var form_data = $('#frm_data').serialize();
        $.ajax({
          url:'./connection/insert.php',
                type:'POST',
                data:form_data,
                success:function(data){
                    location.reload();
                }
        });
        }else{
          alert("Please Fill All the fields");
        }
      
       
   });
});
</script>

<?php } ?>