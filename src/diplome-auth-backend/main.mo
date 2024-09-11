import Hash "mo:base/Hash";
import Principal "mo:base/Principal";
import Text "mo:base/Text";

actor DiplomeAuth {
    type Diplome = {
        nomEtudiant: Text;
        dateObtention: Text;
        universite: Text;
        specialite: Text;
        hashDiplome: Text;
    };

    stable var diplomes : [Diplome] = [];
    // stable var utilisateursAutorises : [(Principal, Bool)] = [];

    public shared(msg) func ajouterDiplome(nomEtudiant: Text, dateObtention: Text, universite: Text, specialite: Text, hashDiplome: Text) : async Bool {
        if (not estAutorise(msg.caller)) {
            return false;
        };
        diplomes := diplomes # [{
            nomEtudiant = nomEtudiant;
            dateObtention = dateObtention;
            universite = universite;
            specialite = specialite;
            hashDiplome = hashDiplome;
        }];
        return true;
    };

    public query func verifierDiplome(nomEtudiant: Text) : async ?Diplome {
        for (d in diplomes.vals()) {
            if (d.nomEtudiant == nomEtudiant) {
                return ?d;
            }
        };
        return null;
    };

    public shared(msg) func autoriserUtilisateur(utilisateur: Principal) : async Bool {
        if (msg.caller != Principal.fromText("admin_id")) {
            return false;
        };
        utilisateursAutorises := utilisateursAutorises # [(utilisateur, true)];
        return true;
    };

    public shared(msg) func retirerAutorisation(utilisateur: Principal) : async Bool {
        if (msg.caller != Principal.fromText("admin_id")) {
            return false;
        };
        utilisateursAutorises := utilisateursAutorises.filter((u) -> u.0 != utilisateur);
        return true;
    };

    func estAutorise(utilisateur: Principal) : Bool {
        for (u in utilisateursAutorises.vals()) {
            if (u.0 == utilisateur and u.1 == true) {
                return true;
            }
        };
        return false;
    };
};
