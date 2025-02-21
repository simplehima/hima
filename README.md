# Dynamic Project 🚀

Welcome to the **Dynamic Project**! This project demonstrates a modern, single-page web application using PHP, HTML, CSS, and Bootstrap. It features two main functionalities:

- **User Details Form** 📇: Collects user information (name, email, job) and allows uploading a profile picture. The data is stored using PHP sessions.
- **Price Calculator** 💰: Calculates the total price with discount and tax based on a given input price.

---

## Table of Contents 📚

- [Features](#features)
- [Folder Structure](#folder-structure)
- [Technologies Used](#technologies-used)
- [Installation & Usage](#installation--usage)
- [License](#license)

---

## Features ✨

- **Responsive Design**: Uses [Bootstrap 5](https://getbootstrap.com/) for a modern and responsive layout.
- **User Details Form**:  
  - Input fields for name, email, and job.  
  - File upload for a profile picture.
- **Price Calculator**:  
  - Automatically applies a 25% discount for prices over 300 EGP.  
  - Adds a 10% tax after discount calculation.
- **Session Management**: Stores user data in PHP sessions.
- **Modular Code Structure**: Organized into separate folders for HTML, CSS, PHP, and uploads for easy maintenance.

---

## Folder Structure 📁

project_folder/
├── html/
│   └── index.html          // Landing page with links to forms
├── css/
│   └── styles.css          // Custom CSS and styling
├── php/
│   ├── user_details.php    // User details form and processing
│   └── price_calculator.php// Price calculator form and processing
└── uploads/                // Stores uploaded images (created automatically)

---

## Technologies Used 💻

- **PHP**: Server-side scripting.
- **HTML5 & CSS3**: Markup and styling.
- **Bootstrap 5**: For responsive and modern UI components.
- **JavaScript**: Included via Bootstrap’s JS Bundle (optional for interactive elements).

---

## Installation & Usage 🔧

1. **Clone the Repository**  
   git clone https://github.com/yourusername/dynamic-project.git

2. **Directory Structure**  
   Make sure the directory structure matches the provided layout. The uploads folder will be created automatically if it doesn't exist.

3. **Run the Project**  
   - Deploy the project to a PHP-enabled web server (like XAMPP, WAMP, or a live server).
   - Navigate to the html/index.html page in your browser to access the landing page.

4. **Usage**  
   - Click **User Details Form** to submit your details and upload an image.  
   - Click **Price Calculator** to calculate the price with discount and tax.

---

## License 📄

This project is open source and available under the MIT License.

---

Happy coding! 💻✨  
Feel free to open an issue or contribute to the project. 🙌
