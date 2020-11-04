
const periodico = new Vue({
    el: '#periodico',
    data: {
        fecha: '',
        hora:''
    },
    methods: {
        getFecha() {
            
        }
    },
    created: function () {

        var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
            var f = new Date();
            //alert("Hora: "+f.getHours()+"\nMinuto: "+f.getMinutes()+"\nSegundo: "+f.getSeconds()+"\nMilisegundo: "+fecha.getMilliseconds());
            this.fecha = f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
            var fecha = new Date();
            
            this.hora=fecha.getHours()+"\n: "+fecha.getMinutes();
    }
})