<h1>Product List</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Status</th>
            <th>Category ID</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['quantity'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['status'] ?></td>
                <td><?= $product['category_id'] ?></td>
                <td>
                    <a href="/products/view/<?= $product['id'] ?>">View</a>
                    <a href="/products/edit/<?= $product['id'] ?>">Edit</a>
                    <a href="/products/delete/<?= $product['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p><a href="/products/create">Add New Product</a></p>