# MyClinicAppointment - The Fastest Way to Consult Your Doctor

This project is a simple PHP landing page designed for MyClinicAppointment, demonstrating the fastest way to consult your doctor.

## Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html): Ensure you have XAMPP installed on your system.

## Installation

1. Clone or download the project files to your local machine.

2. Place the project folder inside the "htdocs" directory of your XAMPP installation. The path to the "htdocs" directory might be something like `C:\xampp\htdocs` on Windows, or `/Applications/XAMPP/htdocs` on macOS.

3. Start the XAMPP Control Panel and launch the Apache service.

4. Open your web browser and navigate to `http://localhost/project-folder-name/`, replacing `project-folder-name` with the name of the directory where you placed the project files.

## PHPMyAdmin

### User Account Setup

1. Open your favorite web browser and type `http://localhost/phpmyadmin/` to locate your phpMyAdmin Page. 

2. Click `User Accounts` tab, then click `Add user account`. Input the corresponding details:
   - User name: `all_system_user`
   - Host name: `%`
   - Password: `admin123`
   - Re-type: `admin123`

3. On the `Global privileges`, click `Check all`, then click `Go`.

### Database Setup

1. Create a database named `all_system_database`.

2. Click `Import` tab, then on the `Choose File` input, select the [all_system_database.sql](all_system_database.sql) and click `Import` on the very bottom part.

## Usage

1. Access the landing page:
   - Open your web browser and go to `http://localhost/project-folder-name/`.
   - You should see the landing page for MyClinicAppointment.

2. To access the `Administrator Page`, click `Login`. Put the corresponding details:
   - Username: `admin`
   - Password: `admin123`

## License

This project is open-source and available under the [MIT License](LICENSE).