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
					<a href="/chat" class="rowmenu animate-flicker" ><img src="image/chat.png" width="30" height= "30"/>
                	Chat</a>
                </li>
                <li href="#" class="listmenu">
					<a href="/crush/{{$user->id}}" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30"/>
                	Ghép đôi</a>
                </li>
                <li href="#" class="listmenu" >
					<a href="/thongbao" class="rowmenu animate-flicker"  ><image src="image/thongbao.png" width="30"  height= "30"/>
                	Thông báo <i class="fa fa-angle-down"></i></a>

                	<ul class="drop">
				        <li><a href="#"><image src="image/love_follow.png" width="15"  height= "15"/> Abc đã thích bạn</a></li>
				       
				       
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

</body>
</html>