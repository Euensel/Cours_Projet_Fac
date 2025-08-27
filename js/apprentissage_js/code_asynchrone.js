/*
    ->consiste à avoir un traitement parallèle càd pas forcément dans l'ordre

    Promesse:
        pending(attente)
        fulfilled(tenue/honorée/validée)
        rejeted(rejetée/annulée)
*/
/*setTimeout((semeone)=>
{
    console.log("Hello"+semeone)
},2000,"Chuck Norris");


let somePromise=new Promise((resolve,reject)=>
{
    resolve("C'est super!")
});
//consommateur
somePromise.then(value=>
    {
    console.log("Tenue:"+value)
}).catch(reason=>
{

}
)

const p1=Promise.resolve("Promesse 1 tenue");
const p2=Promise.resolve("Promesse 2 tenue");

*/
function checkUrl(url)
{
    return new Promise((resolve,reject)=>
    {
        fetch(url).then(response=>
        {
            if(response.ok)
                resolve("adresse valide:"+url);
            else    
                resolve("Adresse invalide : "+url);
        }).catch(error=>
        {
            resolve("ERREUR :"+url);
        });
        
    });
}
const urls2=[
    "https://jsonplaceholder.typicode.com/post/1",
    "https://jsonplaceholder.typicode.com/post/2",
    "https://jsonplaceholder.typicode.com/post/99999",
    "https://jsonplaceholder.typicode.com/post/3",
];
const allUrls=urls.map(url=>checkUrl(url));
Promise.all(allUrls).then(results=>
{
    results.forEach(result=>
    {
        console.log(result);
    }
    );
}
).catch(error=>
{ 
    console.log("ERREUR : "+error);
}
)


/*
    ASYNCHRONIE EN JAVASCRIPT : CALLBACKS, PROMESSES ET ASYNC/AWAIT
    ----------------------------------------------------------------

    1) Fonction de rappel (Callback) :
       - Une fonction passée en argument à une autre fonction, appelée plus tard, souvent pour gérer un traitement asynchrone.
       - Ex: setTimeout() exécute un callback après un délai.
       - Inconvénient : la multiplication des callbacks imbriqués peut créer le "callback hell", rendant le code difficile à lire.

    Exemple :
    setTimeout(() => {
        console.log("Hello après 2 secondes");
    }, 2000);

    2) Promesses (Promise) :
       - Objet représentant une opération asynchrone qui sera terminée dans le futur.
       - États : pending (en attente), fulfilled (tenue), rejected (rejetée).
       - Méthodes principales :
         .then()   -> exécute du code quand la promesse est tenue.
         .catch()  -> exécute du code si la promesse est rejetée.
         .finally() -> exécute du code dans tous les cas (succès ou échec).
       - Permet de mieux organiser le code que les callbacks imbriqués.

    3) Async/Await :
       - Syntaxe moderne basée sur les promesses.
       - Permet d'écrire du code asynchrone de manière plus lisible, quasi-synchrone.
       - Utilisation avec des fonctions déclarées async et l’opérateur await.

    --------------------------------------------------------------

    Exemple complet avec setTimeout (callback), promesses et fetch (asynchrone) :

*/

// --- Exemple simple avec callback ---
setTimeout(() => {
    console.log("Hello après 2 secondes (callback)");
}, 2000);

// --- Exemple simple avec promesse ---
let somePromise = new Promise((resolve, reject) => {
    setTimeout(() => {
        resolve("Promesse tenue après 2 secondes");
    }, 2000);
});

somePromise
    .then(value => {
        console.log(value);
    })
    .catch(error => {
        console.error("Erreur : ", error);
    });

// --- Exemple fetch avec promesses (fonction checkUrl) ---
function checkUrl(url) {
    return new Promise((resolve, reject) => {
        fetch(url)
            .then(response => {
                if (response.ok) {
                    resolve("Adresse valide : " + url);
                } else {
                    resolve("Adresse invalide : " + url);
                }
            })
            .catch(() => {
                resolve("ERREUR réseau : " + url);
            });
    });
}

const urls = [
    "https://jsonplaceholder.typicode.com/posts/1",
    "https://jsonplaceholder.typicode.com/posts/2",
    "https://jsonplaceholder.typicode.com/posts/99999", // URL invalide
    "https://jsonplaceholder.typicode.com/posts/3",
];

// Transformation des URLs en promesses
const allPromises = urls.map(url => checkUrl(url));

// Utilisation de Promise.all (attend que toutes les promesses soient tenues)
Promise.all(allPromises)
    .then(results => {
        console.log("\nRésultats avec Promise.all :");
        results.forEach(res => console.log(res));
    })
    .catch(error => {
        console.error("Erreur dans Promise.all : ", error);
    });

// Utilisation de Promise.allSettled (attend que toutes soient terminées, fulfilled ou rejected)
Promise.allSettled(allPromises).then(results => {
    console.log("\nRésultats avec Promise.allSettled :");
    results.forEach((result, i) => {
        if (result.status === "fulfilled") {
            console.log(`URL ${i + 1} : ${result.value}`);
        } else {
            console.log(`URL ${i + 1} rejetée : ${result.reason}`);
        }
    });
});

// Utilisation de Promise.race (renvoie la première promesse tenue ou rejetée)
Promise.race(allPromises)
    .then(result => {
        console.log("\nPremier résultat avec Promise.race :");
        console.log(result);
    })
    .catch(error => {
        console.error("Erreur dans Promise.race : ", error);
    });

// --- Exemple Async/Await (plus lisible) ---
async function checkAllUrls(urls) {
    const results = [];
    for (const url of urls) {
        try {
            const response = await fetch(url);
            if (response.ok) {
                results.push("Adresse valide : " + url);
            } else {
                results.push("Adresse invalide : " + url);
            }
        } catch {
            results.push("ERREUR réseau : " + url);
        }
    }
    return results;
}

checkAllUrls(urls).then(results => {
    console.log("\nRésultats avec async/await :");
    results.forEach(res => console.log(res));
});
