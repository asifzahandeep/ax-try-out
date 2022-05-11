<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>try vue</title>

    <script src="https://unpkg.com/vue@3"></script>
</head>
<body>
<div id = app>
<p>The alt attribute should reflect the image content, so users who cannot see the image gets an understanding of what the image contains:</p>
<!--<img v-bind:src="picture" alt="Image">-->
<img src="images/img_lights.jpg" alt="Image">
</div>

<script src="../resources/js/vue.js"></script>
<script>
    const mountedapp = app.mount("#app");
</script>
</body>
</html>