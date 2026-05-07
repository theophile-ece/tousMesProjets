$(document).ready(function () {

   
    $(".menu-burger").click(function () {
        $(".menu-navigation").stop(true, true).slideToggle(300);
    });


  
    $(".titre-accordeon").click(function () {
        $(this).next(".contenu-accordeon").stop(true, true).slideToggle(300);
    });


   
const imagesCarrousel = [
    "image/presTOP14.webp",
    "image/top14-2.webp",
    "image/top14-3.webp"
];

let imageActuelle = 0;
let timerCarrousel;

function afficherImage() {
    const image = imagesCarrousel[imageActuelle];
    const imageGrande = image.replace(".webp", "grande.webp");

    $(".image-carrousel").fadeOut(200, function () {
        $(this)
            .attr("src", image)
            .fadeIn(200);
    });

    $(".carrousel a").attr("href", imageGrande);

    $(".point").removeClass("actif");
    $(".point").eq(imageActuelle).addClass("actif");
}

function imageSuivante() {
    imageActuelle++;

    if (imageActuelle >= imagesCarrousel.length) {
        imageActuelle = 0;
    }

    afficherImage();
}

function relancerTimer() {
    clearInterval(timerCarrousel);

    timerCarrousel = setInterval(function () {
        imageSuivante();
    }, 3000);
}

$(".suivant").click(function () {
    imageSuivante();
    relancerTimer();
});

$(".precedent").click(function () {
    imageActuelle--;

    if (imageActuelle < 0) {
        imageActuelle = imagesCarrousel.length - 1;
    }

    afficherImage();
    relancerTimer();
});

$(".point").click(function () {
    imageActuelle = $(this).index();
    afficherImage();
    relancerTimer();
});

/* lancement automatique */
relancerTimer();
});