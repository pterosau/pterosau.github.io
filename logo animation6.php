<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Animation</title>
 <style>
/* Base Styles */
body {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #000;
    overflow: hidden;
}

.loader-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    display: flex;
    align-items: center;
    justify-content: center;
}

.loader img {
    width: 10rem; /* Adjust the size as needed */
    height: auto;
    animation: fadeInOut 3s ease-in-out forwards;
}

@keyframes fadeInOut {
    0% {
        opacity: 0;
        transform: scale(1.2);
    }
    50% {
        opacity: 1;
        transform: scale(1);
    }
    100% {
        opacity: 0;
        transform: scale(0.8);
    }
}

.loader-text {
    color: #fff;
    font-size: 4rem; /* Adjust size as needed */
    font-weight: bold;
    margin-bottom: 1rem; /* Space between text and image */
    opacity: 0;
    animation: fadeInOutText 3s ease-in-out forwards;
}

@keyframes fadeInOutText {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    50% {
        opacity: 1;
        transform: translateY(0);
    }
    100% {
        opacity: 0;
        transform: translateY(-20px);
    }
}
</style>
</head>
<body>
    <div class="loader-wrapper">
        <div class="loader">
        <div class="loader-text">Signup</div>
            <img src="assets/camera.jpg" alt="Camera Logo">
        </div>
    </div>
    
    <script>
        // Redirect to the main page after the animation
        setTimeout(() => {
            window.location.href = 'sign.php';
        }, 3000); // Adjust the time to match the duration of your animation
    </script>
</body>
</html>
