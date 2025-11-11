/* "Hay 100 puertas en fila que inicialmente estan cerradas,
vos tenes que hacer 100 pases hacia las puertas,
la primera vez que pasas tenes que visitar cada puerta y la abris (si esta cerrada se abre y si esta abierta se cierra)
la segunda vez que pasas solo visitas 1 de cada 2 puertas y las abris (puerta 2, puerta 4, puerta 6)
y la tercera vez que pasas visitas 1 de cada 3 puertas (puerta 3, puerta 6, puerta 9, etc..)
hasta que solo visites la puerta numero 100.
      
¿En que estado se encuentran las puertas despues del ultimo pase, y cuales estan abiertas y cuales cerradas?"

Las puertas abiertas son impar y las puertas cerradas son par.

Puertas abiertas (impar):

1, 4, 9, 16, 25, 36, 49, 64, 81, 100

Las demas puertas cerradas.

*/

let array = new Array(100).fill(false);
for (let i = 1; i <= 100; i++) {
    for (let j = i - 1; j < 100; j += i) {
        array[j] = !array[j]; 
    }
}

let resultado = array.map((estado, idx) => {
    return {
        puerta: idx + 1,
        estado: estado ? "Abierta" : "Cerrada"
    };
});

console.log(resultado);