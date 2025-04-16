
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="signup_div ">
            <h1 class="text-center">Register</h1>
            <form class="d-flex flex-column ">
                <input type="text" class="form-contol mb-2" placeholder="enter your Name" />
                <input type="text" class="form-contol mb-2" placeholder="enter your email" />
                <input type="text" class="form-contol mb-2" placeholder="enter your Password" />
                <input type="text" class="form-contol mb-2" placeholder="enter your Confirm Password" />
                <div class="terms d-flex">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree with <a href="terms.php">terms and condition</a> and <a class="privacy.php">privacy policy</a>
                    </label>
                </div>
                <button type="submit">Register </button>
            </form>

        </div>
    </div>
    
</body>
</html>
