@extends('layout.app')
@section('title', 'TRUST\'IN')
@section('news')
<div class="news">
    <div class="news-div1">
        <p class="news-title">Actualités</p>
        <p class="news-text">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour </p>   
    </div>
    <div class="news-div2">
        <form  class="news-div2-form">
            <input type="text" id="search" name="search" placeholder="Rechercher">
            <input type="submit" class="submit-news" value="O">
        </form>
    </div>
</div>
<section class="News-section">
    <div class="News-section_images">
        <div class="News-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img1" ></div>
        <div class="News-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img2" ></div>
        <div class="News-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img3" ></div>
        <div class="News-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img4" ></div>
        <div class="News-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img1" ></div>
        <div class="News-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img2" ></div>
        <div class="News-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img2" ></div>
        <div class="News-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img2" ></div>

        {{-- <div class="Creators-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img4" ></div> --}}
    </div>
</section>
@endsection