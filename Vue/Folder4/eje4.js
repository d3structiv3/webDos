const eje4 = new Vue ({
    el:'#eje4',
    data:{
        color: 'bg-primary',
        estado: false,
        btnColor:'btn btn-dark'

    },
    methods:{
        cambiarColor(){
            this.estado = !this.estado
            if(this.estado==true){
                this.btnColor='btn btn-danger';
            }else{
                this.btnColor='btn btn-dark';
            }
        }
    }


})