//instancia pra empezar a usar Vuejs
const eje1 = new Vue({
    el: '#uno',
    data: {
        //cadena de texto sencilla 
        texto:'Hola mundo con Vue.js',
        //arreglo de elementos 
        marcas: ['Motorola','Sony','Nokia','Samsung'],
        //Aregglo de objetos
        marcaModelo: [
            {marca: 'Motorola', modelo: 'Moto H8'},
            {marca: 'Sony', modelo: 'XPERIA'},
            {marca: 'Nokia', modelo: '5.3'},
            {marca: 'Samsung', modelo: 'Galaxy Note 10'}
        ],
        materias :[
            {asgignatura: 'Español', calificacion:100},
            {asgignatura: 'Matematicas', calificacion:70},
            {asgignatura: 'Historia', calificacion:60},
            {asgignatura: 'Fisica', calificacion:80},
            {asgignatura: 'Artes', calificacion:90}


        ]
    }
})