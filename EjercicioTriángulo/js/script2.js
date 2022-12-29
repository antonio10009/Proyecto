//Declaración de variables.
var a = 0;
var b = 0;
var c = 0;

//Ingreso de datos por pantalla.
a = prompt("Ingrese el primer lado: ");
b = prompt("Ingrese el segundo lado: ");
c = prompt("Ingrese el tercero lado: ");

//Operación.
if(a==b && b==c){ //El Triángulo Equilátero es cuando miden las mismas longitudes de los tres lados.
   document.write("El Triángulo es Equilátero");
}else{
   if(a==b || a==c || b==c){ //El Triángulo Isósceles es cuando miden las mismas longitudes de dos lados, uno es diferente.
   document.write("El Triángulo es Isósceles");
}else{
    if(a!=b || a!=c || b!=c){ //El Triángulo Escaleno es cuando miden todas las longitudes diferentes.
    document.write("El Triángulo es Escaleno");
}else{
    document.write("Los valores ingresados son incorrectos");
    }
  }
}

//Triángulo Equilátero con 1, 1 y 1 con los 3 lados iguales sería esa respuesta.
//Triángulo Isósceles con 1, 1 y 2 con los 2 lados iguales pero uno diferente sería esa respuesta.
//Triángulo Escaleno con 1, 2 y 3 con los 3 lados diferentes sería esa respuesta.