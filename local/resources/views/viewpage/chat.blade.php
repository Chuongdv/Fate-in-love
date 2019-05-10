<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>

		 <link rel="stylesheet"  href="{{asset('css/new_page.css')}}" /> 
		<link rel="stylesheet"  href="{{asset('css/back_ground.css')}}" /> 
		<link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
		<link rel="stylesheet"  href="{{asset('css/chat.css')}}" />

<base href="{{asset('')}}">

	</head>

	<body>
		

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
        </nav>


       <div class="chat_container">
       	<div class="search">
       		<input type="text" placeholder="  Tìm kiếm..." name="" class="form-control search" style="min-width: 260px;">
       		<img src="" width="40" height="40" style="">
       		</div>
       	<div class="right-container">


       		<div class="chat-person choose">
       			<img src="image/profile/avatar.jpg">
	       			<div class="inf">
	       			<p class="name">Phạm Hoài Lâm</p>
	       			<p class="on">đang online</p>
		       		</div>



       		</div>

          <div class="chat-person unchoose">
       			<img src="image/profile/avatar.jpg">
	       			<div class="inf">
	       			<p class="name">Phạm Hoài Lâm</p>
	       			<p class="on">đang online</p>
		       		</div>



       		</div>
          <div class="chat-person unchoose">
            <img src="image/profile/avatar.jpg">
              <div class="inf">
              <p class="name">Phạm Hoài Lâm</p>
              <p class="on">đang online</p>
              </div>



          </div>
          <div class="chat-person unchoose">
            <img src="image/profile/avatar.jpg">
              <div class="inf">
              <p class="name">Phạm Hoài Lâm</p>
              <p class="on">đang online</p>
              </div>



          </div>
          <div class="chat-person new_message">
            <img src="image/profile/avatar.jpg">
              <div class="inf">
              <p class="name">Phạm Hoài Lâm</p>
              <p class="on">đang online</p>
              </div>



          </div>
       		

       	</div>

       	<div class="left-container">
       		<div class="top-left-container">
       			<img src="image/profile/avatar.jpg">
       			<div class=" inf-chat">
       				<p class="inf-chat-name">Phạm Hoài Lâm</p>
       				<p class="inf-chat-name-count">1000 tin nhắn</p>
       			</div>

       		</div>
       		<div class="chatting">
       			<!--tin nhan tu ban than-->
       			<div class="chat-form-me">
       				

       				<div class="messenger"> <p>h</p></div>
       			</div>
       			<!--tin nhan tu nguoi dang chat voi minh-->
       			<div class="chat-form-crush">
       				

       				<div class="messenger"> <p>hello sssssssssss s s s s </p></div>
       			</div>
       			


            <div class="chat-form-crush">
              

              <div class="messenger"> <p>hello sssssssssss s s s s </p></div>
            </div>
            <div class="chat-form-crush">
              

              <div class="messenger"> <p>hello sssssssssss s s s s </p></div>
            </div>
            <div class="chat-form-crush">
              

              <div class="messenger"> <p>hello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s s </p></div>
            </div>


            <div class="chat-form-me">
              

              <div class="messenger"> <p>h</p></div>
            </div><div class="chat-form-me">
              

              <div class="messenger"> <p>h</p></div>
            </div><div class="chat-form-me">
              

              <div class="messenger"> <p>h ssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s s shello sssssssssss s s </p></div>
            </div><div class="chat-form-me">
              

              <div class="messenger"> <p>h</p></div>
            </div>




       		</div>


       		<div class="send_message">
				<textarea name="" class="form-control type_msg" placeholder="Nhập tin nhắn..." style="margin-top: 5px; margin-left: 5px; font-size: 20px; width: 88%;"></textarea>
				<img src="image/logo/send-button.png" width=60 height=60 style="border-radius: 10px;">

       		</div>
       		

       	   </div>



       		
       	</div>
       </div>



        
        
      
  </section>






</body>
</html>
