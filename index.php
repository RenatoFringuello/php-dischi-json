<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi server</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js"></script>
    <script defer src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script defer src="./js/script.js"></script>
</head>
<body class="bg-dark">
    <div class="container-lg" id="app">
        <ul class="row g-3">
            <li class="col-4 list-group-item p-3" v-for="(disc,i) in discList">
                <div class="card w-100 bg-black text-white text-center" @click="setActiveCard(i)">
                    <img :src="disc.poster" class="card-img-top object-fit-cover" :alt="disc.title">
                    <div class="card-body">
                        <h5 class="card-title">{{disc.title}}</h5>
                        <h6>{{disc.author}}</h6>
                        <h6>{{disc.year}}</h6>
                        <h6>{{disc.genre}}</h6>
                    </div>
                </div>
            </li>
        </ul>
        <div class="wrapper position-absolute d-flex" v-if="activeCard != 0" @click="activeCard = 0">
            <div class="card w-100 bg-black text-white text-center m-auto">
                <img :src="disc.poster" class="card-img-top object-fit-cover" :alt="disc.title">
                <div class="card-body">
                    <h5 class="card-title">{{discList[activeCard].title}}</h5>
                    <h6>{{discList[activeCard].author}}</h6>
                    <h6>{{discList[activeCard].year}}</h6>
                    <h6>{{discList[activeCard].genre}}</h6>
                </div>
            </div>
        </div>
    </div>
</body>
</html>