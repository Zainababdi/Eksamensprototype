

<head>

<!-- Her linker den til css filen -->
  <link rel="stylesheet" href="style.css">
</head>
<main>
    <h1>
        Lænestol
    </h1>

<img src="./assets/Lænestol.jpg" alt="">
      <!-- Form -->
      <form action="cart.php" method="POST">
        <label for="amount">
          Antal
        </label>
        <select name="amount" id="">
        <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>

        <input type="submit" value="Tilføj til kurv">
      </form>

</main>