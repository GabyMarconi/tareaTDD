package main

import (
    "fmt"
    "math"
)

func calcularMedia(datos []float64) *float64 {
    if len(datos) == 0 {
        return nil
    }
    suma := 0.0
    for _, x := range datos {
        suma += x
    }
    media := suma / float64(len(datos))
    return &media
}

func calcularDesviacionEstandar(datos []float64) *float64 {
    if len(datos) == 0 {
        return nil
    }
    media := *calcularMedia(datos)
    var suma float64
    for _, x := range datos {
        suma += math.Pow(x-media, 2)
    }
    varianza := suma / float64(len(datos)-1)
    desviacion := math.Sqrt(varianza)
    return &desviacion
}

func main() {
    // Pruebas
    datosVacios := []float64{}
    fmt.Println("Media:", calcularMedia(datosVacios)) // nil
    fmt.Println("Desviación Estándar:", calcularDesviacionEstandar(datosVacios)) // nil

    datosUnElemento := []float64{5}
    fmt.Println("Media:", calcularMedia(datosUnElemento)) // 5
    fmt.Println("Desviación Estándar:", calcularDesviacionEstandar(datosUnElemento)) // 0

    datosMultiples := []float64{1, 2, 3, 4, 5}
    fmt.Println("Media:", calcularMedia(datosMultiples)) // 3
    fmt.Println("Desviación Estándar:", calcularDesviacionEstandar(datosMultiples)) // 1.4142135623730951
}
