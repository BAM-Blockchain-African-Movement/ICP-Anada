// Importation de l'agent-js (nécessaire dans un environnement Node.js ou un projet configuré)
import { Actor, HttpAgent } from "@dfinity/agent";
import { idlFactory as diploma_idl } from "./diploma.did.js";  // IDL du canister
import { Principal } from "@dfinity/principal";

// Adresse du canister (à remplacer par l'ID réel de votre canister)
const canisterId = "your-canister-id";

// Création d'un agent qui interagit avec le smart contract sur l'Internet Computer
const agent = new HttpAgent();
const diplomaActor = Actor.createActor(diploma_idl, {
    agent,
    canisterId,
});

// Gestion de l'ajout d'un diplôme
document.getElementById("ajouterDiplomeForm").addEventListener("submit", async (event) => {
    event.preventDefault();

    // Récupération des valeurs du formulaire
    const id = document.getElementById("id").value;
    const nomEtudiant = document.getElementById("nomEtudiant").value;
    const dateObtention = document.getElementById("dateObtention").value;
    const universite = document.getElementById("universite").value;
    const specialite = document.getElementById("specialite").value;
    const hashDiplome = document.getElementById("hashDiplome").value;

    // Appel au smart contract pour ajouter le diplôme
    try {
        const result = await diplomaActor.ajouterDiplome(id, nomEtudiant, dateObtention, universite, specialite, hashDiplome);
        if (result) {
            alert("Diplôme ajouté avec succès !");
        } else {
            alert("Erreur : Vous n'avez pas l'autorisation.");
        }
    } catch (error) {
        console.error("Erreur lors de l'ajout du diplôme : ", error);
    }
});

// Gestion de la vérification d'un diplôme
document.getElementById("verifierDiplomeForm").addEventListener("submit", async (event) => {
    event.preventDefault();

    // Récupération de l'ID à vérifier
    const id = document.getElementById("verifierId").value;

    // Appel au smart contract pour vérifier le diplôme
    try {
        const diplome = await diplomaActor.verifierDiplome(id);
        const resultatDiplomeDiv = document.getElementById("resultatDiplome");

        if (diplome) {
            resultatDiplomeDiv.innerHTML = `
                <p><strong>Nom :</strong> ${diplome.nomEtudiant}</p>
                <p><strong>Date d'obtention :</strong> ${diplome.dateObtention}</p>
                <p><strong>Université :</strong> ${diplome.universite}</p>
                <p><strong>Spécialité :</strong> ${diplome.specialite}</p>
                <p><strong>Hash :</strong> ${diplome.hashDiplome}</p>
            `;
        } else {
            resultatDiplomeDiv.innerHTML = "<p>Aucun diplôme trouvé pour cet ID.</p>";
        }
    } catch (error) {
        console.error("Erreur lors de la vérification du diplôme : ", error);
    }
});
