<?php

    function selectAllFromProducts() {
        return "SELECT * FROM products";
    }

    function selectFromCustomer() {
        return "SELECT c.first_name, c.last_name, o.order_count, o.total_spent FROM customers AS c
        JOIN customer_totals AS o ON c.id = o.customer_id";
    }

?>