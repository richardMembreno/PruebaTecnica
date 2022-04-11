$(document).ready(function(){
    showElements();
});
//Funcion para mostrar datos de tabla test
function showElements(){
    $.ajax({
        url: '../controller/showTests.php',
        type: 'GET',
        success: function(Result){
            $('#dataTable').html(Result);
        }
    });
}
//Funcion para agregar nuevos datos
$('#AddElement').click(function(){
    var A = document.getElementById('elementA').value;
    var B = document.getElementById('elementB').value;
    $.ajax({
        url: '../controller/addTest.php',
        type: 'POST',
        data: {
            elementA: A,
            elementB: B
        },
        success: function(Result){   
            var info = JSON.parse(Result);
            switch(info.ResultCode){
                case 1:
                    showElements();
                    $("#add_new_element").modal("hide");
                    $("#alertAddDanger").css("display","none");
                    $("#alertAddDanger").empty();
                    document.getElementById('elementA').value = "";
                    document.getElementById('elementB').value = "";
                    $("#alertSuccess").css("display","block");
                    $("#alertSuccess").text("Elemento agregado exitosamente.");
                    break;
                case 2:
                    $("#alertAddDanger").empty();
                    $("#alertAddDanger").css("display","block");
                    for(var i = 0; i < info.Errores.length; i++){
                        $("#alertAddDanger").append("<p>"+info.Errores[i]+"</p>");
                    }                    
                    break;
                case 3:
                    $("#alertAddDanger").empty();
                    $("#alertAddDanger").css("display","block");
                    $("#alertAddDanger").html("<p>"+info.Errores+"</p>");
                    break;
            }
        }
    }); 
    return false;
});
//Funcion para editar en elemento
$("#EditElement").click(function(){
    var data = $("#editTestForm").serialize();
    $.ajax({
        url: '../controller/editTest.php',
        type: 'POST',
        data: data,
        success: function(Result){
            var info = JSON.parse(Result);
            switch(info.ResultCode){
                case 1:
                    showElements();
                    $("#edit_element").modal("hide");
                    $("#alertEditDanger").css("display","none");
                    $("#alertEditDanger").empty();
                    $("#alertSuccess").css("display","block");
                    $("#alertSuccess").text("Elemento modificado exitosamente.");
                    break;
                case 2:
                    $("#alertEditDanger").empty();
                    $("#alertEditDanger").css("display","block");
                    for(var i = 0; i < info.Errores.length; i++){
                        $("#alertEditDanger").append("<p>"+info.Errores[i]+"</p>");
                    }  
                    break;
                case 3:
                    $("#alertEditDanger").empty();
                    $("#alertEditDanger").css("display","block");
                    $("#alertEditDanger").html("<p>"+info.Errores+"</p>");
                    break;
            }
        }
    });
    return false;
});
//Funcion para eliminar un elemento
$("#DeleteElement").click(function(){
    var data = $("#deleteTestForm").serialize();
    $.ajax({
        url: '../controller/deleteTest.php',
        type: 'POST',
        data: data,
        success: function(Result){
            var info = JSON.parse(Result);
            switch(info.ResultCode){
                case 1:
                    showElements();
                    $("#delete_element").modal("hide");
                    $("#alertDanger").css("display","none");
                    $("#alertDanger").empty();
                    $("#alertSuccess").css("display","block");
                    $("#alertSuccess").text("Elemento eliminado exitosamente.");
                    break;
                case 2:
                    $("#alertDanger").empty();
                    $("#alertDanger").css("display","block");
                    $("#alertDanger").html("<p>"+info.Errores+"</p>");
                    break;
                case 3:
                    $("#alertDanger").empty();
                    $("#alertDanger").css("display","block");
                    $("#alertDanger").html("<p>"+info.Errores+"</p>");
                    break;
            }
        }
    });
    return false;
});
//Funcion para mostrar datos de elemento seleccionado para editarlo
function getElement(code){
    $.ajax({
        url: '../controller/getTest.php',
        type: 'POST',
        data: {
            id: code
        },
        success: function(Result){
            var info = JSON.parse(Result); 
            $("#editElementA").val(info.a);
            $("#editElementB").val(info.b);
            $("#edit_element").modal("show");
        }
    });
}
//Funcion para mostrar datos de elemento seleccionado para eliminarlo
function getElementToDelete(code){
    $.ajax({
        url: '../controller/getTest.php',
        type: 'POST',
        data: {
            id: code
        },
        success: function(Result){
            var info = JSON.parse(Result); 
            if(info.resultCode == "Exito"){
                $("#deleteElementA").val(info.a);
                $("#deleteText").text("¿Desea eliminar al elemento "+info.b+"'?");
                $("#delete_element").modal("show");
            }else{
                $("#deleteText").text("Ocurrio un error");
            }
        }
    });
}