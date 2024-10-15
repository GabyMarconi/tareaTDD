import Foundation

func calcularMedia(_ datos: [Double]) -> Double? {
    guard !datos.isEmpty else { return nil }
    return datos.reduce(0, +) / Double(datos.count)
}

func calcularDesviacionEstandar(_ datos: [Double]) -> Double? {
    guard !datos.isEmpty else { return nil }
    let media = calcularMedia(datos)!
    let varianza = datos.reduce(0) { $0 + pow($1 - media, 2) } / Double(datos.count - 1)
    return sqrt(varianza)
}

// Pruebas
let datosVacios: [Double] = []
print("Media: \(calcularMedia(datosVacios) as Any)") // nil
print("Desviación Estándar: \(calcularDesviacionEstandar(datosVacios) as Any)") // nil

let datosUnElemento = [5.0]
print("Media: \(calcularMedia(datosUnElemento)!)") // 5
print("Desviación Estándar: \(calcularDesviacionEstandar(datosUnElemento)!)") // 0

let datosMultiples = [1.0, 2.0, 3.0, 4.0, 5.0]
print("Media: \(calcularMedia(datosMultiples)!)") // 3
print("Desviación Estándar: \(calcularDesviacionEstandar(datosMultiples)!)") // 1.4142135623730951
