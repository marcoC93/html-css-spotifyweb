<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Spotify - web</title>

        <main>
                <!-- Sezione sinistra -->
            <aside class="">
                <div>
                    <!-- Loghi mobile e desktop -->
                    <div id="logo-desktop">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fprowly-uploads.s3.eu-west-1.amazonaws.com%2Fuploads%2F1036%2Fassets%2F56128%2Flarge_Spotify_Logo_RGB_White.png&f=1&nofb=1" alt="logo Spotify">

                    </div>
                    <div id="logo-mobile">
                        <img src="https://www.oxbowriverstage.com/wp-content/uploads/2020/03/spotify-xxl.png" alt="logo Spotify">

                    </div>
                    <!-- Sezione icone -->
                    <ul>
                        <li>
                            <i class="fas fa-search"></i>
                            <span> Cerca </span>
                        </li>
                        <li>
                            <i class="fas fa-home"></i>
                            <span> Home </span>
                        </li>
                        <li>
                            <i class="fas fa-book"></i>
                            <span> Libreria </span>
                        </li>
                    </ul>
                </div>
                    <!-- Sezione playlist -->
                <div id="playlist">
                    <ul>
                        <li>
                            <span>ascoltati di recente</span>
                        </li>
                        <li>
                            <span>draft</span>
                         </li>
                        <li>
                            <span>artista</span>
                        </li>
                        <li>
                            <span>uno playlist </span>
                        </li>
                        <li>
                            <span>playlist</span>
                        </li>
                    </ul>
                </div>
                <div id="user">
                    <i class="far fa-arrow-alt-circle-down"></i>
                    <span> install app </span>
                    <hr>
                    <i class="far fa-user"></i>
                    <span>user</span>
                </div>
            </aside>
                <!-- Fine sezione Aside -->

                <!-- Inizio sezione principale -->
            <section>
                <nav>
                    <div class="container">
                        <i class=" fas fa-bars"></i>
                            <ul >
                                <li> in evidenza</li>
                                <li> podcast </li>
                                <li>classifiche </li>
                                <li> generi e mood </li>
                                <li> nuove uscite </li>
                                <li> scopri </li>
                            </ul>


                    </div>


                    <div id="playlist">

                        <div class="container">
                            <div class="row-col-12">
                                <h2>creato per te</h2>
                            </div>
                            <div class="flex-container">
                                <div class="row">
                                    @foreach ($albums as $album)
                                        <div class="col-md-3">

                                            <div class="rank">
                                                3
                                            </div>
                                            <div class="front">
                                                <img src="{{$album['src']}}" alt="">
                                                <h3 class="name"> {{$album['artist']}} </h3>
                                                <div class="stats">
                                                    <div class="viewers">
                                                        <div class="streamers">
                                                            <h3>{{$album['name']}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="streaming-info">
                                                    <p class="game-stat">55k <span>whatching</span></p>
                                                    <p class="game-stat">25k<span>streams</span></p>
                                                    <button type="button" class="btn" name="button">See more streams</button>
                                                    <div class="streamers">
                                                        <div class="streamer">
                                                            <div class="icon">
                                                                <img src="" alt="">
                                                            </div>
                                                            <p class="name">gamer 1</p>
                                                            <p class="p-number">
                                                                36k
                                                            </p>
                                                        </div>
                                                        <div class="streamer">
                                                            <div class="icon">
                                                                <img src="" alt="">
                                                            </div>
                                                            <p class="name">ganer 2</p>
                                                            <p class="p-number">
                                                                11k
                                                            </p>
                                                        </div>
                                                        <div class="streamer">
                                                            <div class="icon">
                                                                <img src="" alt="">
                                                            </div>
                                                            <p class="name">gamer 3</p>
                                                            <p class="p-number">
                                                                40k
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="background">

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="made4you">

                        <div class="container">
                            <h2>creato per te</h2>
                            <div class="flex-container">

                                <div class="artist">
                                    <img src="esempio.jpg" alt="">
                                </div>
                                <div class="artist">
                                    <img src="esempio.jpg" alt="">
                                </div>
                                <div class="album">
                                    <img src="esempio.jpg" alt="">
                                </div>
                                <div class="artist">
                                    <img src="esempio.jpg" alt="">
                                </div>
                                <div class="album">
                                    <img src="esempio.jpg" alt="">
                                </div>
                                <div class="artist">
                                    <img src="esempio.jpg" alt="">
                                </div>
                                <div class="album">
                                    <img src="esempio.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </nav>
            </section>
        </main>
        <footer>
            <div class="album-playing">
                <div class="">
                    <img src="esempio.jpg" alt="">
                </div>
                <div class="track">
                    <p>nome traccia </p>
                    <p> artista </p>
                </div>
            </div>
            <div class="player">
                <div class="player-top">
                    <i class="fas fa-random"></i>
                    <i class="fas fa-step-backward"></i>
                    <i class="far fa-pause-circle"></i>
                    <i class="fas fa-step-forward"></i>
                    <i class="fas fa-redo"></i>
                </div>
                <div class="player-bottom">

                    <input type="range" id="volume" name="vol" min="0" max="50">
                    <span></span>
                </div>
            </div>
            <div class="volume">

                <i class="fas fa-list"></i>
                <i class="fas fa-desktop"></i>
                <i class="fas fa-volume-up"></i>
                <input type="range" id="volume" name="vol" min="0" max="50">
            </div>

        </footer>
    </body>
</html>
