<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My First Post</title>
    <link rel="stylesheet" href="common.css" />
    <link rel="stylesheet" href="first.css" />

    <script src="https://kit.fontawesome.com/32e0425d85.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="logo">
            <img src="https://www.firstinspires.org/sites/all/themes/first/assets/images/2020/FIRST_Horz_Reverse.svg"
                alt="FIRST logo" />
        </div>
        <h1>My First Post</h1>
    </header>

    <div class="container">
        <div class="sidebar left">
            <ul style="list-style-type: none">
                <li>
                    <i class="fa fa-home" style="margin-bottom: 15px" aria-hidden="true"></i>Home
                </li>
                <li>
                    <i class="fa-solid fa-palette" style="margin-bottom: 15px"></i>Favorite color
                </li>
                <l><i class="fa fa-paw" aria-hidden="true"></i>Favorite pet</span></li>
            </ul>
        </div>
        <div class="form-container">
            <form action="second.php" method="post" style="width: 100%; padding-right: 20px; padding-left: 20px">


                <h2>Your post</h2>
                <div class="input-group">
                    <div style="width: 100%; display: flex; justify-content: space-between">
                        <label style="width: 30%; text-align: start" for="name">
                            Full name</label>
                        <input style="width: 60%" type="text" id="name" name="name" value="Jane Doe" />
                    </div>

                    <div style="
                width: 100%;
                display: flex;
                justify-content: space-between;
                align-items: center;
              ">
                        <label style="width: 30%; text-align: start" for="color"><br />Favorite color</label>
                        <select id="color" style="width: 60%; height: 33px" name="color"
                            onchange="changeBackgroundColor()">
                            <option value="Blue">Blue</option>
                            <option value="Pink">Pink</option>
                            <option value="Purple">Purple</option>
                            <option value="Yellow">Yellow</option>

                        </select>
                    </div>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="sidebar right">
            <p>
                Follow us on X and Insragram<br />
                for all the latest good vibes!
            </p>

            <ul style="list-style-type: none">
                <li>
                    <a href="https://www.x.com" target="_blank" style="margin-right: 30px"><i style="font-size: 25px"
                            class="fa fa-x" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com" target="_blank"><i style="font-size: 25px"
                            class="fa fa-instagram fa-x" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>