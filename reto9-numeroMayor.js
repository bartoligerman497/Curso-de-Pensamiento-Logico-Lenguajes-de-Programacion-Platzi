// mi forma

// enunciado

// El algoritmos/ diagrama de flujo es el siguiente:

// Recibe un array de números (de cualquier cantidad).
// Crea una variable “máxima” que inicie en 0.
// Recorre el array valor por valor.
// Pregunta si el valor de la variable máxima es mayor que el valor del número en la posición actual del array.
// Si la condición anterior es verdadera, asigna el valor de la posición actual del array a la variable máxima.
// Imprime el número más grande del array.

cantidadNumerosArray = parseInt(prompt("Ingrese la cantidad de números que va a tener el array: "));
var numeros = new Array(cantidadNumerosArray);

alert("El array va a ser de " + numeros.length + " de tamaño");
console.log("El array va a ser de " + numeros.length + " de tamaño");

for (let index = 0; index < numeros.length; index++) {
    nuevoNumero = parseInt(prompt("Ingrese el numero en la posición N°" + (index + 1)));
    numeros[index] = nuevoNumero;
    console.log("El número " + nuevoNumero + " está en la la posición N°" + (index + 1));
}

var max = 0;

for (let index = 0; index < numeros.length; index++) {
    if (max < numeros[index]) {
        max = numeros[index];
        console.log("El número máximo es: " + max + " y esta en la posición N°" + index);
    }
}

alert("El número máximo del array es el: " + max);

//Solución profre

//Encontrar el numero mayor de una lista de numeros en un array
let numeros = [5, 10, 15, 60, 8];
let numeroMaximo = 0;
let tamano = numeros.length;

for (let i = 0; i < tamano; i++) {
    if (numeroMaximo < numeros[i]) {
        numeroMaximo = numeros[i];
    }
}

console.log("" + numeroMaximo);

let maximo = Math.max(5, 10, 15, 60, 8);
console.log(maximo);

/////////////////////////

//Reto 11

// Francisco Matta Perdomo

let phase = "Las flores amarillas";
let initial = 4;
let longitud = 6;
word = phase.substr(initial, longitud);
console.log(word);
