<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/save" method="post">
    <label>UPC</label>
            <input type="hidden" name="id">
            <input type="text" name="code" placeholder="code">
            <br>
            <label>Name</label>
            <input type="text" name="ProductName" placeholder="name" >
            <br>
            <label>Quantity</label>
            <input type="text" name="ProductDescription" placeholder="description" >
            <br>
            <label>Category</label>
            <input type="text" name="ProductCategory" placeholder="category" >
            <br>
            <label>Quantity</label>
            <input type="text" name="ProductQuantity" placeholder="quantity" >
            <br>
            <label>Price</label>
            <input type="text" name="ProductPrice" placeholder="price" >
            <br>
            <input type="submit" value="save">
            </form>
    <h1>PRODUCT TABLE</h1>
    <table border=1>
        <tr>
        <th>Code</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php foreach ($product as $pr):?> 
            <tr>
            <td><?= $pr['code'] ?></td>
                <td><?= $pr['ProductName'] ?></td>
                <td><?= $pr['ProductDescription'] ?></td>
                <td><?= $pr['ProductCategory'] ?></td>
                <td><?= $pr['ProductQuantity'] ?></td>
                <td><?= $pr['ProductPrice'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">delete</a> || <a href="/edit/<?= $pr['id'] ?>">edit</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h1>UL PRODUCTS</h1>
    <?php foreach ($product as $pr):?> 
            <ul>
                <li><?= $pr['ProductName'] ?></li>
    </ul>
        <?php endforeach; ?>
        
</body>
</html>