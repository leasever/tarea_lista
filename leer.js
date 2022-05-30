const readline = require("readline"),
    fs = require("fs"),
    NOMBRE_ARCHIVO = "lista.txt";

let lector = readline.createInterface({
    input: fs.createReadStream(NOMBRE_ARCHIVO)
});
// import Persona from "./modules/Persona.js"; 

lector.on("line", linea => {

    if (linea.slice(0, 1) === 'C') {
        class Empresa {
            constructor(tipo_registro, codigo_empresa, fecha_envio) {
                this.Tipo_de_registro = tipo_registro;
                this.Código_empresa = codigo_empresa;
                this.Fecha_de_envío = fecha_envio;
            }
        }
        p2 = new Empresa(linea.slice(0, 1), linea.slice(1, 13), linea.slice(13, 21));
        console.table([p2]);
    }

    if (linea.slice(0, 1) === 'D') {
        class Persona {
            constructor(dni, apellido_paterno, apellido_materno, nombres, nombre_cliente, domicilio_cliente, codigo_moneda, total_pago, periodo_pago) {
                this.DNI = dni;
                this.Apellido_paterno = apellido_paterno;
                this.Apellido_materno = apellido_materno;
                this.Nombres = nombres;
                this.Nombre_cliente = nombre_cliente;
                this.Domicilio_cliente = domicilio_cliente;
                this.Código_moneda = codigo_moneda;
                this.Total_pago = total_pago;
                this.Periodo_pago = periodo_pago;
            }
        }
        p1 = new Persona(linea.slice(62, 74).trim(), linea.slice(74, 124).trim(), linea.slice(124, 174).trim(), linea.slice(174, 224).trim(), linea.slice(224, 373).trim(), linea.slice(374, 523).trim(), linea.slice(524, 525).trim(), linea.slice(525, 539).trim(), linea.slice(542, 548).trim());
        console.table(p1);

        // console.table(p1);
    }
});
