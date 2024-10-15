import math
import unittest

# Funciones de cálculo
def calcular_media(datos):
    if not datos:
        return None
    return sum(datos) / len(datos)

def calcular_desviacion_estandar(datos):
    if not datos:
        return None 
    media = calcular_media(datos)  # Calcula la media de los datos
    varianza = sum((x - media) ** 2 for x in datos) / (len(datos) - 1) if len(datos) > 1 else 0
    return math.sqrt(varianza)  # Devuelve la raíz cuadrada de la varianza

#Casos de prueba
class PruebasEstadisticas(unittest.TestCase):
    
    def test_lista_vacia(self):
        datos = []
        self.assertIsNone(calcular_media(datos))
        self.assertIsNone(calcular_desviacion_estandar(datos))

    def test_lista_un_elemento(self):
        datos = [5]
        self.assertEqual(calcular_media(datos), 5)
        self.assertEqual(calcular_desviacion_estandar(datos), 0)

    def test_lista_multiples_elementos(self):
        datos = [1, 2, 3, 4, 5]
        media = calcular_media(datos)
        desviacion_estandar = calcular_desviacion_estandar(datos)
        
        print(f"Media: {media}, Desviación Estándar: {desviacion_estandar}")

        self.assertAlmostEqual(desviacion_estandar, 2.5811, places=4)

if _name_ == '_main_':
    unittest.main(argv=[''], exit=False)

