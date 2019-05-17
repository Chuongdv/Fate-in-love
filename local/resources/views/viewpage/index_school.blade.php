
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" /> 
<link rel="shortcut icon" type="image/png" href="/image/logo/logo_fav.png"/>

  <base href="{{asset('')}}">

<<<<<<< HEAD
<link rel="shortcut icon" type="image/png" href="/image/logo/logo_fav.png"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <meta name="_token" content="{{csrf_token()}}" />
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>

<base href="{{asset('')}}">
	<style type="text/css">a:hover{text-decoration: none;}</style>
	
=======
>>>>>>> fc963d89ba406fa6cef0fda028c15241bed3759d
</head>
<body>
  <div class="header" >
    <a href="/home" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">

              <a href="/myprofile/{{$user->id}}" >{{$user->name}}</a>
                     
            <a href="/logout">Đăng xuất</a>
<<<<<<< HEAD
			
			<a href="/contact" >Liên hệ</a>
			
		</div>
	</div>
	<section>
	<div id="me" hidden>{{$user->id}}</div>
		<nav class="tutorial">
			<ul>
=======
      
      <a href="/contact">Liên hệ</a>
      
      
    </div>
  </div>
  <section>
  <nav>
      <ul >
>>>>>>> fc963d89ba406fa6cef0fda028c15241bed3759d
                <li class="menu listmenu">
                  Menu
                </li>
        <li href="#" class="listmenu" style="text-align: left;">
          <a href="/myprofile/{{$user->id}}" class="rowmenu"><img src="image/profile/{{$user->image}}"width="30" height= "30" />
            
                  {{$user->name}}</a>
         
                </li>
                <li href="#" class="listmenu">
<<<<<<< HEAD
					<a href="/chat" class="rowmenu "id="tinnhan"><img src="image/chat.png" width="30" height= "30"/>
                	Chat</a>
                </li>
                <li href="#" class="listmenu">
					<a href="/crush/{{$user->id}}" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30"/>
                	Ghép đôi</a>
                </li>
                <li href="#" class="listmenu" >

					<a  class="rowmenu" id="nhapnhay"  ><image src="image/thongbao.png" width="30"  height= "30"/>

                	Thông báo <i class="fa fa-angle-down"></i></a>

                	<ul class="drop">

				    </ul>


=======
          <a href="/chat" class="rowmenu"><img src="image/chat.png" width="30" height= "30"/>
                  Chat</a>
                </li>
                <li href="#" class="listmenu">
          <a href="/crush/{{$user->id}}" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30">
                  Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
          <a href="/thongbao" class="rowmenu"><image src="image/thongbao.png" width="30"  height= "30">
                  Thông báo</a>
>>>>>>> fc963d89ba406fa6cef0fda028c15241bed3759d
                </li>
            </ul>
        </nav>

    <div>
      <div class="content">
  <div class="card">
    <div class="firstinfo">
      <table>
          <tr><td>
               <img src="image/logo/{{$school->logo}}" class="image_profile" />
          </td></tr>
          <tr><td style="text-align: center;">
             <?php
             $data = DB::table('fschool')->select('sid')->where('uid',$user->id)->get()->toArray();
             $check=0;
            foreach($data as $cr)
               if($cr->sid == $school->id) {
                $check=1;
               }
             ?>

              
              @if($check==1)
            <div class="button_container">

              <a href="/unfollow_fschool/{{$user->id}}/{{$school->id}}"><button style="background-image: url('image/love_follow.png')" onclick = "myClick()" id="fl" class="btn" style="width: 150px; border-radius: 50px; margin-top: 50px;"><span>Đang theo dõi</span></button></a>
              </div>
              @else
             <div class="button_container">

              <a href="/follow_fschool/{{$user->id}}/{{$school->id}}"><button style="background-image: url('image/love_follow.png')" onclick = "myClick()" id="fl" class="btn" style="width: 150px; border-radius: 50px; margin-top: 50px;"><span>Theo dõi</span></button></a>
              </div>
               @endif  
            
              <script type="text/javascript">
                function myclick(){
                    var imgPath = new String();
                    imgPath = document.getElementById("fl").style.backgroundImage;
                    if(imgPath == "url('image/love_follow.png')" || imgPath == "")
                    {
                        document.getElementById("div1").style.backgroundImage = "url('image/love_follow.png')";
                    }
                    else
                    {
                        document.getElementById("div1").style.backgroundImage = "url('image/love_unfollow.png')";
                    }
                  }
              </script>
          </td></tr>




      </table>
     
        <div class="profileinfo" style="margin-left: 100px;">
        <h1></h1>
      
        
        <p class="bio"><img class="img" src="image/logo/logosch.jpg"/>{{$school->name}}</p>
        <p class="bio"><img class="img" src="image/logo/logodc.jpg"/>{{$school->address}}</p>
        <?php
          $count_users = DB::table('fschool')->where('sid',$school->id)->count('uid');
        ?>
        <p class="bio"><img class="img" src="image/logo/logocr.jpg"/> có {{$count_users}} người quan tâm</p>
        
      </div>
    
   

    </div>
  </div>

  

  
</div>
<!-- js cho cac tabs -->


    </div>
    
  </section>

<script>
   
$(document).ready(function () {
   
   Pusher.logToConsole = true;

 var pusher = new Pusher('936d12ed94ff6b0de391', {
    cluster: 'ap1',
    encrypted: false
});

var chanelNotify = "notify." + $("#me").html();


// Subscribe to the channel we specified in our Laravel Event
var channel = pusher.subscribe(chanelNotify);

// Bind a function to a Event (the full Laravel class)
channel.bind('App\\Events\\NotifyEvent', function(data) {
  var infomation;
  if(data.type == "add"){
    infomation = "<li id=\"\"><image src=\"image/love_follow.png\" width=\"15\"  height= \"15\"/>" + data.message + "</li>";
  }else{
    infomation = "<li id=\"\"><image src=\"image/love_unfollow.png\" width=\"15\"  height= \"15\"/>" + data.message + "</li>";
  }
  $(".drop").html(infomation);
  $("#nhapnhay").attr('class', 'animate-flicker');
});

 $("#nhapnhay").hover(function(){
    $(this).removeAttr('class');
    $(this).attr('class', 'rowmenu');
 });

var chanelChat = "messages." +  $("#me").html();


// Subscribe to the channel we specified in our Laravel Event
var channelC = pusher.subscribe(chanelChat);

// Bind a function to a Event (the full Laravel class)
channelC.bind('App\\Events\\NewMessage', function(data) {
    $("#tinnhan").attr('class', 'animate-flicker');
});

});


  $("#tinnhan").click(function(){
    $(this).removeAttr('class');
    $(this).attr('class', 'rowmenu');
 });

 </script>

</body>
</html>