const readline = require("readline"),
    fs = require("fs"),
    NOMBRE_ARCHIVO = "lista.txt";



let lector = readline.createInterface({
    input: fs.createReadStream(NOMBRE_ARCHIVO)
});

lector.on("line", linea => {
    console.log("Tenemos una línea con :", linea.length, "caracteres");
    // console.log(linea.slice(23,3));


    function Empresa(tipo_registro, codigo_empresa, fecha_envio) {
        this.tipo_registro = tipo_registro;
        this.codigo_empresa = codigo_empresa;
        this.fecha_envio = fecha_envio;

    }
    p2 = new Empresa(linea.slice(0, 1), linea.slice(1, 13), linea.slice(13, 21));
    
    function Persona(dni, apellido_paterno, apellido_materno, nombres, nombre_cliente, domicilio_cliente, codigo_moneda, total_pago, periodo_pago) {
        this.dni = dni;
        this.apellido_paterno = apellido_paterno;
        this.apellido_materno = apellido_materno;
        this.nombres = nombres;
        this.nombre_cliente = nombre_cliente;
        this.domicilio_cliente = domicilio_cliente;
        this.codigo_moneda = codigo_moneda;
        this.total_pago = total_pago;
        this.periodo_pago = periodo_pago;
    }
    p1 = new Persona(linea.slice(62, 74), linea.slice(74, 124), linea.slice(124, 174), linea.slice(174, 224), linea.slice(224, 373), linea.slice(374, 523), linea.slice(524, 525), linea.slice(525, 539), linea.slice(542, 548));

    console.table(p2);
    console.table(p1);
    // console.log(Persona);
});
