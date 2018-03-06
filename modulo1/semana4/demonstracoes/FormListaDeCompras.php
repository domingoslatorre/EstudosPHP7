<form action="Dm14.php" method="post">
    <input type="text" id="item" />
    <button type="button" id="botao">Inserir Item</button>
    <div id="itens">
    </div>
    <input type="submit" value="Enviar Lista" />
</form>


<script>

    var item =  document.getElementById("item");
    var botao = document.getElementById("botao");
    var itens = document.getElementById("itens");

    botao.addEventListener('click', function(event){
        html = "<input type='checkbox' name='itens-selecionados[]' value= '"+ item.value +"'> "+ item.value +" </br>";
        html += "<input type='hidden' name='itens[]' value= '"+ item.value +"' />";
        itens.insertAdjacentHTML('beforeend', html);
        item.value = "";
    });

</script> 