gi<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Second Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="second.css">
    <link rel="stylesheet" href="common.css" />

    <script src="https://kit.fontawesome.com/32e0425d85.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <img src="https://www.firstinspires.org/sites/all/themes/first/assets/images/2020/FIRST_Horz_Reverse.svg"
                    alt="FIRST logo">
            </div>
            <h1>Color Blend Theory</h1>
        </header>
        <div class="main-content">
            <div class="sidebar left">
                <ul style="list-style-type: none;">
                    <li><i class="fa fa-home" style="margin-bottom: 15px" aria-hidden="true"></i>Home</li>
                    <li><i class="fa-solid fa-palette" style="margin-bottom: 15px"></i>Favorite color</li>
                    <li><i class="fa fa-paw" aria-hidden="true"></i>Favorite pet</li>
                </ul>
            </div>
            <div class="mid-container">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['name']);
                    $color = htmlspecialchars($_POST['color']);
                    echo "<p>Welcome, <span id='name'>$name</span> The selected color is <span id='color'>$color</span></p>";
                    echo "<p><span id='color'>$color</span> is a beautiful color, you can blend it with another color to produce new color, as example:</p>";
                    switch ($color) {
                        case 'Blue':
                            echo " <li>Blue + Pink = Purple </li>";
                            echo "<li>Blue + Yellow = Green</li>";
                            echo "<li>Blue + Purple = Violet</li>";
                            break;
                        case 'Pink':
                            echo "<li>Pink + Yellow = Orange</li>";
                            echo "<li>Pink + Blue = Purple</li>";
                            echo "<li>Pink + Purple = Light Plum</li>";
                            break;
                        case 'Yellow':
                            echo "<li>Yellow + Blue = Green</li>";
                            echo "<li>Yellow + Pink = Orange</li>";
                            echo "<li>Yellow + Purple = Light Brown</li>";
                            break;
                        case 'Purple':
                            echo "<li>Purple + Blue = Green</li>";
                            echo "<li>Purple + Pink = Green</li>";
                            echo "<li>Purple + Yellow = Light Brown</li>";
                            break;
                        default:
                            echo "<p>Color blending not defined for $color.</p>";
                            break;
                    }
                }
                ?>
            </div>
            <div class="sidebar right">
                <p>Share this with your friends on X and Instagram<br></p>
                <ul style="list-style-type: none;">
                    <li>
                        <a href="https://www.x.com" target="_blank" style="margin-right: 30px;"><i
                                style="font-size: 25px" class="fa fa-x" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i style="font-size: 25px"
                                class="fa fa-instagram fa-x" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>