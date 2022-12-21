<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="local/font/css/all.min.css">
    <script src="local/font/js/all.min.js"></script>
    <script src="local/jqlocal.js"></script>
    <link rel="stylesheet" href="local/boot/css/bootstrap.min.css">
    <script src="local/boot/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="local/scrollreveal.js"></script>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        nav {
            position: fixed;
            top: 0;
            z-index: 2;
            width: 100%;
            height: 70px;
            background-image: linear-gradient(90deg, rgba(100,115,111,1) 0%, rgba(132,132,156,1) 51%, rgba(117,133,136,1) 94%);
        }

        nav .logo {
            width: 8%;
            height: 7vh;
            color: white;
            line-height: 70px;
            font-weight: bold;
            padding: 0 10px;
            text-transform: uppercase;
            font-size: 35px;
        }


        nav .logo img {
            width: 100%;
            height: 100%;
        }

        nav ul {
            right: 20px;
            position: absolute;
            top: 20px;
        }

        nav ul li {
            margin: 0 5px;
            display: inline-block;
            list-style-type: none;
            font-weight: 600;
            text-transform: uppercase;
        }
        nav ul li.active a {
            background-color: white;
            color: black;
        }

        nav ul li a {
            padding: 10px;
            text-decoration: none;
            color: white;
            border-right: 4px solid rgb(69, 69, 74);
            font-size: 17px;
        }

        nav ul li a:hover {
            background-color: rgb(69, 69, 74);
            border-radius: 6px;
            transition: .2s;
        }

        nav ul li a #i {
            padding-right: 5px;
        }

        #checkbox {
            display: none;
        }

        .checkboxicone,
        .checkboxicone2 {
            line-height: 70px;
            font-size: 30px;
            color: white;
            float: right;
            margin-right: 20px;
            cursor: pointer;
            display: none;
        }
        .to_top_btn {
            height: 50px;
            width: 50px;
            position: fixed;
            bottom: 800px;
            right: 30px;
            border-radius: 50%;
            background-color: white;
            color: black;
            font-size: 2rem;
            text-align: center;
            z-index: 2;
            opacity: 0;
            visibility: hidden;
            transition: 0.4s;
            cursor: pointer;
        }
        .to_top_btn.active{
            bottom: 30px;
            opacity: 1;
            visibility: visible;
        }

        @media (max-width: 850px) {
            .checkboxicone {
                display: block;
            }

            nav {
                width: 100%;
            }

            nav ul {
                position: fixed;
                width: 100%;
                height: 100vh;
                background-color: rgb(69, 69, 70);
                left: -400%;
                top: 70px;
                transition: .4s all ease;
            }

            nav ul li {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-left: -20px;
                padding: 15px;
            }

            #checkbox:checked~ul {
                left: 0;
            }

            #checkbox:checked~.checkboxicone2 {
                display: block;
                transition: .4s all ease;
                color: red;
            }

            #checkbox:checked~.checkboxicone {
                display: none;
            }
        }
    </style>
</head>

<header>
    <div class="to_top_btn" onclick="to_top();">
        <i class="fa fa-up-long"></i>
    </div>
    <nav>
        <input type="checkbox" name="checkbox" id="checkbox">
        <label for="checkbox" class="checkboxicone">
            <i class="fa fa-bars"></i>
        </label>
        <label for="checkbox" class="checkboxicone2">
            <i class="fa fa-times"></i>
        </label>
        <!-- <img class="logo" src="images/logo.jpg" alt=""> -->
        <h1 class="logo">Moussa</h1>


        <ul>
            <?php  $pages=basename($_SERVER['PHP_SELF']); ?>
            <li class="<?php  if($pages=='index.php'):echo 'active';endif; ?>">
                <a href="index.php"><i id="i" class="fa fa-home"></i>Accueil</a>
            </li>
            <li class="<?php  if($pages=='service.php'):echo 'active';endif; ?>">
                <a href="service.php"><i id="i" class="fa fa-home"></i>Services</a>
            </li>
            <li class="<?php  if($pages=='contact.php'):echo 'active';endif; ?>">
                <a href="contact.php"><i id="i" class="fa fa-phone"></i>Contact</a>
            </li>
            <li class="<?php  if($pages=='about.php'):echo 'active';endif; ?>">
                <a href="about.php"><i id="i" class="fa fa-info-circle"></i>a propos</a>
            </li>

        </ul>



    </nav>

</header>
<script>
    window.addEventListener('scroll',function () {
        var scroll=document.querySelector('.to_top_btn');
scroll.classList.toggle("active", window.scrollY > 350);
      });

      function to_top(){
        window.scrollTo({
            top:0,
            behavior:'smoth'
        });
      }

    $(document).on('click','ul li',function(){
        $(this).addClass('active').siblings().removeClass('active');
    });
</script>