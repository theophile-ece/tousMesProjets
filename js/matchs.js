const matchs = [
    {
        equipe1: "Stade Français",
        logo1: "image/stade-francais.webp",
        equipe2: "Section Paloise",
        logo2: "image/pau.webp",
        date: "Samedi 25 avril 2026",
        heure: "14h30",
        lieu: "Stade Jean Bouin"
    },
    {
        equipe1: "LOU Rugby",
        logo1: "image/lou.webp",
        equipe2: "Castres",
        logo2: "image/castres.webp",
        date: "Samedi 25 avril 2026",
        heure: "16h35",
        lieu: "Matmut Stadium Gerland"
    },
    {
        equipe1: "RC Toulon",
        logo1: "image/toulon.webp",
        equipe2: "Bayonne",
        logo2: "image/bayonne.webp",
        date: "Samedi 25 avril 2026",
        heure: "16h35",
        lieu: "Stade Mayol"
    },
    {
        equipe1: "Bordeaux-Bègles",
        logo1: "image/ubb.webp",
        equipe2: "Montpellier",
        logo2: "image/montpellier.webp",
        date: "Samedi 25 avril 2026",
        heure: "21h00",
        lieu: "Bordeaux"
    },
    {
        equipe1: "Stade Toulousain",
        logo1: "image/toulouse.webp",
        equipe2: "ASM Clermont",
        logo2: "image/clermont.webp",
        date: "Dimanche 26 avril 2026",
        heure: "21h05",
        lieu: "Toulouse"
    },
    {
        equipe1: "US Montauban",
        logo1: "image/montauban.webp",
        equipe2: "Racing 92",
        logo2: "image/racing92.webp",
        date: "Samedi 25 avril 2026",
        heure: "16h35",
        lieu: "Montauban"
    },
    {
        equipe1: "USA Perpignan",
        logo1: "image/perpignan.webp",
        equipe2: "Stade Rochelais",
        logo2: "image/larochelle.webp",
        date: "Samedi 25 avril 2026",
        heure: "16h35",
        lieu: "Perpignan"
    }
];

const conteneurMatchs = document.getElementById("matchs-container");
const champRechercheMatch = document.getElementById("search-match");

function afficherMatchs(listeMatchs) {
    conteneurMatchs.innerHTML = "";

    if (listeMatchs.length === 0) {
        conteneurMatchs.innerHTML = "<p class='aucun-match'>Aucun match ne correspond à votre recherche.</p>";
        return;
    }

    listeMatchs.forEach(function (match) {
        const carte = document.createElement("article");
        carte.className = "match-card";

        carte.innerHTML = `
            <div class="teams">
                <div class="team">
                    <img src="${match.logo1}" alt="${match.equipe1}">
                    <p>${match.equipe1}</p>
                </div>

                <div class="vs">VS</div>

                <div class="team">
                    <img src="${match.logo2}" alt="${match.equipe2}">
                    <p>${match.equipe2}</p>
                </div>
            </div>

            <div class="match-info">
                <p><strong>Date :</strong> ${match.date}</p>
                <p><strong>Heure :</strong> ${match.heure}</p>
                <p><strong>Lieu :</strong> ${match.lieu}</p>
            </div>
        `;

        conteneurMatchs.appendChild(carte);
    });
}

champRechercheMatch.addEventListener("input", function () {
    const recherche = champRechercheMatch.value.toLowerCase();

    const resultats = matchs.filter(function (match) {
        return match.equipe1.toLowerCase().includes(recherche) ||
            match.equipe2.toLowerCase().includes(recherche) ||
            match.lieu.toLowerCase().includes(recherche);
    });

    afficherMatchs(resultats);
});

afficherMatchs(matchs);