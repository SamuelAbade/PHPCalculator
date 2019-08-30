<html>
	<head>
		<meta charset="utf-8"/>
		<title>Calculadora</title>
  </head>
  <body>
      <form action="processar.php" method="post">
        <b>Insira um valor:</b>
        <input type="text" name="v1" size="30">
        <br>
        <b>Insira outro valor:</b>
        <input type="text" name="v2" size="30">
        <br>
        <b>Selecione a operação:</b>
        <select name="op">
          <option value="XX">Selecione</option>
          <option value="adi">Adição</option>
          <option value="sub">Subtração</option>
          <option value="div">Divisão</option>
          <option value="mult">Multiplicação</option>
        </select>
        <br>
        <input type="submit" value="Calcular">
      </form>
  </body>
</html>
