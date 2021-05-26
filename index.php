<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary</title>
    <link rel="stylesheet" href="assets/libs/css/normalize.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
    
    <?php include 'header.php';?>

    <main>
        <section class="home">
            <section class="home__signin-section">
                <div class="signin-section__header">
                    <h2>Start new diary &#128522;</h2>
                </div>

                <div class="signin-section__description">
                    <span>Having an own diary is fun! Just try it!</span>    
                </div>

                <div>
                    <input type="button" value="Let's go!" class="signin-section__button signin-section__start-button">
                </div>
            </section>

            <section class="home__signup-section">
                <div class="signin-section__header">
                    <h2>I have one already &#128524;</h2>
                </div>

                <div class="signin-section__description">
                    <span>Continue to write your dreams and feelings!</span>
                </div>

                <div>
                    <input type="button" value="Let's go!" class="signin-section__button signin-section__start-button">
                </div>
            </section>
        </section>   
    </main>

    <?php include 'footer.php';?>
    
</body>
</html>