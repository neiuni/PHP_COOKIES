<nav>
    <ul>
        <li><a href="pagina1.php">Pagina 1</a> </li>
        <li><a href="pagina2.php">Pagina 2</a> </li>
        <li><a href="pagina3.php">Pagina 3</a> </li>
    </ul>
    <form method="post" action="" name="form1">
        <select id="estilos" name="estilos">
            <option value="estilo1.css" <?php echo ($estilos == 'estilo1.css') ? 'SELECTED' : ''; ?> >Estilo 1</option>
            <option value="estilo2.css"  <?php echo ($estilos == 'estilo2.css') ? 'SELECTED' : ''; ?>>Estilo 2</option>
            <option value="estilo3.css" <?php echo ($estilos == 'estilo3.css') ? 'SELECTED' : ''; ?>>Estilo 3</option>
            <option value="estilo4.css" <?php echo ($estilos == 'estilo4.css') ? 'SELECTED' : ''; ?>>Estilo 4</option>
        </select> 
        <input type="submit" name="enviar" value="Enviar">
    </form>  
</nav>
