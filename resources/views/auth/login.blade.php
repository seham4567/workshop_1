	
   <!DOCTYPE html>
   <html lang="en" >
   <head>
     <meta charset="UTF-8">
     <title>CodePen - A Pen by Mohithpoojary</title>
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="{{ asset('assets/style.css') }}">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

   </head>
   <body>
   <!-- partial:index.partial.html -->
   <div class="container">
       <div class="screen">
           <div class="screen__content">
               <form class="login" method="post" action="{{ route('login') }}">
                @csrf
                   <div class="login__field">
                       <i class="login__icon fas fa-user"></i>
                       <input type="text" class="login__input" placeholder="User name / Email" name="email">
                   </div>
                   <div class="login__field">
                       <i class="login__icon fas fa-lock"></i>
                       <input type="password" class="login__input" placeholder="Password" name="password">
                   </div>
                   <button class="button login__submit">
                       <span class="button__text">Log In Now</span>
                       <i class="button__icon fas fa-chevron-right"></i>
                   </button>				
               </form>
               <div class="social-login">
                   <h3>log in via</h3>
                   <div class="social-icons">
                       <a href="#" class="social-login__icon fab fa-instagram"></a>
                       <a href="#" class="social-login__icon fab fa-facebook"></a>
                       <a href="#" class="social-login__icon fab fa-twitter"></a>
                   </div>
               </div>
           </div>
           <div class="screen__background">
               <span class="screen__background__shape screen__background__shape4"></span>
               <span class="screen__background__shape screen__background__shape3"></span>		
               <span class="screen__background__shape screen__background__shape2"></span>
               <span class="screen__background__shape screen__background__shape1"></span>
           </div>		
       </div>
   </div>
   <!-- partial -->
   @include('sweetalert::alert')

   </body>
   </html>