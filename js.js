function calcularMedia(datos) {
    if (datos.length === 0) return null;
    const suma = datos.reduce((acc, val) => acc + val, 0);
    return suma / datos.length;
}

function calcularDesviacionEstandar(datos) {
    if (datos.length === 0) return null;
    const media = calcularMedia(datos);
    const varianza = datos.reduce((acc, val) => acc + Math.pow(val - media, 2), 0) / (datos.length - 1);
    return Math.sqrt(varianza);
}

// Pruebas
const datosVacios = [];
console.log("Media:", calcularMedia(datosVacios)); // null
console.log("Desviación Estándar:", calcularDesviacionEstandar(datosVacios)); // null

const datosUnElemento = [5];
console.log("Media:", calcularMedia(datosUnElemento)); // 5
console.log("Desviación Estándar:", calcularDesviacionEstandar(datosUnElemento)); // 0

const datosMultiples = [1, 2, 3, 4, 5];
console.log("Media:", calcularMedia(datosMultiples)); // 3
console.log("Desviación Estándar:", calcularDesviacionEstandar(datosMultiples)); // 1.4142135623730951
