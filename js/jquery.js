$(document).ready(function(){

$(".btn1").click(function(){
    var mensagem = "<strong>Parabéns, mensagem ativa com sucesso!</strong><br> Você pode clicar quantas vezes quiser para ver este diálogo. Ele dura 4,5 segundos até desaparecer, ou você pode clicar no <strong>x</strong> logo ali no canto.";
    mostraDialogo(mensagem, "success", 4500);
});
$(".btn2").click(function(){
    var mensagem = "<strong>Erro ao enviar mensagem.</strong><br>Na verdade não deu erro, este é um botão que dispara uma mensagem negativa ao usuário, mas está funcionando certinho hahaha. Esta mensagem vai durar sete segundos antes de desaparecer já que o texto é longo.";
    mostraDialogo(mensagem, "danger", 7000);
});
$(".btn3").click(function(){
    var mensagem = "<strong>Mensagem inferior.</strong><br>Esta mensagem é exatamente igual as outras, porém na parte inferior da tela.";
    mostraDialogo(mensagem, "info", 3000, true);
});
$(document).on("click", ".close", function(e){
e.preventDefault();
    $("#message").remove();
});

function mostraDialogo(mensagem, tipo, tempo){
    
    // se houver outro alert desse sendo exibido, cancela essa requisição
    if($("#message").is(":visible")){
        return false;
    }

    // se não setar o tempo, o padrão é 3 segundos
    if(!tempo){
        var tempo = 3000;
    }

    // se não setar o tipo, o padrão é alert-info
    if(!tipo){
        var tipo = "info";
    }

    // monta o css da mensagem para que fique flutuando na frente de todos elementos da página
    var cssMessage = "display: block; position: fixed; top: 0; left: 20%; right: 20%; width: 60%; padding-top: 10px; z-index: 9999";
    var cssInner = "margin: 0 auto; box-shadow: 1px 1px 5px black;";

    // monta o html da mensagem com Bootstrap
    var dialogo = "";
    dialogo += '<div id="message" style="'+cssMessage+'">';
    dialogo += '    <div class="alert alert-'+tipo+' alert-dismissable" style="'+cssInner+'">';
    dialogo += '    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
    dialogo +=          mensagem;
    dialogo += '    </div>';
    dialogo += '</div>';

    // adiciona ao body a mensagem com o efeito de fade
    $("body").append(dialogo);
    $("#message").hide();
    $("#message").fadeIn(200);

    // contador de tempo para a mensagem sumir
    setTimeout(function() {
        $('#message').fadeOut(300, function(){
            $(this).remove();
        });
    }, tempo); // milliseconds

}