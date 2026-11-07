<?php

/**
 * Delete a user
 */

require "../config.php";
require "../common.php";

try {
    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT * FROM users";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

?>

<?php require "templates/header.php"; ?>

<h2>Delete users</h2>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Age</th>
            <th>Location</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $user) : ?>
            <tr>
                <td><?php echo escape($user["id"]); ?></td>
                <td><?php echo escape($user["firstname"]); ?></td>
                <td><?php echo escape($user["lastname"]); ?></td>
                <td><?php echo escape($user["email"]); ?></td>
                <td><?php echo escape($user["age"]); ?></td>
                <td><?php echo escape($user["location"]); ?></td>
                <td><?php echo escape($user["date"]); ?></td>
                <td>
                    <a href="delete-single.php?id=<?php echo escape($user["id"]); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>