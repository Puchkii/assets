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

            <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') 0px 15px no-repeat;">
                <h1>

                    <img alt="Laracasts" src="/images/logo.svg">
                    
                </h1>
            </header>

            <div class="container px-8">

                <main class="flex">
                    <aside class="w-64 pt-8">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-3 text-base">The Brand</h5>
                            <ul class="list-reset">
                                <li class="text-sm pb-4"><router-link class="text-black" active-class="font-bold" to="/" exact>Logo</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" active-class="font-bold" to="/logo-symbol">Logo Symbol</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" active-class="font-bold" to="/colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" active-class="font-bold" to="/typography">Typography</router-link></li>
                            </ul>
     
                        </section>
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-3 text-base">Doodles</h5>
                            <ul class="list-reset">
                                <li class="text-sm pb-4"><router-link class="text-black" active-class="font-bold" to="/mascot">Mascot</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" active-class="font-bold" to="/illustrations">Illustrations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" active-class="font-bold" to="/loaders-and-animations">Loaders and animations</router-link></li>
                                <li class="text-sm pb-4"><router-link class="text-black" active-class="font-bold" to="/wallpapers">Wallpapers</router-link></li>
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
