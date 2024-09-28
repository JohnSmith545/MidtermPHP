<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Order</title>
</head>
<body>
    <h1>Menu</h1>
    <table border="1">
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>

    <form action="handleForm.php" method="POST">
        <p>
            <label for="order">Select an order:</label>
            <select name="order" id="order">
                <option value="burger">Burger</option>
                <option value="fries">Fries</option>
                <option value="steak">Steak</option>
            </select>
        </p>

        <p>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required>
        </p>

        <p>
            <label for="cash">Cash:</label>
            <input type="number" name="cash" id="cash" required>
        </p>

        <p><input type="submit" value="Submit"></p>
    </form>
</body>
</html>