#Crear una calculadora con las operaciones basicas

valor1 = 7
valor2 = 4

resultadoS= valor1 + valor2
resultadoR = valor1 - valor2 
resultadoM = valor1 * valor2 
resultadoD = valor1 / valor2 
#Método por formato
print(f'La suma es: {resultadoS}, la resta es: {resultadoR}, la multiplicacion es: {resultadoM}, la Division es: {resultadoD}')
#Método Tradicional
print("La suma es:" ,resultadoS, "la resta es: " ,resultadoR," la multiplicacion es: ",resultadoM, "la Division es: ",resultadoD)


# ¡Hola de nuevo, Platzinauta!

# En este módulo tenemos un nuevo desafío: debes traducir a código Python un algoritmo de extracción de palabras en una oración.

# Para resolverlo debes seguir los siguientes pasos:

# Recibe una oración como string.
# Indica la posición de la letra con la cual empieza nuestro subtexto (la parte que vamos a “recortar”).
# Indicar la posición de la letra con la cual termina nuestro subtexto.
# Imprime el subtexto.


# Marco Saracco

# Hace 4 meses

word = input('Escriba una oración: ')

initial_point = int(
    input(
        'Desde dónde desea cortar el array: "' + word +
        '" iniciando desde el 1, las líneas en blanco también abarcan un espacio: '
    ))

final_pont = int(input('¿Cuál es el punto final de...' + word + '?: '))

print(word[initial_point:final_pont])

# Escriba una oración: Hola como estás
# Desde dónde desea cortar el array: "Hola como estás" iniciando desde el 1, las líneas en blanco también abarcan un espacio: 5
# ¿Cuál es el punto final de...Hola como estás?: 9
# como

# Ejemplo profe

# Extraer un substring con Python
frase = 'las flores amarillas'
inicial = 4
final = 9
palabra = frase[inicial:final]
print (palabra)

