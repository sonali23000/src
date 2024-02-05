<!DOCTYPE html>
<html>
<head>
    <title>Restaurant</title>
    
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        @font-face {
            font-family: 'butter pineapple';
            src: URL(./fonts/butter-pineapple.regular.otf);
        }
        body {
            background-image: url("./img/lettuce.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container {
            width: 1400px;
            margin: auto;
        }
        nav {
            background-color: #4E7047;
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            color: white;
        }
        h2 {
            font-family: 'butter pineapple', sans-serif;
            font-size: xx-large;
        }
        ul {
            list-style-type: none;
            float: right;
            padding-top: 10px;
            padding-right: 20px;
        }
        li {
            float: left;
            padding: 15px;
            font-size: 20px;
        }
        .logo {
            font-size: 50px;
        }
       /* styles for the header */
header {
    background-color: #4E7047;
    color: white;
    padding: 10px;
    text-align: center;
}


/*styles for the navigation menu */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

ul {
    list-style-type: none;
    display: flex;
}

li {
    margin: 0 15px;
    font-size: 18px;
}

.nav-link {
    text-decoration: none;
    color: white;
}

.nav-link:hover {
    text-decoration: underline;
}

footer {
  padding-left: 70px;
  padding-top: 10px;
  background-color: #4E7047;
  color: white;
  font-family: 'EB Garamond', serif;
  font-weight:400;
}
.social-icons {
  list-style: none;
  padding: 0;
  margin: 15px;
  float: left;
  
}

.social-icons li {
  display: inline-block;
  margin-right: 20px; /* Adjust the spacing between icons */
}
.submit-booking{
  margin: 20px 0 20px 40%;
}

.booking-title{
  margin-top: 20px;
  color: light-grey;
  font-size: 40px;
}

.booking-img{
  margin-top: 10%;
}

.about-title{
  padding-left: 20px;
}

.about-text{
  padding-left: 20px;
}

.ctmenu{
  border-bottom: 1px solid red;
}
.line-4 hr {
  height: 2px;
  border: 0;
  background: #638889;
  width: 730px;
  position: absolute;
	left: 25%;
}

.sidebar li a {
     display: block;
    }

    .sidebar ul {
     list-style-type: none;
     margin:0;
     padding: 0;
     width:200px;
    }
    </style>
<
</head>
<body>
    <header>
    
        <!-- NAV BAR -->
<nav class="navbar row">
    <h2 class="col-md-4 logo">Eastern Kitchen</h2>
    <div class="col-md-8">
        <ul>
            <li>
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li>
                <a class="nav-link" href="menu.html">Menu</a>
            </li>
            <li>
                <a class="nav-link" href="booking.html">Booking</a>
            </li>
            <li>
                <a class="nav-link" href="about.html">About</a>
            </li>
        </ul>
    </div>
</nav>

</nav>



   













<!-- END OF NAV BAR -->

    </header>