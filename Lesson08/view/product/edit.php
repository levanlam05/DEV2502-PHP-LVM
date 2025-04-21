<h1>Edit Product</h1>
<form action="/products/update/<?= $product['id'] ?>" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $product['name'] ?>" required>
    </div>
    <div>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="<?= $product['quantity'] ?>" required>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" step="0.01" id="price" name="price" value="<?= $product['price'] ?>" required>
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="text" id="image" name="image" value="<?= $product['image'] ?>">
    </div>
    <div>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" value="<?= $product['status'] ?>">
    </div>
    <div>
        <label for="category_id">Category ID:</label>
        <input type="number" id="category_id" name="category_id" value="<?= $product['category_id'] ?>" required>
    </div>
    <button type="submit">Update Product</button>
</form>
<p><a href="/products">Back to Product List</a></p>