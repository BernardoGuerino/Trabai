<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
    <style>
        .spinner{
    width: 100px;
    height: 100px;
    border: 5px solid #424242;
    border-top-color: #616161;
    border-radius: 50%;
    animation: rodar 1s 1s infinite;
}
@keyframes rodar {
    to {
        transform: rotate(360deg);
    }
}
    </style>
</head>
<body>
<div class='spinner'></div>
    
</body>
</html>