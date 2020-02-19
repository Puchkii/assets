<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts assets</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600i&display=swap" rel="stylesheet">
        <link rel="stylesheet"  href="/css/app.css">

    </head>
    <body class="font-sans">
        <div id="app">

            <div class="container mx-auto">

                <header class="py-6 mb-8">
                    <h1>

                        <img alt="Laracasts" src="/images/logo.svg">
                        
                    </h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-6">The Brand</h5>
                            <ul class="list-reset">
                                <li class="text-sm pb-4"><router-link class="text-black" :to="{name: 'home'}">Logo</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" :to="{ name: 'about'}">Logo Symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" :to="{ name: 'about'}">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" :to="{ name: 'about'}">Typography</router-link></li>
                            </ul>
     
                        </section>
                        <section class="mb-8 ">
                            <h5 class="uppercase font-bold mb-6">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm pb-4"><router-link class="text-black" :to="{name: 'home'}">Mascot</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" :to="{ name: 'about'}">Illustrations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" :to="{ name: 'about'}">Loaders and animations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" :to="{ name: 'about'}">Wallpapers </router-link></li>
                            </ul>
     
                        </section>
                    </aside>

                    <div class="primary">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>

        <script src="/js/app.js "></script>
    </body>
</html>
