<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-----Font-Awesome ------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Responsive Website</title>
  </head>
  <body>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .hero{
            height: 100vh;
            background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.6)),url(background.jpg);
            background-position: center;
            background-size: cover;
            overflow: hidden;
            position: relative;  
        }
        .nav-bar{
            display: flex;
            padding: 20px 130px; 
        }
        .nav-logo img{
            width: 130px;
        }
        .nav-links{
            flex: 1;
        }
        .nav-links ul{
            margin-left: 50px;
            display: inline;
        }
        .nav-links ul li{
            list-style: none;
            display: inline-block;
            padding: 8px 25px;
            padding-top: 40px;
        }
        .nav-links ul  a{
            font-size: 14px;
            color: #fff;
            text-decoration: none;
        }
        .nav-links ul li::after{
            content: '';
            width: 0%;
            height: 2px;
            background: yellow;
            display: block;
            margin: auto;
        }
        .nav-links ul li:hover::after{
            width: 100%;
        }
        .btn{
            padding: 10px 20px;
            background: yellow;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }
         .nav-links .btn{
            float: right;
            margin-top: 40px;
         }
         .banner-title{
            color: #fff;
            margin: 80px 130px;
         }
         .banner-title h1{
            font-size: 64px;
            margin-bottom: 30px;
         }
         .banner-title h1 span{
            color: yellow;

         }
    </style>

  <!--   Vertical-bar -->
  <style type="text/css">
      .vertical-bar{
        height: 100%;
        background: #000;
        top: 0;
        left: 0;
        position: absolute;
      }
      .search-icon{
        height: 60%;
        width: 80%;
      }
       .search-icon .fa{
        margin: 45px 23px; 
        display: block;
        color: #fff;
        font-size: 30px;
        cursor: pointer;
       }
       .social-icons{
        height: 35%;
        width: 100%;
        background: yellow;
        text-align: center;
        padding-top: 27%;
        bottom: 0;
        position: absolute;
       }
       .social-icons .fa{
        margin: 15px 23px;
        display: block;
        padding: 8px;
        border:1px solid #000;
        border-radius: 50%;
        cursor: pointer;
       } /*  End- Vertical-bar*/

       .notifications{
        display: flex;
        width: 400px;
        margin-top: 120px;
        right: 0;
        bottom: 0;
        position: absolute;
        background: yellow;
        align-items: center;
       }
       .contents{
        flex-basis: 50%;
        padding: 10px;
       }
       .notification-img{
        flex-basis: 50%;
       }
       .notification-img img{
        width: 100%;
        }
        .contents a{
            text-decoration: none;
            color: #000;
            font-size: 13px;
            margin: 0 10px;
        }
         .contents p{
            text-align: right;
            margin-top: 10px;
         }
         .nav-bar .fa{
            display: none;
         }
  </style>

  <!-- Media Query
 -->

 <style type="text/css">
     @media only screen and (max-width: 700px) {
        .vertical-bar{
            display: none;
        }
        .banner-title{
           margin: 10px 30px;
       }
        .banner-title h1{
            font-size: 40px;
        }
         .nav-logo img{
            width: 120px;
            margin-left: -150px;
            margin-top: -15px;
        }
        .notifications{
            width: 100%;
        }
        .nav-bar{
           padding: 10px 140px;  
        }
        .fa-bars{
            position: absolute;
            right: 20px;
            top: 20px;
        }
        .nav-bar .fa{
            display: block;
            color: white;
            margin: 10px 25px;
            font-size: 22px;
            cursor: pointer;
        }
        .nav-links{
            height: 100vh;
            width: 200px;
            background: #000;
            top: 0;
            right: -200px;
            position: absolute;
            z-index: 2;
         }
        .nav-links ul a{
            display: block;
        }
        .nav-links .btn{
            float: none;
            margin-left: 25px;
            margin-top: 10px;
        }
        .banner-title .btn{
            margin-bottom: 100px;
        }


  
   }
 </style>

   <!------------Header----------->
    <section id="Header">
        <div class="hero">
            <div class="nav-bar">
                <div class="nav-logo">
                    <img src="logo.png">
                </div>
                <div class="nav-links" id="nav-links">
                     <i class="fa fa-close" onclick="closeMenu()"></i>
                    <ul>
                        <a href="#"><li>HOME</li></a>
                        <a href="#"><li>ABOUT</li></a>
                        <a href="#"><li>RECIPE</li></a>
                        <a href=""><li>CONTACT-US</li></a>
                    </ul>
                    <button type="button" class="btn">SIGN UP</button>
                </div>
               <i class="fa fa-bars" onclick="showMenu()"></i>
            </div>
            <div class="banner-title">
                <h1>Food<span>Doesn't have<br>a religion.</span>It is a religion</h1>
                <button type="button" class="btn">EXPLORE</button>
            </div>
            <!-- Vertical-bar -->
            <div class="vertical-bar">
                <div class="search-icon">
                    <i class="fa fa-th-list" aria-hidden="true"></i>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <div class="social-icons">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-pinterest"></i>
                    
                </div>
            </div> <!--End-Vertical-bar -->

           
            <div class="notifications">
                <div class="contents">
                    <small>Subscribe Easy tutorails You tube channel and never miss any new videos.</small>
                    <p><a href="">PREV</a><a href="">NEXT</a></p>
                </div>
                <div class="notification-img">
                    <img src="small image.png">
                </div>
            </div>
         
        </div>
   </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

   <script>
    var show =document.getElementById('nav-links')
       function showMenu() {
           show.style.right ="0";
       }
       function closeMenu() {
           show.style.right ="-200px";
       }

   </script>


  </body>
</html>