<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form name="myForm">
      <input name="myInput" type="file">
    </form>
</body>
<script>
   var input = myForm.myInput;
var reader = new FileReader;

input.addEventListener('change', onChange);


function onChange(event) {
  var file = event.target.files[0];
  
  reader.readAsText(file);
  
  reader.onload = onLoad;
  
}

function onLoad() {
  var result = reader.result; // Obtienes el texto
  // En tu ejemplo lo obtienes de una petición HTTP
  
  var lineas = result.split('\n');
  
  
  // o lineas.forEach(function(linea){ ... })
  // o lineas.find(function(linea){ return linea == contraseña })
  
  for(var linea of lineas) {
   expresion= /(JOSUE)/;
    console.log('[linea]', linea.match(expresion));
    //if(linea === passwordBuscar) {
      // Encontraste contraseña
    //}
  }
  
}
</script>
</html>