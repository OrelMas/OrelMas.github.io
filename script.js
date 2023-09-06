// let et var permet de dire que je crée une
// variable d'un nom souhaité
let Autruche = "Animal"
var Perche = "Poisson"
// J'ai défini des variables de type "string"
// (Chaîne de caractère)
let NombreStagiaire = 10
// J'ai défini une variable avec le nombreStagiaire
// Et je lui ai donné comme donnée le nombre 10
// J'ai défini une variable de type "int" (nombre entier)
var heure = 14.31
// J'ai créé une variable avec le nom heure
// Je lui ai donné la donnée 14.31
// J'ai défini une variable de type "float/double"
// (Nombre à vrgule)
let Allumer = true
// J'ai crée une variable avec le nom Allumer 
// Et comme valeur je lui ai donné true (Vraie)
// Le type de cette variable est "Boolean "(true/false)
var Ventilo = null
// J'ai créé une variable avec le nom Ventilo
// Avec comme valeur "null" qui est Rien du tout
// Le type est null
let Phrase = "J'aime l' " + Autruche + " mais pas les " + Perche
// J'aime l'Animal mais pas les Poisson
// J'ai concaténer les chaînes de caractères 
// et les variables
var calcul = heure + NombreStagiaire // / * + - %
// 14.31 + 10
console.log(Phrase)
console.log(calcul)
// Permet d'afficher une valeur donnée dans la console du navigateur 

// Je crée une fonction qui se nomme horloge sans
// paramètre 
var temps = 1
function horloge() {
    // Si temps est plus petit ou égal à 10 on éxécute l'addition 
    // et le console.log sinon rien
    if (temps <=10) { // <, >, <=, >=, ==, !=
    temps = temps + 1
    //temps++ // temps--
    //temps += 1 // temps -=
    // J'additionne 1 à ma variable temps
    console.log(temps) 
    }

}



//setInterval(horloge, 1000)


// Je voudrais un compte à rebours qui commence à 50
// et qui fini à 0 et qui descend toutes les 2 secondes

var nombre = 50

function montre () {
    if (nombre > 0) { 
        console.log(nombre)
        nombre = nombre - 1
        // nombre -= 1
        // nombre--
    }
}

setInterval(montre,2000)