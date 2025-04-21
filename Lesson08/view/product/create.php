<h1>Create New Product</h1>
<form action="/products/store" method="post">
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" step="0.01" id="price" name="price" required>
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="text" id="image" name="image">
    </div>
    <div>
        <label for="status">Status:</label>
        <input type="text" id="status" name="status">
    </div>
    <div>
        <label for="category_id">Category ID:</label>
        <input type="number" id="category_id" name="category_id" required>
    </div>
    <button type="submit">Save Product</button>
</form>
<p><a href="/products">Back to Product List</a></p>