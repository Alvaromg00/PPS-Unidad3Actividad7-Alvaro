# Explotación y Mitigación de Remote Code Execution (RCE)

De forma sencilla el ***RCE*** es una vulnerabilidad en la que un servicio web permite hacer una inyección de lenguaje scripting básico, permitiendo a un atacante ejecutar comando sobre el servidor que contiene en servicio web.

El resultado de esos comandos se muestra en la misma página de forma dinámica.

Algunas de las consecuencias que tiene el *RCE*:

+ Acceso a información sensible (usuarios, archivos, configuración).
+ Ejecución de comandos maliciosos (descarga y ejecución de malware).
+ Escalada de privilegios y control total del sistema.

## Creación de página vulnerable a RCE

Vamos a crear una pequeña página llamada: [rce.php](./Recursos/rce.php) con un input que va a recibir una dirección ip y se va a encargar de hacer ping a ella:

![RCE.php](./Imagenes/1.png)

El uso legítimo de la página es recibir una dirección ip y te muestra el resultado del ping:

![ping](./Imagenes/2.png)

Vamos a probar a introducir el comando ***id*** anidado a una dirección ip de la siguiente manera:

```
8.8.8.8 & id
```

Devueve el resultado del ping y ademas devuelve el resultado del comando id:

![ping](./Imagenes/3.png)

