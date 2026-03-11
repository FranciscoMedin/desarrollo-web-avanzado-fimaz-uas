 # Práctica 3 – Sistema de Usuarios con Validaciones y Excepciones

## Descripción del sistema
Se implementó un sistema de usuarios utilizando Programación Orientada a Objetos en PHP.

El sistema incluye una clase base Usuario y dos clases derivadas:
Admin y Alumno.

## Flujo de clases

Usuario
 Admin
 Alumno

Usuario valida el correo electrónico al momento de crear el objeto.

Si el correo no tiene un formato válido se lanza una excepción.

## Manejo de errores

Se utilizaron bloques try/catch para capturar excepciones generadas
cuando se intenta crear un usuario con un correo inválido.

Esto permite mostrar mensajes de error controlados sin detener
la ejecución del programa.
