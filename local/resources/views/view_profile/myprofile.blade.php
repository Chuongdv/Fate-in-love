<!DOCTYPE html>
<html lang="en">
<head>
  <title>FateInLove</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet"  href="{{ asset('css/new_page.css') }}" /> 
<link rel="stylesheet"  href="{{ asset('css/2style.css') }}" />
 <link rel="stylesheet"  href="{{ asset('css/style_crush_in_profile.css') }}" />
<base href="{{asset('')}}">
</head>
<body>
  <div class="header" >
    <a href="#default" class="logo""><img src="image/logo/logo_fil_zoom.png"></a>
    <div class="header-right">

              <a href="/myprofile/{{$my->id}}" style="color: #bf0000;" >{{$my->name}}</a>
                     
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
        <li href="#" class="listmenu" style="text-align: left;">
          <a href="/myprofile/{{$my->id}}" class="rowmenu"style="color: #bf0000;"><img src="image/profile/{{$my->image}}"width="30" height= "30" />
            
                  Trang cá nhân</a>
                
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
                  <a href="#" class="rowmenu" >
                  Thông báo</a>
                </li>
                
            </ul>
        </nav>
    <div>
     
      <div class="content">
  <div class="card">
    <div class="firstinfo">
    
          <img src="image/profile/{{$my->image}}" class="image_profile" />
    
 
  
        <!-- CHANGE A PHOTO-->
      

      <div class="profileinfo">
        
        <h1 style="color:  #CC0066;">{{$my->name}}</h1>
        <h3 style="color:  #CC0066;">{{$my->birthday}}</h3>
      
        <p class="bio"><img class="img" src="image/logo/logosch.jpg"/>{{$my->school->name}}</p>
        <p class="bio"><img class="img" src="image/logo/logodc.jpg"/> Sống tại {{$my->home}}</p> 

        <p class="bio"><img class="img" src="image/logo/logocr.jpg"/> có 0 người crush</p>
        <p class="bio" style="width: 350px;"><img class="img" src="image/profile/{{$my->image}}"/> {{$my->introduce}}</p>
        <p class="bio"><a href="/editprofile/{{$my->id}}"><img class="img" src="image/logo/logoedit.jpg"/></a> Chỉnh sửa</p>
      </div>
<div>
      
        <div class="tab">
            <button class="tablinks active">Crush</button>
          
            <button class="tablinks">School</button>
         
        </div>
  

 
<div id="Crush" class="tabcontent">
    <!--chi cho 6 hinh thoi-->
    <div>

      <div class="profilet">
          <div ><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/></div>
          <div class="contentt"><a href="#">
            <div class="textt">
              <h1>Kelly Chen</h1>
              
            </div></a>
           
          </div>
          
         
        </div>
<div class="profilet">
          <div ><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/></div>
          <div class="contentt"><a href="#">
            <div class="textt">
              <h1>Kelly Chen</h1>
              
            </div></a>
           
          </div>
          
         
        </div><div class="profilet">
          <div ><img src="https://images.headlines.pw/topnews-2017/imgs/fd/c2/fdc2905c434afd3909038a88dc0437982d744884.jpg" class="photot"/></div>
          <div class="contentt"><a href="#">
            <div class="textt">
              <h1>Kelly Chen</h1>
              
            </div></a>
           
          </div>
          
         
        </div>







    </div>

    <p>Đã quan tâm 20 crush</p>



</div>
 
<div id="School" class="tabcontent">
     <a href="#"><img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/55835898_2829817113910232_8593846147565486080_n.jpg?_nc_cat=100&_nc_oc=AQlGPmriOY2fm7rLKDDOd-zALIiGCRcDLsWL4T3tIn-K0oJzpGPTvXRgSksm5pa6QVY&_nc_ht=scontent.fhan2-4.fna&oh=906cb88d389184b33260c3e7112a43e1&oe=5D0FA6A8"/></a>
     <a href="#"><img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/55835898_2829817113910232_8593846147565486080_n.jpg?_nc_cat=100&_nc_oc=AQlGPmriOY2fm7rLKDDOd-zALIiGCRcDLsWL4T3tIn-K0oJzpGPTvXRgSksm5pa6QVY&_nc_ht=scontent.fhan2-4.fna&oh=906cb88d389184b33260c3e7112a43e1&oe=5D0FA6A8"/></a>
     <a href="#"><img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/55835898_2829817113910232_8593846147565486080_n.jpg?_nc_cat=100&_nc_oc=AQlGPmriOY2fm7rLKDDOd-zALIiGCRcDLsWL4T3tIn-K0oJzpGPTvXRgSksm5pa6QVY&_nc_ht=scontent.fhan2-4.fna&oh=906cb88d389184b33260c3e7112a43e1&oe=5D0FA6A8"/></a>
     <a href="#"><img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/55835898_2829817113910232_8593846147565486080_n.jpg?_nc_cat=100&_nc_oc=AQlGPmriOY2fm7rLKDDOd-zALIiGCRcDLsWL4T3tIn-K0oJzpGPTvXRgSksm5pa6QVY&_nc_ht=scontent.fhan2-4.fna&oh=906cb88d389184b33260c3e7112a43e1&oe=5D0FA6A8"/></a>
     <a href="#"><img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/55835898_2829817113910232_8593846147565486080_n.jpg?_nc_cat=100&_nc_oc=AQlGPmriOY2fm7rLKDDOd-zALIiGCRcDLsWL4T3tIn-K0oJzpGPTvXRgSksm5pa6QVY&_nc_ht=scontent.fhan2-4.fna&oh=906cb88d389184b33260c3e7112a43e1&oe=5D0FA6A8"/></a>
     <a href="#"><img src="https://scontent.fhan2-4.fna.fbcdn.net/v/t1.0-9/55835898_2829817113910232_8593846147565486080_n.jpg?_nc_cat=100&_nc_oc=AQlGPmriOY2fm7rLKDDOd-zALIiGCRcDLsWL4T3tIn-K0oJzpGPTvXRgSksm5pa6QVY&_nc_ht=scontent.fhan2-4.fna&oh=906cb88d389184b33260c3e7112a43e1&oe=5D0FA6A8"/></a>
     <p>Đã quan tâm 5 trường</p>
</div>
 

    </div>
  </div>

  

  
</div>
<!-- js cho cac tabs -->
<script type="text/javascript">
    var buttons = document.getElementsByClassName('tablinks');
    var contents = document.getElementsByClassName('tabcontent');
    function showContent(id){
        for (var i = 0; i < contents.length; i++) {
            contents[i].style.display = 'none';
        }
        var content = document.getElementById(id);
        content.style.display = 'block';
    }
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener("click", function(){
            var id = this.textContent;
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove("active");
            }
            this.className += " active";
            showContent(id);
        });
    }
    showContent('Crush');
</script>

    </div>

    
  </section>

</body>
</html>
