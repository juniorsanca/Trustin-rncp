@extends('layout.app')
@section('title', 'TRUST\'IN')
@section('new')
<div class="new">
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
    <div class="New-section_images">
        <div class="New-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img1" ></div>
        <div class="New-section_text">
            <p>AYA NAKAMURA</p>
            <p>
                Le lorem ipsum est, en imprimerie, une suite de mots sans
                signification utilisée à titre provisoire pour calibrer une
                mise en page, le texte définitif venant remplacer le 
                faux-texte dès qu’il est prêt ou que la mise en page
                est achevée
            </p>
        </div>
</div>
</section>
@endsection