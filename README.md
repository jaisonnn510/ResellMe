# 🎟️ ResellMe – Ticket Exchange Platform

ResellMe is a **web-based ticket exchange system** that allows users to **buy and sell tickets** securely.  
It includes **admin verification**, **QR code-based validation**, and a smooth workflow for transactions.  

---

## 🚀 Features

- 🔑 **User Authentication** – Register & login with secure password hashing.  
- 🎫 **Ticket Management** – Upload, view, and resell tickets.  
- ✅ **Admin Verification** – Tickets must be approved before being listed.  
- 📄 **PDF Ticket Uploads** – Store tickets securely in the system.  
- 📊 **Dashboard** – Manage tickets, transactions, and profiles.  
- 📷 **QR Code Validation** – Every ticket generates a QR code for authenticity.  
- 💳 **Transaction Records** – Track ticket sales and purchases.  

---

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, JavaScript, Bootstrap  
- **Backend:** PHP  
- **Database:** MySQL  
- **Other:** XAMPP (local server), phpMyAdmin, PHP QR Code Library  

---

## ⚙️ Installation & Setup

Follow these steps to run the project locally:

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/jaisonnn510/ResellMe.git
```
### 2️⃣ Setup Database

1.Open phpMyAdmin.

2.Create a new database:
```bash
CREATE DATABASE ticket_exchange;
```
3.Import the SQL file:

  • Inside the repo, locate database_schema.sql.

  • Import it into ticket_exchange.

### 3️⃣ Configure Database Connection

Open database.php and check/update:
```bash
$hostName  = "localhost";
$dbuser = "root";
$dbPassword  = "";
$dbName = "ticket_exchange";
$conn = mysqli_connect($hostName, $dbuser, $dbPassword, $dbName);
```
### 4️⃣ Start the Project

  • Place the project folder inside htdocs (XAMPP).

  • Run Apache & MySQL from XAMPP Control Panel.

  •Visit in browser:
```bash
http://localhost/ResellMe
```
----
## 📂 Project Structure
```bash
ResellMe/
│── database.php           # Database connection
│── generate_qr.php        # QR Code generation
│── phpqrcode/             # QR Code library
│── uploads/               # PDF ticket uploads
│── sql/                   # Database schema
│── index.php              # Homepage
│── admin/                 # Admin dashboard
│── user/                  # User pages
```

---
## 👨‍💻 Usage

 ▼ Users:

  • Register, login, upload tickets.

  • Buy tickets using QR validation.

 ▼  Admins:

  • Approve or reject tickets.

  • Manage transactions.

---
## 🤝 Contributing

Contributions are welcome! 🎉
To contribute:

  1.Fork the repo.

  2.Create a feature branch (git checkout -b feature-name).

  3.Commit changes (git commit -m 'Add feature').

  4.Push to branch (git push origin feature-name).

  5.Open a Pull Request.

---
## 📜 License
This project is for educational and development purposes. Feel free to build upon it for learning or demonstration purposes.
GIVE ME IN A CORRECT OPTIMISED WAY CONTAINING ALL ELEMENTYS
