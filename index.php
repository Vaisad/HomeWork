<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator</title>
  </head>
  <body>
    <h1 style="color: crimson; margin-left: 50px">First Calculator</h1>
    <div class="container" style="margin-top: 25px">
      <form method="post" action="calc.php">
        <input
          name="number1"
          type="text"
          class="form-control"
          style="width: 100px; display: inline"
        />
        <select name="operation">
          <option value="plus">Plus</option>
          <option value="minus">Minus</option>
          <option value="times">Times</option>
          <option value="divided by">Divided By</option>
        </select>
        <input
          name="number2"
          type="text"
          class="form-control"
          style="width: 100px; display: inline"
        />
        <div style="margin-top: 10px; margin-left: 120px">
          <button
            name="submit"
            type="submit"
            value="Calculate"
            style="background: black; color: white"
          >
            Calculate
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
