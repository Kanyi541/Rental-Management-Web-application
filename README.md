 Rent Management Web Application

This project is a comprehensive Rent Management Web Application designed to streamline tenant registration, rent payment tracking, lease management, and related functionalities. It enables landlords to manage their properties effectively, track rents, and communicate with tenants, while tenants can access their registration details, rent status, and lease information.

Table of Contents

1. [Project Overview](#project-overview)
2. [Technologies Used](#technologies-used)
3. [Installation and Setup](#installation-and-setup)
4. [Features](#features)
5. [Development Timeline](#development-timeline)
6. [Folder Structure](#folder-structure)
7. [API Integration](#api-integration)
8. [Database Schema](#database-schema)
9. [Future Enhancements](#future-enhancements)
10. [License](#license)

 Project Overview

The Rent Management Web Application allows landlords and tenants to interact with various services for rent-related activities. The application is built to be user-friendly and efficient in managing property listings, tenant information, rent payments, and rental agreements.

Key features include:

Tenant Registration**: Collecting detailed information from tenants and generating signed rental agreements.
Rent Payment Tracking**: Allowing tenants to track their payments, and landlords to monitor their income.
Property Listings and Lease Management**: Facilitating landlords in managing their properties and lease renewals.
Automated Reminders**: Sending automated reminders for upcoming rent payments, lease renewals, etc.
Downloadable Documents**: Generating downloadable rental agreements and payment receipts in PDF format.

 Technologies Used

Frontend:

HTML
CSS (for styling)
JavaScript (for dynamic functionalities)
Vue.js (for building reactive components)

Backend:

PHP (for server-side logic)
MySQL (for database management, via Supabase or PlanetScale for cloud databases)

Payment Integration:

Paystack (for online payments)
Mpesa (for mobile payments in Kenya)

Development Tools:

  * XAMPP (for local server testing)
  * Supabase (for database storage)
  * GitHub (for version control)
  * ProHost.com (for production hosting)

 Installation and Setup
 Prerequisites

* PHP 7.4 or higher
* MySQL or Supabase for database storage
* Node.js (for running Vue.js)
* Paystack and Mpesa API keys
 Steps

1. **Clone the repository:**

   ```bash
   git clone [https://github.com/Kanyi541/rent-management-app.git
   cd rent-management-app
   ```

2. **Install dependencies:**
npm install

   {
  "dependencies": {
    "vue": "^3.2.0",
    "axios": "^0.21.1",
    "bootstrap": "^5.1.0",
    "vue-router": "^4.0.0",
    "vuex": "^4.0.0",
    "lodash": "^4.17.21"
  }
}
composer install
{
  "require": {
    "phpmailer/phpmailer": "^6.5",
    "paystack/paystack-php": "^2.0",
    "mpdf/mpdf": "^8.0",
    "vlucas/phpdotenv": "^5.3",
    "guzzlehttp/guzzle": "^7.0",
    "laravel/framework": "^8.0"
  }
}


3. Configure the database:

   * Create a MySQL database and configure the `.env` file to include the database credentials.
   * Alternatively, connect to Supabase and configure the database connection settings.

4. Setup Payment APIs:

   * Integrate Paystack and Mpesa by setting up their API keys in the backend code.

5. Run the application locally:

   * Start your local PHP server (if using XAMPP or another local server).

   ```bash
   php -S localhost:8000
   ```

6. Deploy the application:

   * Deploy the app on ProHost.com or GitHub Pages.


 Features
 Tenant Registration

* Collect tenant details such as name, marital status, number of children, gender, and their agreement to terms and conditions.
* Auto-populate and generate a standard rental agreement contract for the tenant, which is then made available for download in PDF format.


Rent Payment Tracking

* Tenants can track their rent payments for each property.
* Landlords can see a detailed view of tenant payments and outstanding balances.
* Automated reminders for upcoming payments.
 Property Listings & Lease Management

* Landlords can list properties and manage leases for each tenant.
* Lease renewals can be automated or manually processed.
 Payment Integration

* Tenants can make payments through **Paystack** (online) or **Mpesa** (mobile) depending on the chosen payment method.
* A payment receipt is automatically generated in PDF format for both the tenant and landlord.
 Document Generation

* Tenant agreements and payment receipts are available for download in PDF format.
 Development Timeline
Phase 1: Initial Setup and Database Configuration

  Start Date: May 2025
* Set up the local development environment using XAMPP.
* Configure the MySQL database to handle tenant and property data.
* Integrate Supabase for cloud database storage.
Phase 2: Frontend Development

Start Date: May 2025
* Begin building the frontend using HTML, CSS, and JavaScript.
* Implement Vue.js components for dynamic functionality, such as tenant registration and property management.

 Phase 3: Backend Development and API Integration

Start Date: May 2025
* Develop the PHP backend to handle tenant data, property listings, rent tracking, and document generation.
* Integrate Paystack and Mpesa for payment processing.

 Phase 4: Testing and Bug Fixing

Start Date: May 2025
* Test all functionalities including tenant registration, payment tracking, and document generation.
* Debug and ensure all payment gateways work as expected.
* 
Phase 5: Deployment and Final Touches

  End Date: May 2025
* Deploy the application to ProHost.com and finalize hosting configurations.

 Folder Structure

```
/rent-management-app
├── /assets
│   ├── /images        # Images for properties and tenant profiles
│   ├── /styles        # CSS files
│   └── /scripts       # JavaScript files
├── /backend
│   ├── /config        # Database configuration files
│   ├── /controllers   # PHP controller files
│   └── /models        # PHP model files for database interaction
├── /frontend
│   ├── /components    # Vue.js components
│   ├── /views         # HTML templates
│   └── /scripts       # Frontend JavaScript files
├── /database
│   ├── /migrations    # Database migrations
│   └── /seeds         # Sample data for testing
├── .env               # Environment variables
├── index.php          # Main entry point
└── README.md          # This file
```

## API Integration

### Paystack API

Paystack is integrated to handle online payments. The payment form sends a request to the Paystack API, which processes the payment and sends a callback to update the database.

* **Documentation**: [Paystack API Docs](https://paystack.com/docs/)

### Mpesa API

Mpesa is integrated to handle mobile payments for Kenyan tenants. The API connects to Safaricom's M-Pesa API, allowing users to make payments via mobile.

* **Documentation**: [Mpesa API Docs](https://developer.safaricom.co.ke/m-pesa)

## Database Schema

### Tenant Table

| Field           | Type         | Description                        |
| --------------- | ------------ | ---------------------------------- |
| tenant\_id      | INT          | Primary Key, Auto Increment        |
| name            | VARCHAR(255) | Tenant's full name                 |
| marital\_status | VARCHAR(50)  | Tenant's marital status            |
| gender          | VARCHAR(10)  | Tenant's gender                    |
| num\_children   | INT          | Number of children (if applicable) |
| terms\_accepted | BOOLEAN      | Whether tenant accepted terms      |
| created\_at     | DATETIME     | Date of registration               |

### Payment Table

| Field           | Type           | Description                      |
| --------------- | -------------- | -------------------------------- |
| payment\_id     | INT            | Primary Key, Auto Increment      |
| tenant\_id      | INT            | Foreign Key referencing Tenant   |
| amount          | DECIMAL(10, 2) | Amount paid                      |
| payment\_date   | DATETIME       | Date of payment                  |
| payment\_method | VARCHAR(50)    | Payment method (Paystack, Mpesa) |
| receipt\_url    | VARCHAR(255)   | URL to downloadable receipt      |

## Future Enhancements

* **Mobile App**: Develop a mobile app for tenants and landlords to access the platform.
* **Advanced Analytics**: Add features for landlords to track trends in payments, rent collections, etc.
* **AI Integration**: Implement AI to suggest rental price adjustments based on market trends.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

This README provides a complete overview of the Rent Management Web Application, covering installation, features, development phases, and API integrations. Let me know if you need any adjustments!
