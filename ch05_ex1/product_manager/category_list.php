<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <?php foreach ($categories as $category) : ?>
                    <tr>
                        <td><?php echo $category['categoryName']; ?></td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="category_id" value="<?php echo $category['categoryID']; ?>">
                                <input type="hidden" name="action" value="delete_category">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <form action="index.php" method="post"
    id="add_category_form">

            <label for="category_name"> Name:</label>
            <input type="hidden" name="action" value="add_cartegory">
            <input type="text" name="name" >
            <input type="submit" value="Add">
        </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>