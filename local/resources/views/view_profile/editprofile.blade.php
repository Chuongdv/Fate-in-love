<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{$user_edit->name}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" /> 
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">
   <link rel="stylesheet"  href="{{ asset('css/changeprofile.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/new.css') }}" /> 
<base href="{{asset('')}}">

</head>
<body>
  <div class="header" style="background-image: url('image/header.jpg');">
    <a href="#default" class="logo" style="color: #CC0066;">FateInLove</a>
    <div class="header-right">
    
              <a href="/myprofile/{{$user_edit->id}}" style="color: #CC0066; font-weight: bold;">{{$user_edit->name}}</a>
                      
                   
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
          <image src="image/profile/{{$user_edit->image}}" width="50">
                  
                  <a href="/myprofile/{{$user_edit->id}}" class="rowmenu"style="color: #CC0066;font-weight: bold;">Profile</a>
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

    <div>
      <div class="content">
  <div class="card">
    <div class="firstinfo">
     
    <img src="{{asset('image/profile/lanta.jpg')}}" class="image_profile" />
  

        <!-- CHANGE A PHOTO-->
      <div class="profileinfo">
        <ul class="change">
          @if(count($errors) >0)
                        <div class="alert alert-danger" style="color: red">
                            @foreach($errors->all() as $err)
                            {{$err}}<br>

                            @endforeach

                        </div>

                        @endif

                         @if(session('thongbao'))
                        <div class="alert alert-success" style="color: green">
                            
                            {{session('thongbao')}}<br>
                        </div>

                        @endif

<form action="" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
<label for="user">Name:</label> 
<input type="text" name="name" value="{{$user_edit->name}}"><br /> 
<label>Email:</label> 
<input type="text" name="email" value="{{$user_edit->email}}"><br /> 
<label>Home:</label> 
<input type="text" name="home" value="{{$user_edit->home}}"><br /> 
<label>Introduece:</label> 
<textarea name="introduce" placeholder="{{$user_edit->introduce}}"></textarea><br /> 
 
        <label> School:
          <select class="old-select" name="school">
            @foreach($school as $sch)
              <option value="{{$sch->name}}" >{{$sch->name}}</option>
              @endforeach
          </select>
          <div class="new-select">
            <div class="selection">
                <p>
                    <span></span>
                    <i></i>
                </p>
                <span></span>
            </div>
          </div>
        </label>
<input type="submit" name="submitbutton" id="submitbutton" value="Edit" /> 
</form>
</ul>       

      </div>

    </div>
  </div>
</div>
  </section>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
