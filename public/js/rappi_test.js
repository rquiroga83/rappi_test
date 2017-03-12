/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Opciones
var opciones = {
  valueNames: [ 'id', 'v_operacion', 'v_valores'],
  item: '<tr><td class="id" style="display:none;"><td class="v_operacion" ></td><td class="v_valores" ></td></tr>'
};

var lista_operaciones = new List('t_lista_operaciones', opciones);

function insertOp(orepation, value){
    
    N = parseInt($( "#label_N" ).text());
    M = parseInt($( "#label_M" ).text());
    
    
    
    
    if (N == 0 || M == 0){
        alert( "Por favor establezca los valores de N y M" );
        return false;
    }
    
    var tableRowCount = $('#t_lista_operaciones tbody tr').length;
    
    
    // Adiciona valores a la tabla
    lista_operaciones.add({
        id: Math.floor(Math.random()*110000),
        v_operacion: orepation ,
        v_valores: value
    });
}

$( "#button_Enviar" ).click(function() {
    var tableRowCount = $('#t_lista_operaciones tbody tr').length;
    
    if(tableRowCount =0 ){
        alert( "La lista de datos esta vacia" );
    }
    
    var operaciones = [];
    
    $('#t_lista_operaciones tbody tr').each( function (i) {
        var v_operacion = $(this).find(".v_operacion").text();
        var v_valor = $(this).find(".v_valores").text();
        
        operaciones.push({
            operacion: v_operacion,
            valor: v_valor
        });  
    });
    
    var operaciones_json = JSON.stringify( operaciones );
    
    
    // peticion ajax grafica
    $.get(`/rappi_test/public/cube_result/${operaciones_json}}` , function(response, state){
        // Adiciona variables de la respuesta
        var data = JSON.stringify(response);
        console.log(data); 
        

    });
    
});


$( "#button_Update" ).click(function() {
    value = $( "#input_Op" ).val();
    if(!validate_op(value)){
        $( "#input_Op" ).val(null);
        return false;
    }

    insertOp('UPDATE', value);
});


$( "#button_Query" ).click(function() {
    value = $( "#input_Op" ).val();
    if(!validate_op(value)){
        $( "#input_Op" ).val(null);
        return false;
    }
    
    
    insertOp('QUERY', value);
});



$( "#button_T" ).click(function() {
    value = $( "#input_T" ).val();
    if(!validate_value(50, value)){
        $( "#input_T" ).val(null);
       return false; 
    } 

    $( "#label_T" ).text(value);
});


$( "#button_N" ).click(function() {
    value = $( "#input_N" ).val();
    if(!validate_value(100, value)){
        value = $( "#input_N" ).val(null);
        return false; 
    } 
    
    $( "#label_N" ).text(value);
});


$( "#button_M" ).click(function() {
    value = $( "#input_M" ).val();
    if(!validate_value(1000, value)){
        value = $( "#input_M" ).val(null);
        return false; 
    }
    
    $( "#label_M" ).text(value);
});


function validate_value(max, value){
    if( isNaN(value) ) {
        alert( "El valor no es numerico o se sale del rango especificado" );
        return false;
    }
    else if (value < 1 || value > max ) {
        alert( "El valor no es numerico o se sale del rango especificado" );
        return false;
    }
    return true;
}


function validate_op(value){

    
    return true;
}