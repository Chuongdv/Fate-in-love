<!DOCTYPE html>
<html lang="en">
<head>
	<title>FateInLove</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/back_ground.css') }}" /> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
<link rel="shortcut icon" type="image/png" href="/image/logo/logo_fav.png"/>

<base href="{{asset('')}}">

    <meta name="_token" content="{{csrf_token()}}" />
    <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<body>
	<div class="header" >
		<a href="/home" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
		<div class="header-right">

              <a href="/myprofile/{{$user->id}}">{{$user->name}}</a>
                    
            <a href="/logout">Đăng xuất</a>
			
			<a href="/contact" >Liên hệ</a>
			
		</div>
	</div>

	<section>
		<div id="me" hidden>{{$user->id}}</div>
		<nav class="tutorial">
			<ul>
                <li class="menu listmenu">
                	Menu
                </li>
				<li href="#" class="listmenu" >
					<a href="/myprofile/{{$user->id}}" class="rowmenu"><img src="image/profile/{{$user->image}}"width="30" height= "30" />		
                	{{$user->name}}</a>
         
                </li>
                <li href="#" class="listmenu">
					<a href="/chat" class="rowmenu " ><img src="image/chat.png" width="30" height= "30"/>
                	Chat</a>
                </li>
                <li href="#" class="listmenu">
					<a href="/crush/{{$user->id}}" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30"/>
                	Ghép đôi</a>
                </li>
                <li href="#" class="listmenu" >

					<a href="/thongbao" class="rowmenu" id="nhapnhay"  ><image src="image/thongbao.png" width="30"  height= "30"/>

                	Thông báo <i class="fa fa-angle-down"></i></a>

                	<ul class="drop">

				    </ul>


                </li>
            </ul>
        </nav>
            <?php
				$data = $users->shuffle()->take(8);
				?>
@foreach($data as $user)
		<div>
			<div class="wrapper" >
				
				<a href="#" class="infocrush">
					<div class="profile">
						<div>
							<a href="/profile/{{$user->id}}"><img src="image/profile/{{$user->image}}" class="thumbnail imgcrush"><a>
						</div>
						<h3 class="name" >{{$user->name}}</h3>
						<p class="title">{{$user->birthday}}</p>
					</div>
				</a>
				
			</div>
			
		</div>
		@endforeach
	</section>


	<script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>

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


});


 $("#nhapnhay").hover(function(){
		$(this).removeAttr('class');
 		$(this).attr('class', 'rowmenu');
 });

 </script>

</body>
</html>