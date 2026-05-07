let taches = [
    { texte: "Regarder le prochain match du Top 14", terminee: false },
    { texte: "Acheter un ballon de rugby", terminee: true },
    { texte: "Trouver un club près de chez moi", terminee: false }
];

const listeTaches = document.getElementById("task-list");
const champNouvelleTache = document.getElementById("new-task");
const boutonAjouter = document.getElementById("add-task");
const champRecherche = document.getElementById("search-task");
const totalTaches = document.getElementById("total-tasks");
const tachesRestantes = document.getElementById("remaining-tasks");
const tachesTerminees = document.getElementById("done-tasks");

function mettreAJourStatistiques() {
    const total = taches.length;
    const terminees = taches.filter(tache => tache.terminee).length;
    const restantes = total - terminees;

    totalTaches.textContent = total;
    tachesTerminees.textContent = terminees;
    tachesRestantes.textContent = restantes;
}

function afficherTaches(recherche = "") {
    mettreAJourStatistiques();
    listeTaches.innerHTML = "";

    const tachesFiltrees = taches.filter(tache =>
        tache.texte.toLowerCase().includes(recherche.toLowerCase())
    );

    tachesFiltrees.forEach(function (tache) {
        const indiceReel = taches.indexOf(tache);

        const elementListe = document.createElement("li");
        elementListe.className = "task-item";

        const partieGauche = document.createElement("div");
        partieGauche.className = "task-left";

        const caseACocher = document.createElement("input");
        caseACocher.type = "checkbox";
        caseACocher.checked = tache.terminee;

        caseACocher.addEventListener("change", function () {
            taches[indiceReel].terminee = caseACocher.checked;
            afficherTaches(champRecherche.value);
        });

        const texteTache = document.createElement("span");
        texteTache.textContent = tache.texte;

        if (tache.terminee) {
            texteTache.classList.add("done");
        }

        partieGauche.appendChild(caseACocher);
        partieGauche.appendChild(texteTache);

        const boutonSupprimer = document.createElement("button");
        boutonSupprimer.textContent = "Supprimer";
        boutonSupprimer.className = "delete-btn";

        boutonSupprimer.addEventListener("click", function () {
            elementListe.classList.add("task-disappear");

            setTimeout(function () {
                taches.splice(indiceReel, 1);
                afficherTaches(champRecherche.value);
            }, 300);
        });

        elementListe.appendChild(partieGauche);
        elementListe.appendChild(boutonSupprimer);

        listeTaches.appendChild(elementListe);
    });
}

boutonAjouter.addEventListener("click", function () {
    const texteNouvelleTache = champNouvelleTache.value.trim();

    if (texteNouvelleTache !== "") {
        taches.push({ texte: texteNouvelleTache, terminee: false });
        champNouvelleTache.value = "";
        afficherTaches(champRecherche.value);
    }
});

champNouvelleTache.addEventListener("keypress", function (evenement) {
    if (evenement.key === "Enter") {
        boutonAjouter.click();
    }
});

champRecherche.addEventListener("input", function () {
    afficherTaches(champRecherche.value);
});

afficherTaches();