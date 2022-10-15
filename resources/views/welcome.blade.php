<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TRUST'IN</title>
        <meta name="viewport" content="width=device-width" />
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .Trustin-home__menu {
                Display: flex;
                background-color: #000;
            }
            .Trustin-home-menu__Logo-div{
                width: 50%;
                padding-left: 10%;
            }
            .Trustin-home-menu__Logo{
                color:white;
            }
            .Trustin-home-menu-liste__menu{
                display: flex;
                color:white;
                margin-top: 30px;
                width: 50%;
                padding-right: 10%
            }
            li {
                margin-left : 30px
            }
            .Trustin-home-menu-Logo__span{
                font-size: 25px;
            }
            .Trustin-home-banner__div{
                display:flex;
                height: 90vh;
            }
            .Trustin-home-banner__1banner{
                width: 50%;
                margin-top: 1px;
                background-color: black;
            }
            .Trustin-home-banner__2banner{
                width: 50%;
                background-color: green;
            }
            .Trustin-home-banner1-div1{
                display: flex;
                position: absolute;
                width: 50%;
                height: 40%;
                bottom: 0;
            }
            .Trustin-home-banner1-div1__image1{
                width: 50%;
                background-color: black;
            }
            .Trustin-home-banner1-divs23__images{
                width: 50%;
            }
            .Trustin-home-banner1-divs2__images{
                background-color:orange;
                height: 50%;
            }
            .Trustin-home-banner1-divs3__images{
                height: 50%;
            }
            .Trustin-home-banner1-divs3__images{
                background-color:pink
            }
            .Trustin-home-banner1__button{
                background-color: black;
                color: #FFF;
                padding: 10px;
                border-width: thin;
            }
            .Trustin-home-banner1__div2{
                margin: 105px;
            }
            .Trustin-home-banner1__title{
                font-size: xx-large;
                color: #fff;
            }
            .Trustin-home-banner1__paragraph{
                font-size: large;
                color: #fff;
            }
            .Trustin-home-banner1-div1-image1__img1{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .Trustin-home-banner1-div1-image1__img2{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .Trustin-home-banner1-div1-image1__img3{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .Trustin-home-banner1-div1-image1__img4{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            .trustin-home-body-toggle__open{
                    color: #fff
            }
            .trustin-home-body-toggle__close{
                color: #fff
            }
            ol {
                list-style-type: none;
            }
            .Trustin-home-menu-Logo__span{
                z-index: 20;
            }
            .trustin-home-body__toggle{
                display: none; 
            }
            /*--------[ SECTION2 ]--------*/
            .Section2-div{
                background-color:#000;
                height: 55vh;
            }
            .Section2__title{
                color: #fff;
                text-align: center;
                margin: 0;
                font-size: 75px;
                padding: 10px;
            }
            .Section2-big__title{
                color: #fff;
                text-align: center;
                margin: 0;
                font-size: 137px;
            }
            .Section2__description{
                color: #fff;
                margin: 0px;
                text-align: center;
            }
            .Section2-images{
                width: 100%;
                display: flex;
            }
            .Section2-images_1{
                width: 25%;
            }
            .Section2-images_2{
                width: 25%;
            }
            .Section2-images_3{
                width: 25%;
            }
            .Section2-images_4{
                width: 25%;
            }
            @media only screen and (max-width: 1440px){
            .Section2{
                background-color:#000;
                height: 50vh;
            }
            .Section2-big__title {
                color: #fff;
                text-align: center;
                margin: 0;
                font-size: 97px;
            }
            }
            /*---------[ MEDIA QUERIES ]---------*/
            @media only screen and (max-width: 768px){
                .trustin-home-body__toggle{
                    display: block;
                    cursor: pointer;
                    position: relative;
                    z-index: 20;
                }
                .Trustin-home-banner1__div2 {
                    margin: 43px;
                }
                .Trustin-home-banner1-div1 {
                    bottom: -1.7%;
                }
                .trustin-home-body-toggle__open {
                    display: block;
                    font-size: 2rem;
                    float: right;
                    margin-right: 23%;
                }
                .trustin-home-body-toggle__div{
                    width: 50%;
                }
                .trustin-home-body-toggle__close {
                    float: right;
                    margin-right: 23%;
                    display: none;
                    font-size: 2rem;
                }
                .open .trustin-home-body-toggle__open{
                    display: none;
                }
                .open .trustin-home-body-toggle__close{
                    display: block;
                }
                .Trustin-home-menu__Logo-div{
                    width: 50%;
                    padding-left: 10%;
                }
                .Trustin-home-menu__Logo-div{
                    z-index: 20;
                }
                .Trustin-home-menu-liste__menu {
                    position: absolute;
                    top: 7%;
                    left: 0px;
                    width: 50%;
                    height: 90vh;
                    background: #000;
                    flex-direction: column;
                    padding: 2rem;
                    justify-content: space-around;
                    transform: translateX(-100%);
                    transition: transform 1s;
                    z-index: 20;
                }
                .open .Trustin-home-menu-liste__menu {
                    transform: translateX(0);
                }

                /*------[SECTION2]-----*/
                .Section2-big__title {
                    color: #fff;
                    text-align: center;
                    margin: 0;
                    font-size: 68px;
                }
                .Section2__title {
                    color: #fff;
                    text-align: center;
                    margin: 0;
                    font-size: 45px;
                    padding: 10px;
                }
                .Section2{
                    background-color: #000;
                    height: 25vh;
                }
                .Section2-div{
                    height: 40vh;
                }
            }
                @media only screen and (max-width: 425px){
                    .Trustin-home-banner__1banner {
                        width: 100%;
                        margin-top: 1px;
                        background-color: black;
                    }
                    .Trustin-home-banner1-div1 {
                        display: flex;
                        position: relative;
                        width: 100%;
                    }
                    .Trustin-home-banner1__paragraph {
                        font-size: 15px;
                        color: #fff;
                    }
                    .Trustin-home-banner1__title {
                        font-size: 21px;
                        color: #fff;
                    }
                    .Trustin-home-banner1__div2 {
                        margin: 25px;
                    }
                    #flex { 
                        display: flex; 
                        flex-direction: column;
                        }
                        #flex > #Trustin-home-banner-1banner__id1 { order: 2; }
                        #flex > #Trustin-home-banner-1banner__id2 { order: 1; }
                    .Trustin-home-banner1-div1 {
                        height: 40%;
                        bottom: 0;
                    } 
                    /*------[SECTION2]-----*/
                    .Section2__description {
                        color: #fff;
                        margin: 0px;
                        text-align: center;
                        font-size: 10px;
                    }
                    .Section2-big__title {
                        color: #fff;
                        text-align: center;
                        margin: 0;
                        font-size: 29px;
                    }
                    .Section2__title {
                        color: #fff;
                        text-align: center;
                        margin: 0;
                        font-size: 23px;
                        /* padding: 10px; */
                    }
                    .Trustin-home-banner__div{
                        height: auto;
                    }
                    .Trustin-home-banner__2banner {
                        width: 100%;
                        height: 90vh;
                        background-color: green;
                    }
                    .Section2-div{
                        height: 25vh;
                    }
                    .Section2-images{
                        width: 100%;
                        flex-wrap: wrap;
                    }
                    .Section2-images_1{
                        width: 50%;
                    }
                    .Section2-images_2{
                        width: 50%;
                    }
                    .Section2-images_3{
                        width: 50%;
                    }
                    .Section2-images_4{
                        width: 50%;
                    }
                    }
            

       
        </style>
    </head>
    <body class="trustin-home__body">
        <header>
        <nav class="Trustin-home__menu">
            <div class="Trustin-home-menu__Logo-div">
                <h4 class="Trustin-home-menu__Logo"><span class="Trustin-home-menu-Logo__span"><a href="/">TRUST'IN</a></span></h4>
            </div>
            <div class="trustin-home-body-toggle__div">
                <ol class= "trustin-home-body__toggle">
                    <li class="trustin-home-body-toggle__open">=</li>
                    <li class="trustin-home-body-toggle__close">x</li>
                </ol>
                <ol class="Trustin-home-menu-liste__menu">
                    <li><a href="#">Àpropos</a></li>
                    <li><a href="#">Actualités</a></li>
                    <li><a href="#">Influenceurs</a></li>
                    <li><a href="#">Compte</a></li>
                </ol>
            </div>
        </nav>
        </header>
        <div class="sections">
        <section>
            <div class="Trustin-home-banner__div" id="flex">
                <div class="Trustin-home-banner__1banner" id="Trustin-home-banner-1banner__id1">
                    <div class="Trustin-home-banner1__div">
                        <div class="Trustin-home-banner1__div2">
                        <h3 class="Trustin-home-banner1__title">Le lorem ipsum</h3>
                        <p class="Trustin-home-banner1__paragraph"> 
                            Le lorem ipsum est, en imprimerie, 
                            une suite de mots sans signification 
                            utilisée à titre provisoire pour calibrer 
                            une mise en page, le texte définitif venant 
                        </p>
                            <button class="Trustin-home-banner1__button" type="button">Découvrir notre agence</input>
                        </div>
                        <div class="Trustin-home-banner1-div1">
                            <div class="Trustin-home-banner1-div1__image1">
                                <img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Trustin-home-banner1-div1-image1__img1" alt="alt text" >
                            </div>

                            <div class="Trustin-home-banner1-divs23__images">
                                <div class="Trustin-home-banner1-divs2__images">
                                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" class="Trustin-home-banner1-div1-image1__img2" alt="alt text" >
                                </div>
                                <div class="Trustin-home-banner1-divs3__images">
                                    <img src="https://png.pngtree.com/illustrations/20190327/ourmid/pngtree-cure-starry-sky-night-sky-star-png-image_38228.jpg" class="Trustin-home-banner1-div1-image1__img3" alt="alt text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Trustin-home-banner__2banner" id="Trustin-home-banner-1banner__id2">
                    <img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Trustin-home-banner1-div1-image1__img4" alt="alt text" >
                </div>
            </div>
        </section>
        <section class="Section2">
            <div class="Section2-div">
                <h5 class="Section2__title">LE LOREM IPSUM</h5>
                <h1 class="Section2-big__title">LOREM IPSUM WORD</h1>
                <p class="Section2__description">Jellysmack helps creators grow their communities and maximize <br> their earnings across multiple social media platforms.</p>
            </div>
            <div class="Section2-images">
                <div class="Section2-images_1"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Trustin-home-banner1-div1-image1__img4" alt="alt text" ></div>
                <div class="Section2-images_2"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Trustin-home-banner1-div1-image1__img4" alt="alt text" ></div>
                <div class="Section2-images_3"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Trustin-home-banner1-div1-image1__img4" alt="alt text" ></div>
                <div class="Section2-images_4"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Trustin-home-banner1-div1-image1__img4" alt="alt text" ></div>
            </div>
        </section>
        </div>
        <script> 
            let toggle = document.querySelector('.trustin-home-body__toggle');
            let body = document.querySelector('body');
            toggle.addEventListener('click', function() {
                body.classList.toggle('open')
            })
        </script>
    </body>
</html>
