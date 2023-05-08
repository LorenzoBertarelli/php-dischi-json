<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Dischi_json</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Vue Js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div id="app">
    <!-- HEADER -->
    <header>
        <section class="header">
            <div class="logo">
                <i class="fa-brands fa-spotify"></i>
            </div>
        </section>
    </header>
    <!-- MAIN -->
    <main>
        <section class="main">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card m-4" style="width: 18rem;" v-for="(disco, index) in dischi" :key="index">
                        <img :src="disco.poster" class="card-img-top" alt="...">
                        <div class="card-body" >
                            <h5 class="card-title" >{{ disco.title }}</h5>
                            <p class="card-text">{{disco.author}}</p>
                            <h6>{{disco.year}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
    </main>
</div>

<!-- JS -->
<script src="js/script.js"></script>
</body>
</html>