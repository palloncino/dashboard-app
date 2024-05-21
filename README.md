### Start server

```bash
php artisan serve
```
> INFO  Server running on [http://127.0.0.1:8000].

---

## Application Requirements

### General Overview
The application is a dashboard app designed for internal use by a company to manage users and devices. It will have a clean, intuitive user interface, built using the Laravel framework, and will incorporate a template from ThemeForest.

### Functional Requirements

#### 1. User Management
- **List Users**: Display a table of all users with the following details:
  - ID
  - Username
  - First Name
  - Last Name
  - Company Name
  - Email
  - Role
  - Created At
  - Updated At
- **Add User**: Ability to add new users to the system.
- **Edit User**: Ability to edit existing user details.
- **Delete User**: Ability to delete a user from the system.

#### 2. Device Management
- **List Devices**: Display a table of all devices with relevant details.
- **Add Device**: Ability to add new devices to the system.
- **Edit Device**: Ability to edit existing device details.
- **Delete Device**: Ability to delete a device from the system.

### Non-Functional Requirements

#### 1. Security
- User authentication and authorization:
  - Only authenticated users can access the dashboard.
  - Role-based access control (e.g., admin, user) to restrict certain actions.
  
#### 2. Performance
- Optimize for quick data retrieval and display.
- Ensure smooth navigation between different sections of the app.

#### 3. Usability
- Responsive design to ensure usability across different devices and screen sizes.
- Intuitive UI design for ease of use by non-technical staff.

### UI Requirements

#### 1. Dashboard
- **Overview Page**: Display key metrics and quick links to user and device management sections.
  
#### 2. User Management UI
- **Users List Page**:
  - Table displaying user details.
  - Buttons to add, edit, and delete users.
- **User Form Page**:
  - Form fields for entering/editing user information.
  
#### 3. Device Management UI
- **Devices List Page**:
  - Table displaying device details.
  - Buttons to add, edit, and delete devices.
- **Device Form Page**:
  - Form fields for entering/editing device information.

### Development Setup

#### 1. Directory Structure
- `app/Http/Controllers`: Contains the controllers for handling HTTP requests.
- `app/Models`: Contains the Eloquent models representing the database tables.
- `resources/views`: Contains the Blade templates for the UI.
- `routes/web.php`: Defines the web routes for the application.
- `database/migrations`: Contains migration files for setting up database tables.
- `database/factories`: Contains factory files for generating test data.

#### 2. Database
- **Tables**: 
  - `users`: Stores user details.
  - `devices`: Stores device details.

### Example Data Structure

#### User Object
```json
{
  "id": "2",
  "username": "joedoe",
  "firstName": "Joe",
  "lastName": "Pasta",
  "companyName": "sermixer",
  "email": "joe@gmail.com",
  "role": "admin",
  "password": "$2a$12$Og99C2\/gajZTSkLJ7c78Fuad9ooEMrzP.UlUHVgL1nQi3FhQjaXwu",
  "createdAt": "2024-05-14 07:32:23",
  "updatedAt": "2024-05-14 10:31:59"
}
```

### Project Timeline
- **Week 1**: Set up Laravel framework and integrate the theme.
- **Week 2**: Implement user management functionality.
- **Week 3**: Implement device management functionality.
- **Week 4**: Testing, optimization, and final adjustments.

---

This outline should serve as a comprehensive guide for what the client is expecting in terms of UI and functionality for the dashboard application. You can save this in a file (e.g., `requirements.md`) for easy reference.