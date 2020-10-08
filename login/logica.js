const app = new Vue({
    el:'#login',
    data:{
        usuario:'',
        password:'',
        errorMsg:'',
        alerta:'',
        db:[
            {usr:'destructive' ,psw:'12345'},
            {usr:'destructiveDos', psw:'54321'}
        ]
    },
    methods:{
        validar(){
            for (val in this.db) {
                if(this.db[val].usr==this.usuario && this.db[val].psw == this.password){
                    window.location.href = "https://getbootstrap.com/";
                }else{
                    this.alerta='alert alert-danger';
                    this.usuario='';
                    this.password='';
                    this.errorMsg='Credenciales incorrectas';
                }
              }
            
        }
    }

})