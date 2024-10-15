import java.util.Arrays;

public class Estadisticas {

    public static Double calcularMedia(double[] datos) {
        if (datos.length == 0) return null;
        return Arrays.stream(datos).average().orElse(0);
    }

    public static Double calcularDesviacionEstandar(double[] datos) {
        if (datos.length == 0) return null;
        double media = calcularMedia(datos);
        double varianza = Arrays.stream(datos)
                .map(x -> Math.pow(x - media, 2))
                .sum() / (datos.length - 1);
        return Math.sqrt(varianza);
    }

    public static void main(String[] args) {
        // Pruebas
        double[] datosVacios = {};
        System.out.println("Media: " + calcularMedia(datosVacios)); // null
        System.out.println("Desviación Estándar: " + calcularDesviacionEstandar(datosVacios)); // null

        double[] datosUnElemento = {5};
        System.out.println("Media: " + calcularMedia(datosUnElemento)); // 5.0
        System.out.println("Desviación Estándar: " + calcularDesviacionEstandar(datosUnElemento)); // 0.0

        double[] datosMultiples = {1, 2, 3, 4, 5};
        System.out.println("Media: " + calcularMedia(datosMultiples)); // 3.0
        System.out.println("Desviación Estándar: " + calcularDesviacionEstandar(datosMultiples)); // 1.4142135623730951
    }
}
