function agregarEstudiante() {

    var nombre = $("#nombre").val();
    var nota1 = parseInt($("#nota1").val());
    var nota2 = parseInt($("#nota2").val());
    var nota3 = parseInt($("#nota3").val());


    var promedio = (nota1 + nota2 + nota3) / 3;


    var fila = "<tr><td>" + nombre + "</td><td>" + nota1 + "</td><td>" + nota2 + "</td><td>" + nota3 + "</td><td>" + promedio.toFixed(2) + "</td></tr>";


    $("#tabla-estudiantes tbody").append(fila);


    $("#nombre, #nota1, #nota2, #nota3").val('');
}