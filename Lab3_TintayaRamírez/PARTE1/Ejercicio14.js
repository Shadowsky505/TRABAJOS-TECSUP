let miNumero = "18";

let edad = Number(miNumero);
console.log(edad);

if (isNaN (edad)) {
    console.log("No es un número");
} else {
    if (edad >= 18) {
        console.log("Puedes votar");
    } else {
        console.log("Muy joven para votar");
    }
}

if(isNaN(edad)) {
    console.log("No es un número");
}else {
    let resultado = (edad >=18)? "Puedes votar" : "Muy joven para votar";
    console.log(resultado);
}