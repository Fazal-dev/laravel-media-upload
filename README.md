# File Submission Project

## Overview

This project is a Laravel-based application that allows users to submit a form with various fields, including a file upload. The application validates the input data, handles file uploads securely, and sends the submitted data, along with the file as an attachment, to a specified email address. It uses Mailtrap for email testing.

## Features

-   Form submission with fields: Name, Email, Message, and Media Upload
-   File validation and secure storage
-   Email notifications with file attachments
-   User-friendly error and success messages

## Technologies Used

-   Laravel (PHP Framework)
-   Mailtrap (Email Testing)
-   Bootstrap (Styling)
-   HTML/CSS

## Setup Instructions

### Prerequisites

-   PHP >= 7.3
-   Composer
-   Laravel Installer
-   Mailtrap Account

### Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Fazal-dev/laravel-media-upload.git
    ```

2. **Navigate to the project directory:**

    ```bash
    cd laravel-media-upload
    ```

3. **Install dependencies:**

    ```bash
    composer install
    ```

4. **Copy the environment file:**

    ```bash
    cp .env.example .env
    ```

5. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

6. **Configure Mailtrap:**

    Update your `.env` file with your Mailtrap credentials:

    ```env
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=your_mailtrap_username
    MAIL_PASSWORD=your_mailtrap_password
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=no-reply@example.com
    MAIL_FROM_NAME="${APP_NAME}"
    ```

7. **Run migrations (if applicable):**

    ```bash
    php artisan migrate
    ```

8. **Start the development server:**

    ```bash
    php artisan serve
    ```

    Visit `http://localhost:8000` in your web browser to see the application.

## Usage

1. **Access the Form:**

    Navigate to `http://localhost:8000/form` to view the submission form.

2. **Submit Data:**

    Fill in the Name, Email, and Message fields. Upload a file (image or PDF) and submit the form.

3. **Receive Email:**

    The application will send an email with the form data and the uploaded file as an attachment to the email address specified in the controller.

## File Handling and Security

-   Files are validated for type and size before upload.
-   Uploaded files are stored securely and uniquely named to avoid conflicts.
-   The system uses Laravel's storage functionality to manage file access.

## Troubleshooting

-   Ensure your `.env` file is correctly configured with Mailtrap details.
-   Check file permissions for the storage directory.
-   Review the Laravel logs (`storage/logs/laravel.log`) for any errors.

## Contributing

Feel free to submit issues or pull requests to improve the project. Please follow the standard contribution guidelines and ensure your changes are tested.

## Contact

For questions or further information, please contact:

-   **Fasal Mohamed** - your.email@example.com
