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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<base href="{{asset('')}}">
	
	
</head>
<body style="overflow: auto;">
	<div class="header" >
		<a href="/home" class="logo"><img src="image/logo/logo_fil_zoom.png"></a>
		<div class="header-right">

              <a href="/myprofile/{{$user->id}}">{{$user->name}}</a>
                    
            <a href="/logout">Đăng xuất</a>
			<a href="/home" >Trang chủ</a>
			<a href="/contact" >Liên hệ</a>
			
		</div>
	</div>
	<section>
		<nav>
			<ul >
                <li class="menu listmenu">
                	Menu
                </li>
				<li href="#" class="listmenu" >
					<a href="/myprofile/{{$user->id}}" class="rowmenu"><img src="image/profile/{{$user->image}}"width="30" height= "30" />		
                	{{$user->name}}</a>
         
                </li>
                <li href="#" class="listmenu">
					<a href="/chat" class="rowmenu" ><img src="image/chat.png" width="30" height= "30"/>
                	Chat</a>
                </li>
                <li href="#" class="listmenu">
					<a href="/crush/{{$user->id}}" class="rowmenu"><image src="image/ghepdoi.png" width="30"  height= "30">
                	Ghép đôi</a>
                </li>
                <li href="#" class="listmenu">
					<a href="/thongbao" class="rowmenu"><image src="image/thongbao.png" width="30"  height= "30">
                	Thông báo</a>
                </li>
            </ul>

            <form class="form-inline" action="">
            	<div class="form-group" style="margin-left: 5px;margin-top: 10px;">
					<input type="text" style="width: 200px;" class="form-control" placeholder="Tên crush ..." name="name" value="{{ \Request::get('name' )}}">
				</div>
				<button type="submit" class="btn btn-default" style="margin-left: 5px;margin-top: 10px;">Tìm kiếm</button>
            </form>
        </nav>
            <?php
				$data = $users->where('sid',$school->id)->sortByDesc('created_at');
			?>
		
		@foreach($userSr as $user)
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