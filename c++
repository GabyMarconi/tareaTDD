#include <iostream>
#include <vector>
#include <cmath>
#include <numeric>

double calcularMedia(const std::vector<double>& datos) {
    if (datos.empty()) return NAN;
    return std::accumulate(datos.begin(), datos.end(), 0.0) / datos.size();
}

double calcularDesviacionEstandar(const std::vector<double>& datos) {
    if (datos.empty()) return NAN;
    double media = calcularMedia(datos);
    double varianza = 0;
    for (double x : datos) {
        varianza += std::pow(x - media, 2);
    }
    varianza /= (datos.size() - 1);
    return std::sqrt(varianza);
}

int main() {
    // Pruebas
    std::vector<double> datosVacios;
    std::cout << "Media: " << calcularMedia(datosVacios) << std::endl; // NAN
    std::cout << "Desviación Estándar: " << calcularDesviacionEstandar(datosVacios) << std::endl; // NAN

    std::vector<double> datosUnElemento = {5};
    std::cout << "Media: " << calcularMedia(datosUnElemento) << std::endl; // 5
    std::cout << "Desviación Estándar: " << calcularDesviacionEstandar(datosUnElemento) << std::endl; // 0

    std::vector<double> datosMultiples = {1, 2, 3, 4, 5};
    std::cout << "Media: " << calcularMedia(datosMultiples) << std::endl; // 3
    std::cout << "Desviación Estándar: " << calcularDesviacionEstandar(datosMultiples) << std::endl; // 1.4142135623730951

    return 0;
}
