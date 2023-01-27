<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



</head>

<body>

    <div id="app">
        <header>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100 d-flex align-items-center">
                        <img class="h-50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/800px-Spotify_logo_without_text.svg.png" alt="">
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row justify-content-between">
                    <div v-for="disco,index in dischiList" class="col-3 text-center text-white disco mx-3 my-3">
                        <img class="w-100 p-5" :src=disco.poster :alt=disco.title>
                        <p class="fw-bold"> {{disco.title}} </p>
                        <p> {{disco.author}} </p>
                        <p class="fw-bold"> {{disco.year}} </p>
                    </div>
                </div>
            </div>

            <!-- <div class="wrapper">

            </div> -->


        </main>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="main.js"></script>
</body>

</html>