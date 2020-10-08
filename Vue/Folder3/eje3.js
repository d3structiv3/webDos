const eje3 = new Vue ({
    el:'#content',
    data:{
        titulo:'Keyup, v-model y Computed',
        animales: [
            {nombre: 'Oso Pardo', especie: 'Mamimeros',cantidad:2},
            {nombre: 'Aguila', especie: 'Aves',cantidad:5},
            {nombre: 'Cobra', especie: 'Reptiles',cantidad:10},
            {nombre: 'Tiburon', especie: 'Peces',cantidad:9}
        ],
        total:0
    },
    computed:{
        totalAnimales(){
            this.total=0;
            for(animal of this.animales){
                this.total +=animal.cantidad;
            }
            return this.total;
        }
    }
})