# Employee Management System - Backend

REST API built with Laravel for Employee Management System.

## API Base URL

https://employee-management-backend-production-dc04.up.railway.app

---

## Features

- User Registration
- User Login
- Update Profile
- Change Password
- Employee CRUD
- REST API
- MySQL Database

---

## Tech Stack

- Laravel
- PHP
- MySQL
- Railway

---

## Installation

```bash
git clone https://github.com/amitpal9755249784-byte/employee-management-backend.git

cd employee-management-backend

composer install

php artisan migrate

php artisan serve
```

---

## API Routes

| Method | Endpoint | Description |
|---------|----------|-------------|
| POST | /api/register | Register User |
| POST | /api/login | Login User |
| PUT | /api/profile/{id} | Update Profile |
| PUT | /api/change-password/{id} | Change Password |
| GET | /api/employees | Get Employees |
| POST | /api/employees | Add Employee |
| PUT | /api/employees/{id} | Update Employee |
| DELETE | /api/employees/{id} | Delete Employee |

---

## Author

Amit Pal
