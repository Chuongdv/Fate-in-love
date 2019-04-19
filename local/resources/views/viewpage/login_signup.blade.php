
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>FateInLove</title>
 
<link rel="stylesheet"  href="{{ asset('css/signup_login.css') }}" /> 
  
</head>

<body>
<!-- lấy đoạn login và singup ở đây-->
  <div class="container">
  <div class="message signup">
    <div class="btn-wrapper">
      <button class="button" id="signup">Đăng ký</button>
      <button class="button" id="login"> Đăng nhập</button>
    </div>
  </div>
  <div class="form form--signup">
    <div class="form--heading">Đăng ký tài khoản nào!</div>
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
    <form action='signup_and_login' method="post">
      <input type="hidden" name="_token" value="{{csrf_token()}}"/> 
      <input type="text" placeholder="Tên" name="name">
      <input type="email" placeholder="Email" name="email">
      <input type="gender" placeholder="Giới tính" name="gender">
      <input type="birthdate" placeholder="Ngày sinh" name="birthday">
      <input type="password" placeholder="Mật khẩu" name="password">
      <input type="password" placeholder="Nhập lại mật khẩu" name="passwordAgain">
      <input type="text" placeholder="Nhập ID cá nhân(không quá 8 ký tự)" name="id">
      <button class="button" type="submit">Đăng ký</button>
    </form>
  </div>
  <div class="form form--login">
    <div class="form--heading">Chào mừng quay trở lại! </div>
     @if(count($errors) >0)
                        <div class="alert alert-danger" style="color: red">
                            @foreach($errors->all() as $err)
                            {{$err}}<br>

                            @endforeach

                        </div>

                        @endif

                         @if(session('thongbao'))
                        <div class="alert alert-success" style="color: red">
                            
                            {{session('thongbao')}}<br>
                        </div>

                        @endif
    <form action="{{url('login')}}" method="post">
       <input type="hidden" name="_token" value="{{csrf_token()}}"/>
      <input type="text" placeholder="Email" name="email">
      <input type="password" placeholder="Mật khẩu" name="password">
      <button class="button" type="submit">Đăng nhập</button>
    </form>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>


<!-- đến đây-->

</body>

</html>