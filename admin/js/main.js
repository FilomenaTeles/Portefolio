function edit_artigo(){
    document.getElementById('form-id').removeAttribute('readonly')
    document.getElementById('form-titulo').removeAttribute('readonly')
    document.getElementById('form-descricao').removeAttribute('readonly')
    document.getElementById('form-desenvolvimento').removeAttribute('readonly')
    document.getElementById('form-categoria').removeAttribute('disabled')
    document.getElementById('form-visibility').removeAttribute('readonly')

    document.getElementById('btn-editar').style.display='none'
    document.getElementById('btn-voltar').style.display='none'
    document.getElementById('btn-submeter').style.display='inline'
    document.getElementById('btn-cancelar').style.display='inline'


}

function cancelar_artigo(){

    window.location.replace("index.php?pag=artigo")
    


}