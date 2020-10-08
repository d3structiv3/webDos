

const eje2 = new Vue ({
    el: '#content',
    data: {
        titulo: 'Ejercicio 2- Metodos v-model y evento click',
        personas :['Daniel','Jose','Alicia','Laura'],
        setPersona:''
    },
    methods:{
        addPersona (){
            //push es para agregar un elemento al arreglo 
            this.personas.push(this.setPersona);
            //se limpia la caja de texto o el input del formulario
            this.setPersona='';
        }
    }
})