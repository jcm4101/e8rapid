# Essential Eight M1 Assessment Tool

This web application provides a simplified assessment tool for evaluating an organization's compliance with the ACSC's Essential Eight Maturity Level 1 (M1) controls. Instead of answering 48 individual control questions, users can answer 10 key questions that provide a rough estimation of control implementation status.

## Features

- 10 key assessment questions
- Bootstrap 5.3 responsive interface
- Generates a CSV output with control compliance status
- Easy to understand yes/no questions
- Instant assessment results

## Technical Stack

- PHP 7.4+
- Bootstrap 5.3
- HTML5
- CSS3

## File Structure

```
/
├── index.php           # Main application page
├── process.php         # Processes form submission and generates CSV
├── css/               # CSS stylesheets
├── js/                # JavaScript files
└── includes/          # PHP includes
    └── controls.php   # Control definitions and mapping logic
```

## Installation

1. Place the files in your web server directory
2. Ensure PHP 7.4 or higher is installed
3. Make sure the web server has write permissions for generating CSV files

## Usage

1. Access the tool through your web browser
2. Answer the 10 assessment questions
3. Submit the form to generate a CSV report of control compliance 