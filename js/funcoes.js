// FUNÇÕES JS/jQuery
$(document).ready(function () {

    // CRIAR TÓPICO
    $("#btn_mostrar_esconder_topico").click(MostrarEsconderTopico);
    function MostrarEsconderTopico(){
        $("#form_topico").show(500);
        $("#btn_mostrar_esconder_topico").hide(500);
    }

    // CANCELAR TÓPICO
    $("#btn_cancelar_topico").click(EsconderFormTopico);
    function EsconderFormTopico(){
        $("#form_topico").hide(500);
        $("#btn_mostrar_esconder_topico").show(500);
    }

    // CRIAR TÓPICO
    $("#btn_mostrar_esconder_material").click(MostrarEsconderMaterial);
    function MostrarEsconderMaterial(){
        $("#form_material").show(500);
        $("#btn_mostrar_esconder_material").hide(500);
    }

    // CANCELAR TÓPICO
    $("#btn_cancelar_material").click(EsconderFormMaterial);
    function EsconderFormMaterial(){
        $("#form_material").hide(500);
        $("#btn_mostrar_esconder_material").show(500);
    }


});
