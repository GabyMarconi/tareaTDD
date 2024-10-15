def calcular_media(datos)
  return nil if datos.empty?
  datos.sum / datos.length.to_f
end

def calcular_desviacion_estandar(datos)
  return nil if datos.empty?
  media = calcular_media(datos)
  varianza = datos.reduce(0) { |suma, x| suma + (x - media) ** 2 } / (datos.length - 1)
  Math.sqrt(varianza)
end

# Pruebas
datos_vacios = []
puts "Media: #{calcular_media(datos_vacios).inspect}" # nil
puts "Desviación Estándar: #{calcular_desviacion_estandar(datos_vacios).inspect}" # nil

datos_un_elemento = [5]
puts "Media: #{calcular_media(datos_un_elemento)}" # 5
puts "Desviación Estándar: #{calcular_desviacion_estandar(datos_un_elemento)}" # 0

datos_multiples = [1, 2, 3, 4, 5]
puts "Media: #{calcular_media(datos_multiples)}" # 3
puts "Desviación Estándar: #{calcular_desviacion_estandar(datos_multiples)}" # 1.4142135623730951
