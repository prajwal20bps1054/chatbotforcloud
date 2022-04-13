<?php
date_default_timezone_set('Asia/Kolkata');
include('database.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>

	<br>
	<br>
	<br>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>prajwal Chatbot</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link href="style.css" rel="stylesheet">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </head>

<style>
body 
{
  background-image: url('data:image/jpeg;base64,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');
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
   <body>
      <div class="container">
         <div class="row justify-content-md-center mb-8">
            <div class="col-md-8">
            	<form class="myform" action="homepage.php" method="post">
			<input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
			
		</form>
		
		<?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:index.php');
			}
		?>
               <!--start code-->
               <div class="card">
                  <div class="card-body messages-box">
					 <ul class="list-unstyled messages-list">
							<?php
							$res=mysqli_query($con,"select * from message");
							if(mysqli_num_rows($res)>0){
								$html='';
								while($row=mysqli_fetch_assoc($res)){
									$message=$row['message'];
									$added_on=$row['added_on'];
									$strtotime=strtotime($added_on);
									$time=date('h:i A',$strtotime);
									$type=$row['type'];
									if($type=='user'){
										$class="messages-me";
										$imgAvatar="user_avatar.png";
										$name="Me";
									}else{
										$class="messages-you";
										$imgAvatar="bot_avatar.png";
										$name="Chatbot";

										
									}
									$html.='<li class="'.$class.' clearfix"><span class="message-img"><img src="image/'.$imgAvatar.'" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">'.$name.'</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'.$time.'</span></small> </div><p class="messages-p">'.$message.'</p></div></li>';
								}
								//echo $html;
							}else{
								?>
								<li class="messages-me clearfix start_chat">
								   Please start
								</li>
								<?php
							}
							?>
                    
                     </ul>
                  </div>
                  <div class="card-header">
                    <div class="input-group">
					   <input id="input-me" type="text" name="messages" class="form-control input-sm" placeholder="Type your message here..." />

					   <span class="input-group-append">
					   <input type="button" class="btn btn-primary" value="Send" onclick="send_msg()">
					   </span>
					</div> 
                  </div>
               </div>
               <!--end code--> 
            </div>
         </div>
      </div>
      <script type="text/javascript">
		 function getCurrentTime(){
			var now = new Date();
			var hh = now.getHours();
			var min = now.getMinutes();
			var ampm = (hh>=12)?'PM':'AM';
			hh = hh%12;
			hh = hh?hh:12;
			hh = hh<10?'0'+hh:hh;
			min = min<10?'0'+min:min;
			var time = hh+":"+min+" "+ampm;
			return time;
		 }
		 function send_msg(){
			jQuery('.start_chat').hide();
			var txt=jQuery('#input-me').val();
			var html='<li class="messages-me clearfix"><span class="message-img"><img src="image/user_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Me</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+txt+'</p></div></li>';





			jQuery('.messages-list').append(html);
			jQuery('#input-me').val('');
			if(txt){
				jQuery.ajax({
					url:'get_bot_message.php',
					type:'post',
					data:'txt='+txt,
					success:function(result){



						var html='<li class="messages-you clearfix"><span class="message-img"><img src="image/bot_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Chatbot</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+result+'</p></div></li><a href="invalidans.php" id="invalid_btn"><i>Invalid Answer ?</i></a>';
						
						jQuery('.messages-list').append(html);
						jQuery('.messages-box').scrollTop(jQuery('.messages-box')[0].scrollHeight);
					}
				});
			}
		 }
      </script>
   </body>
</html>



