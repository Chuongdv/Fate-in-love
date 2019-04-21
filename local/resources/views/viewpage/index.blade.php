<!DOCTYPE html>
<html lang="en">
<head>
	<title>FateInLove</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/back_ground.css') }}" /> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
<base href="{{asset('')}}">
	
</head>
<body>
	<div class="header" >
		<a href="#default" class="logo""><img src="image/logo/logo_fil_zoom.png"></a>
		<div class="header-right">

              <a href="/myprofile/{{$user->id}}" style="color: #bf0000;" >{{$user->name}}</a>
                    
            <a href="/logout" style="color: #bf0000;">Đăng xuất</a>
			<a href="/home" style="color: #bf0000;">Trang chủ</a>
			<a href="#contact" style="color: #bf0000;">Liên hệ</a>
			
		</div>
	</div>

	<section>
		<nav>
			<ul >
                <li class="menu listmenu">
                	Menu
                </li>
				<li href="#" class="listmenu" >
					<a href="/myprofile/{{$user->id}}" class="rowmenu""><img src="image/profile/{{$user->image}}"width="30" height= "30" />		
                	Trang cá nhân</a>
         
                </li>
                <li href="#" class="listmenu">
					<a href="" class="rowmenu" style="color: #bf0000;"><img src="image/chat.png" width="30" height= "30"/>
                	Chat</a>
                </li>
                <li href="#" class="listmenu">
					<a href="#" class="rowmenu"style="color: #bf0000;"><image src="image/ghepdoi.png" width="30"  height= "30">
                	Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
					<a href="#" class="rowmenu"style="color: #bf0000;"><image src="image/thongbao.png" width="30"  height= "30">
                	Thông báo</a>
                </li>
            </ul>
        </nav>
            <?php
				$data = $users->where('star',1)->sortByDesc('created_at')->take(8);
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

</body>
</html>