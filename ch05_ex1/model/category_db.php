<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    $categorys = $statement ->fetchAll();
    $statement->closeCursor(); 
    return $categorys;    
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['categoryName'];
    return $category_name;
}
function delete_category($id_category){
    global $db;
    $query = 'DELETE FROM categories WHERE  categoryID= :id_category';
    $statement = $db -> prepare($query);
    $statement ->bindValue(':id_category', $id_category);
    $statement ->execute();
    $statement ->closeCursor();
}
function add_category($name_category){
    global $db;
    $query = 'INSERT INTO categories (categoryName) VALUES (:name_category);';
    $statement = $db -> prepare($query);
    $statement ->bindValue(':name_category', $name_category);
    $statement -> execute();
    $statement -> closeCursor();
}
?>