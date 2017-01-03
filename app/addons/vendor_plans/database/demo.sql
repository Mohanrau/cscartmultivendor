REPLACE INTO `?:vendor_plans` (`plan_id`, `status`, `position`, `is_default`, `price`, `periodicity`, `commission`, `products_limit`, `revenue_limit`, `vendor_store`)
VALUES
    (1, 'A', 20, 0, 10.00, 'month', 4.00, 50, 500.00, 0),
    (2, 'A', 30, 1, 20.00, 'month', 2.00, 200, 1000.00, 1),
    (3, 'A', 40, 0, 70.00, 'month', 0.00, 0, 0.00, 1),
    (4, 'H', 100, 0, 25.00, 'month', 1.50, 500, 2000.00, 1),
    (9, 'A', 10, 0, 0.00, 'month', 8.00, 20, 150.00, 0);

UPDATE ?:companies SET plan_id = 2;
UPDATE ?:companies SET plan_id = 3 WHERE company_id = 1;
