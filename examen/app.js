const examen = new Vue({
    el:'#login',
    data: {
        usuario:'',
        password:'',
        errorMsg:'',
        errorMsgs:[
            'Usuario o contraseña incorrecotos',
            'Credenciales inorrectas',
            'Demasiados intentos',
            'Entradas invalidas',
            'Asegurate de poner los datos correctos'

        ],
        alerta:'', 
        db:[
            {usr:'destructive' ,psw:'12345'},
            {usr:'destructiveDos', psw:'54321'},
            {usr:'destructiveTres', psw:'abcde'},
            {usr:'destructiveCuatro', psw:'98765'},
            {usr:'destructiveCinco', psw:'56789'}
        ],
        
    },
    methods:{
        validar(){
            let i = Math.floor(Math.random() * (5 - 0));    
        
            for (val in this.db) {
                if(this.db[val].usr==this.usuario && this.db[val].psw == this.password){
                    console.log("222"+this.usuario);
                    console.log("444"+this.password);
                    window.location.href = "home.html?usr="+this.usuario;
                }else{
                    this.alerta='alert alert-danger';
                    this.usuario='';
                    this.password='';
                    this.errorMsg=this.errorMsgs[i];
                }
              }
        }

    }

});