<form action="Dm14.php" method="POST">
    <input type="text" name="nome" />
    
    <select name="carros">
        <option value="fusca">Fusca</option>
        <option value="gol">Gol</option>
        <option value="fox">Fox</option>
    </select>

    <select name="carros2[]" multiple>
        <option value="fusca">Fusca</option>
        <option value="gol">Gol</option>
        <option value="fox">Fox</option>
    </select>

    <input type="radio" name="pessoa" value="fisica" checked>Pessoa Física
    <input type="radio" name="pessoa" value="juridica">Pessoa Jurídica

    <input type="checkbox" name="linguagens[]" value="java"> Java
    <input type="checkbox" name="linguagens[]" value="php"> PHP 
    <input type="checkbox" name="linguagens[]" value="c#"> C#

    <input type="submit" value="Enviar" />
</form>