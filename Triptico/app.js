const app = new Vue({
    el: '#materia',
    data: {
        titulo: 'Practica Triprico 30-sep-2020',
        datos :['Jose Daniel Ramirez Hinojosa','16090301','J3','Vespertino']
    }
})

const izquierda = new Vue({
    el: '#izq',
    data: {
        titulo: '¿Quienes somos?',
        mision: 'Somos una cadena de restaurantes de comida mexicana referencial en el mercado por sus sabores, atención de calidad y precio justo; que impulsada por el talento de nuestros colaboradores crea una experiencia única hacia nuestros clientes.',
        titulo2: 'Nuestros valores',
        valores: 'Lealtad, trabajo en equipo, integridad, proactividad, simplicidad y pasión por servir.',
    }
})

const centro = new Vue({
    el: '#cen',
    data: {
        titulo: 'Especialidades de la casa',
        
        especialidad: 'Pozole',
        esp: [
            { tipo: 'Pollo' }, 
            { tipo: 'Cabeza de cerdo'},
            { tipo: 'Maciza' },
            { tipo: 'Surtido' }
        ],
        titulo2:'Bebidas',
        cerveza: 'Cerveza',
        cer: [
            { tipo: 'Victoria' },
            { tipo: 'Corona'},
            { tipo: 'Indio' },
            { tipo: 'XX' }
        ]
    }

})

const derecha = new  Vue ({
    el:'#der',
    data: {
        titulo:'tangos',
        direccion: 'Barrio, El Río s/n, 52773 Magdalena Chichicaspa, Méx.',
        telefono:'55 8288 1130'
    }
})