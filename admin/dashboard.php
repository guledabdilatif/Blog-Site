<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard |blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            .dashboard{
                display: flex;
                align-items: center;
                justify-content: space-around;
                gap: 3px;
                
            }
            .dashboard a{
                background: red;
                padding: 10px;
                width: 100px;
                height: 100px;
                border-radius: 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                text-decoration: none;
                color: white;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 18px;
            }
            .website{
                display: flex;
                flex-direction: column;
                gap: 30px;
            }
            h1{
                color: white;
                
            }
            .website a{
                background: white;
                color: black;
                font-weight: bold;
                text-decoration: none;
                padding: 20px;
                border-radius: 20px;
            }
        </style>
    </head>

<body>
    <div class="m-3">
        <div class="row">
            <div class="col-md-3 bg-dark p-2">
             <div class="website">
             <h1>Website</h1>
             <a href="">Add Post</a>
             <a href="">View Posts</a>
             <a href="">View Users</a>
             
             </div>

            </div>
            <div class="col-md-9 p-2">
                <div class="dashboard">
                    <a href="create.php">
                        <div>
                            <p class="text-center">Add Post</p>
                        </div>
                    </a>
                    <a href="index.php">
                        <div>
                            <p>Profile</p>
                        </div>
                    </a>
                    <a href="">
                        <div>
                            <p class="text-center">View Post</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>