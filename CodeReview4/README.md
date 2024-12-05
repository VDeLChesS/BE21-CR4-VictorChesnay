# BE21-CR4-VictorChesnay

# 📚 Big Library Management System

This project is a **CRUD application** built with **PHP** and **MySQL** for managing a digital library of books and media. The backend leverages PHP and MySQL for data storage and operations, while the frontend is styled using **HTML** and **CSS**.

---

## 📝 About the Project

The **Big Library Management System** allows users to perform Create, Read, Update, and Delete (CRUD) operations on a database of books and media. The project includes the following key features:

- **Add New Media**: Users can add new books, movies, or other media to the database.
- **View Details**: Each item has a dedicated detail page displaying full information.
- **Edit Media**: Update existing records with new information.
- **Delete Media**: Remove items from the database.

The project is powered by the following technologies:

- **Frontend**: HTML and CSS for user interface design.
- **Backend**: PHP for server-side logic.
- **Database**: MySQL for storing media data.

---

## 🎯 Features

- **Dynamic Database Interaction**: Perform CRUD operations on a `list_of_media` table in MySQL.
- **Responsive Frontend**: Clean and minimal interface for interacting with the library system.
- **Detailed Media Information**: Each entry includes fields such as title, author, publisher, publication year, and a short description.
- **Error Handling**: Basic error handling for database connections and invalid operations.

---

## 💾 Database Structure

The MySQL database `be21_cr4_victorchesnay_biglibrary` contains one table: `list_of_media`. 

### `list_of_media` Table Fields:
| Field Name           | Data Type        | Description                                   |
|----------------------|------------------|-----------------------------------------------|
| `id`                | `INT`           | Primary key, auto-incremented.                |
| `title`             | `VARCHAR(50)`   | Title of the media.                           |
| `picture`           | `VARCHAR(255)`  | File path for the media's image.              |
| `ISBN`              | `VARCHAR(50)`   | Unique ISBN identifier.                       |
| `short_description` | `LONGTEXT`      | Short description of the media.               |
| `media_type`        | `VARCHAR(10)`   | Type of media (e.g., Book, DVD).              |
| `author_firstname`  | `VARCHAR(50)`   | First name of the author.                     |
| `author_lastname`   | `VARCHAR(50)`   | Last name of the author.                      |
| `publish_year`      | `VARCHAR(50)`   | Year of publication.                          |
| `publisher`         | `VARCHAR(50)`   | Name of the publisher.                        |
| `publisher_address` | `VARCHAR(50)`   | Address of the publisher (optional).          |

---

## 🚀 How to Run the Project

### 1️⃣ Prerequisites
Ensure you have the following installed:
- **PHP** (Version 7.4 or above recommended)
- **MySQL/MariaDB**
- A local server like **XAMPP**, **MAMP**, or **WAMP**.

### 2️⃣ Installation Steps
1. Clone this repository or download the project files.
2. Import the provided SQL dump file (`be21_cr4_victorchesnay_biglibrary.sql`) into your MySQL database:
   ```bash
   mysql -u root -p be21_cr4_victorchesnay_biglibrary < be21_cr4_victorchesnay_biglibrary.sql

---

## 🖼️ Example Snapshots

### Homepage
The main page displaying all media entries:
![Homepage](./path/to/homepage-screenshot.png)

### Add Media
The form for adding a new media entry:
![Add Media](./path/to/add-media-screenshot.png)

### Media Details
Detailed information about a specific media entry:
![Media Details](./path/to/media-details-screenshot.png)

*(Replace `./path/to/your-screenshot.png` with the actual relative paths to your images.)*

---

## 🧰 Technologies Used

- **PHP**: Backend logic.
- **MySQL**: Database storage and operations.
- **HTML & CSS**: Frontend design.
- **phpMyAdmin**: Database management.

---

## 🔑 Key Notes

- Ensure your MySQL server is running before using the application.
- The database structure and SQL dump file should remain consistent with the codebase.
- The `pictures` directory must contain the media images used in the application.

---

## 📜 License

This project is licensed for educational and personal use. Feel free to adapt it for your own learning purposes.

---

Happy coding! 🚀
