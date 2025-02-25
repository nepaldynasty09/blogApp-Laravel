<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body, h1, h2, h3, h4, h5, h6, p, ul, li {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #fff;
        }

        .heading {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline-block;
            margin-right: 10px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px; /* Padding for navigation items */
            border-radius: 5px; /* Rounded corners */
            border: 2px solid transparent; /* Transparent border initially */
            transition: all 0.3s; /* Smooth transition effect */
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2); /* Light background color on hover */
            border-color: #fff; /* Border color on hover */
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            border-top: 2px solid #fff;
        }


    </style>
</head>
<body>
    <header>
        <div class="heading">Mphil Blogs</div>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Login/Register</a></li>
                
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        copyright
        @ Mphil blogs
    </footer>
</body>
</html>