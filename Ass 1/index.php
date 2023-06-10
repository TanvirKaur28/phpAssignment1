<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PIZZA ORDER </title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
 </head>

<body>
  <header>
    <h1>PIZZA PIZZA EVERYWHERE</h1>
  </header>
  
  <main class="form">
    <section class="row justify-content-center">
      
      <form method="post" class="form">
        <h2>Fill it:</h2>
        <div class="pizzaForm">
          <label for="input1" class="column">Address:</label>
         <div>
            <input type="text" name="Address" class="form" id="input1">
          </div>
        </div>
        <div class="pizzaForm">
          <label for="input2" class="column"> Name:</label>

          <div> 
            <input type="text" name="" class="form" id="input2">
          </div>
        </div>
        <div class="pizzaForm">
          <label for="input3" class="column">Your email:</label>

          <div>
            <input type="email" name="email" class="form" id="input3">
          </div>
        </div>

        <div class="pizzaForm">
          <label for="input4" class="column">PIZZA SIZE:</label>
          <div>
            <select name="Size" class="form">
              <option>Select Pizza size</option>
              <option value="Pan">Pan</option>
              <option value="Medium">Medium</option>
              <option value="Large">Large</option>
              <option value="X-Large">X-Large</option>
            </select>
          </div>

        </div>
        <div class="pizzaForm">
          <label for="input5" class="column">Cheese:</label>
          <div>
            <select name="Cheese" class="form">
              <option>Select amount of cheese</option>
              <option value="No Cheese">No Cheese</option>
              <option value="Normal Cheese">Normal Cheese</option>
              <option value="Extra Cheese">Extra Cheese</option>
            </select>
          </div>
        </div>
    <div class="pizzaForm">
      <label for="toppings" class="column">Toppings:</label>
      <div class="toppings">
        <label for="onions" class="column">Onions</label>
        <input type="checkbox" id="onions" name="toppings[]" value="onions">
        <label for="tomatoes" class="column">Tomatoes</label>
        <input type="checkbox" id="tomatoes" name="toppings[]" value="tomatoes">
        <label for=" pepper" class="column"> peppers</label>
        <input type="checkbox" id=" pepper" name="toppings[]" value=" pepper">
        <label for="pepperoni" class="column">Pepperoni</label>
        <input type="checkbox" id="pepperoni" name="toppings[]" value="pepperoni">
        <label for="olives" class="column">Olives</label>
        <input type="checkbox" id="olives" name="toppings[]" value="olives">
        <label for="mushrooms" class="column">Mushrooms</label>
        <input type="checkbox" id="mushrooms" name="toppings[]" value="mushroom">
      </div>
    </div>
  
<div class="pizzaForm ">
          <input type="submit" class="button">
        </div>
      </form>
      
      <?php
  require_once('database.php');
  if(isset($_POST) & !empty($_POST)){
    $address = $database->sanitize($_POST['address']);
    $name = $database->sanitize($_POST['name']);
    $size = $database->sanitize($_POST['size']);
    $cheese = $database->sanitize($_POST['cheese']);
    $email = $database->sanitize($_POST['email']);
    $toppings = $database->sanitize($_POST['toppings']);

    $result= $database->create($address,$name,$size,$email,$cheese,$toppings);
    if($result){
      echo "<p>Your order is submitted!!</p>";
    }else{
      echo "<p>Your order is not submitted!</p>";
    }
    }
    ?>
    </section>
  </main>
</body>
</html>