Full project report : [final report system.pdf](https://github.com/user-attachments/files/19124923/final.report.system.pdf)
# 🛒🛍️ eShop: A Full-Stack E-Commerce Platform

*A complete, dynamic e-commerce website built from the ground up using the Laravel MVC framework. This project features a robust MySQL backend, secure payment processing with Stripe, and real-time notifications via Twilio.*

---

## 1. Project Overview

"eShop" is a comprehensive digital commerce solution designed to provide a seamless and secure shopping experience. The platform supports a full range of e-commerce functionalities, from product catalog management and user authentication to order processing and financial tracking.

The system is built on a **Three-Tier Architecture** and features a dual-panel design, providing a feature-rich administrative backend for store owners and an intuitive, responsive storefront for customers.

## 2. Tech Stack

| Category | Technologies |
|---|---|
| **Backend Framework** | PHP, Laravel (MVC) |
| **Database** | MySQL |
| **Frontend** | HTML5, CSS3, JavaScript, Bootstrap 5 |
| **APIs & Services** | Stripe (Payment Gateway), Twilio (SMS Notifications), Mailtrap (Email Testing) |
| **Development Environment** | XAMPP, Composer |

## 3. Key Features

The platform is divided into two main panels, each with a distinct set of features:

### 🔑 Admin Panel: The Control Center
The admin dashboard is the core of the system, designed for complete store management and data-driven decision-making.

- **Real-Time Analytics Dashboard:** At-a-glance view of key performance indicators (KPIs) like Total Revenue, Total Sales, and Daily Sales.
- **Inventory & Product Management:** Admins can add, edit, and delete product listings, manage stock levels, and organize items into categories and sub-categories.
- **Financial Tracking:** A built-in ledger and balance table to monitor all purchases (debits) and sales (credits), providing a clear view of the business's financial health.
- **Order Management:** Track all orders, update their status (e.g., from 'ordered' to 'delivered' or 'cancelled'), and view detailed order information.
- **Customer Feedback:** A dedicated section to review and respond to customer queries and feedback submitted through the contact form.

![image](https://github.com/user-attachments/assets/e334f48e-3c47-40b1-9579-91a0c08cb362)


 <!-- ### TODO: UPDATE THIS LINK (from your PDF's Figure 3.1) ### -->

### 🧑‍💻 User Panel: The Customer Experience
The user-facing side is designed to be intuitive, responsive, and secure.

- **Seamless Shopping Journey:** Users can browse featured products, search by category or name, view product details, add items to a wishlist or cart, and sort/filter products.
- **Secure Checkout & Payment:** A multi-step checkout process with two payment options: Cash on Delivery and secure credit/debit card payments processed by **Stripe**.
- **Personalized Dashboard:** Registered users have their own dashboard to view their total spending, track current and past orders, and manage their personal information.
- **Order Confirmation:** Upon successful order placement, users receive an immediate confirmation SMS via **Twilio** and a detailed order email.
- **Reviews & Ratings:** Customers can write reviews and leave ratings on products they have purchased, fostering a community of trust.
![image](https://github.com/user-attachments/assets/e90793eb-d61e-4c49-8bc7-a9355bf24740)
 <!-- ### TODO: UPDATE THIS LINK (from your PDF's Figure 4.2.2) ### -->

## 4. Database Design

The backbone of eShop is a well-structured and normalized **MySQL database**. The schema was carefully designed to ensure data integrity, minimize redundancy, and support all the application's features efficiently. The detailed ER Diagram below illustrates the tables and their relationships.
![image](https://github.com/user-attachments/assets/6f7dfe1c-3c5f-42bc-996c-367a7782bd4e)
 <!-- ### TODO: UPDATE THIS LINK (from your PDF's Figure 4.1) ### -->

## 5. How to Set Up and Run This Project

### Prerequisites
- [XAMPP](https://www.apachefriends.org/index.html) (or any other Apache/MySQL/PHP server stack)
- [Composer](https://getcomposer.org/)
- [Git](https://git-scm.com/downloads/)

### Setup Instructions

1.  **Clone the Repository:**
    ```bash
    git clone https://github.com/shafiatunnurshimu23/System_Project.git
    cd System_Project
    ```

2.  **Install PHP Dependencies:**
    ```bash
    composer install
    ```

3.  **Setup Environment File:**
    - Rename the `.env.example` file to `.env`.
    - Open the `.env` file in a text editor.

4.  **Configure the Database:**
    - Start the Apache and MySQL services in your XAMPP control panel.
    - Go to `http://localhost/phpmyadmin` and create a new, empty database (e.g., `eshop_db`).
    - In your `.env` file, update the database connection details:
      ```env
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=eshop_db
      DB_USERNAME=root
      DB_PASSWORD=
      ```

5.  **Run Database Migrations:**
    This command will create all the necessary tables in your database based on the schema defined in the project.
    ```bash
    php artisan migrate
    ```

6.  **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

7.  **Start the Development Server:**
    ```bash
    php artisan serve
    ```
    The application will now be running at `http://127.0.0.1:8000`. You can visit this URL in your browser to see the eShop website.
