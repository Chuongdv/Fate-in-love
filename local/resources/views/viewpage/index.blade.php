<!DOCTYPE html>
<html lang="en">
<head>
	<title>FateInLove</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" /> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
<base href="{{asset('')}}">
	<style type="text/css">
		a{
            color: pink;
		}
	</style>
</head>
<body>
	<div class="header" style="background-image: url('image/header.jpg');">
		<a href="#default" class="logo" style="color: #CC0066;">FateInLove</a>
		<div class="header-right">

              <a href="/myprofile/{{$user->id}}" style="color: #CC0066; font-weight: bold;">{{$user->name}}</a>
                     
            <a href="/logout" style="color: #CC0066; font-weight: bold;">Logout</a>
			<a href="/home" style="color: #CC0066; font-weight: bold;">Home</a>
			<a href="#contact" style="color: #CC0066;font-weight: bold;" >Contact</a>
			<a href="#about" style="color: #CC0066;font-weight: bold;" >About</a>
			
		</div>
	</div>

	<section>
		<nav>
			<ul >
                <li class="menu listmenu" style="background-image: url('image/menubg.jpg');color: #CC0066; font-weight: bold; ">
                	Menu
                </li>
				<li href="#" class="listmenu">
					<image src="image/profile/{{$user->image}}" width="50">
						
                	<a href="/myprofile/{{$user->id}}" class="rowmenu"style="color: #CC0066;font-weight: bold;">Profile</a>
         
                </li>
                <li href="#" class="listmenu">
					<image src="image/chat.png" width="50">
                	<a href="#" class="rowmenu" style="color: #CC0066;font-weight: bold;">Chat</a>
                </li>
                <li href="#" class="listmenu">
					<image src="image/ghepdoi.png" width="50">
                	<a href="#" class="rowmenu"style="color: #CC0066;font-weight: bold;">Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
					<image src="image/thongbao.png" width="50">
                	<a href="#" class="rowmenu"style="color: #CC0066;font-weight: bold;">Thông báo</a>
                </li>
            </ul>
        </nav>
            <?php
				$data = $users->where('star',1)->sortByDesc('created_at')->take(8);
				?>
@foreach($data as $user)
		<div>
			<div class="wrapper" style="float: left;">
				
				<a href="#" class="infocrush">
					<div class="profile">
						<div>
							<a href="/profile/{{$user->id}}"><img src="image/profile/{{$user->image}}" class="thumbnail imgcrush"><a>
						</div>
						<h3 class="name" style="color: #CC0066;">{{$user->name}}</h3>
						<p class="title"style="color: #CC0066;">{{$user->birthday}}</p>
					</div>
				</a>
				
			</div>
			
		</div>
		@endforeach
	</section>

</body>
</html>