 # Práctica 2 – Herencia en PHP

## Objetivo
Implementar herencia en PHP reutilizando atributos y métodos de una clase base.

## Explicación de la herencia aplicada
Se creó una clase base llamada Usuario que contiene los atributos nombre y correo, junto con sus métodos getters y setters.

Posteriormente se creó la clase Admin que extiende la clase Usuario mediante el uso de la palabra clave extends.

Esto permite que Admin herede todos los atributos y métodos de Usuario.

## Diferencias entre Usuario y Admin

Usuario:
- Clase base
- Contiene atributos nombre y correo
- Incluye getters y setters

Admin:
- Hereda de Usuario
- Agrega el método getRol()
- Representa un usuario con privilegios administrativos

## Evidencia de ejecución

Al ejecutar index.php se obtiene:

Nombre: Carlos Lopez  
Correo: admin@email.com  
Rol: Administrador
