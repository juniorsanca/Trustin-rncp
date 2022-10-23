@extends('layout.app')
@section('title', 'TRUST\'IN')
@section('creator')
<div class="Creator">
    <div class="Creator-div1">
        <img class="creator-img" src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" />
        <div class="creator-img_div">
            <img class="creator-img_options" src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" />
            <img class="creator-img_options" src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" />
            <img class="creator-img_options" src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" />
        </div>
    </div>
    <div class="Creator-div2">
        <div class="Creator-div2-title__div">
            <p class="Creator-div2__title">NOM DE L'INFLUENCEUR</p>
        </div>
        <div>
            <ol class="Creator-div2-liste_ol">
                <li class="Creator-div2-liste_li"><button class="Creator-div2-liste-li-btn_contact">Contacter</button></li>
                <li class="Creator-div2-liste_li"><button class="Creator-div2-liste-li_btn">Âge</button></li>
                <li class="Creator-div2-liste_li"><button class="Creator-div2-liste-li_btn">Catégorie</button></li>
                <li class="Creator-div2-liste_li"><button class="Creator-div2-liste-li_btn">Ville</button></li>
            </ol>
        </div>
        <div>
            <p class="Creator-div2-about-title">À propos</p>
            <p class="Creator-div2-about-p">Le lorem ipsum est, en imprimerie, une suite de mots sans signification
                utilisée à titre provisoire pour calibrer une mise en page, le texte
                définitif venant remplacer le faux-texte dès qu’il est prêt ou 
                que la mise en page est achevée</p>
        </div>
        <div>
            <ol class="Creator-div2-liste-ol_social-medias">
                <div class="Creator-div2-liste-ol-social-medias__contains">
                    <li class="Creator-div2-liste-li_social-medias">Instagram :</li>
                    <span class="Creator-div2-liste-ol-social-medias__numbers"> 500k </span>
                </div>
                <div class="Creator-div2-liste-ol-social-medias__contains">
                    <li class="Creator-div2-liste-li_social-medias">Tiktok :</li>
                    <span class="Creator-div2-liste-ol-social-medias__numbers"> 1,5M </span>
                </div>
                <div class="Creator-div2-liste-ol-social-medias__contains">
                    <li class="Creator-div2-liste-li_social-medias">Snapchat :</li>
                    <span class="Creator-div2-liste-ol-social-medias__numbers"> 800k </span>
                </div>
            </ol>
        </div>
    </div>
</div>
{{---[PROMOTE]---}}
<section class="Creators-section">
    <div class="Creators-section_images">
        <div class="Creators-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img1" ></div>
        <div class="Creators-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img2" ></div>
        <div class="Creators-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img3" ></div>
        <div class="Creators-section_image"><img src="https://img.lemde.fr/2020/09/29/0/0/1200/1500/1328/0/45/0/40f4038_56266-3189930.jpg" class="Allimg" alt="img4" ></div>
</div>
</section>
@endsection