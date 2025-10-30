# 🛒 PDO Grocery Items Activity

**Name:** Ramos, Braulio Luigi P.  
**Section:** UCOS 3-2  

This repository contains my PHP PDO activity for the *Grocery Items Table* project.

## 📂 Files Included:
- `dbconfig.php` – Database connection using PDO  
- `insert.php` – Inserts a new grocery item  
- `delete.php` – Deletes a grocery item by ID  
- `update.php` – Updates price and quantity  
- `fetch_all.php` – Displays all grocery items (using `fetchAll()`)  
- `fetch_one.php` – Displays a single item (using `fetch()`)  
- `table_view.php` – Renders grocery items in an HTML table with design  
- `grocery_db.sql` – SQL schema, records, and complex queries

## 🧠 SQL Queries Included:
- Filtering by category  
- Sorting by price (highest to lowest)  
- Search using `LIKE`  
- Aggregate function (average price per category)  
- Total stock value computation  

## 🧾 How to Run
1. Place all files inside `C:\xampp\htdocs\pdo_exam`
2. Start Apache and MySQL in XAMPP
3. Import `grocery_db.sql` into phpMyAdmin
4. Run in your browser:
