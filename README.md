# PHP CRUD Application
A simple PHP application for performing CRUD operations (Create, Read, Update, Delete) on a MySQL database using XAMPP and Bootstrap for styling.

## Installation
1. Clone the repository:
   git clone https://github.com/thiru1308/crud-application.git
2. Move the project folder to the XAMPP `htdocs` directory.
3. Start the XAMPP server and ensure that Apache and MySQL services are running.
4. Open a web browser and visit `http://localhost/curd-application` to access the application.
5. Create a new MySQL database:
   - Open `phpMyAdmin` by visiting `http://localhost/phpmyadmin`.
   - Click on the "Databases" tab and enter "crud-db" as the database name.
   - Click on the "Create" button to create the database.
6. Import the SQL file:
   - Open the `crud-db` database.
   - Click on the "Import" tab.
   - Choose the SQL file (`student.sql`) located in the project's root directory.
   - Click on the "Go" button to import the table structure and data.
7. Configure the database connection:
   - Open the `dbconn.php` file
   - Update the `$host`, `$username`, `$password`, and `$database` variables with your MySQL credentials.

## Usage
- Use the web interface to perform CRUD operations on the `student` table in the `crud-db` database.
- Click on the "add new student" button to add a new student record.
- Click on the "Update" button to modify an existing student record.
- Click on the "Delete" button to remove a student record from the database.

## Contributing
Contributions are welcome! If you have any bug reports, feature requests, or improvements, please submit them via GitHub issues or create a pull request.

## Credits
- [PHP](https://www.php.net/)
- [MySQL](https://www.mysql.com/)
- [XAMPP](https://www.apachefriends.org/)
- [Bootstrap](https://getbootstrap.com/)

## Contact Information
For any questions or inquiries, please contact me at tkumaran59@gmail.com.
