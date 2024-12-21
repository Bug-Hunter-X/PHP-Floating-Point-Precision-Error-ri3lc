# PHP Floating Point Precision Error

This repository demonstrates a common error in PHP involving floating-point number comparisons and provides a solution.  Floating-point numbers are not always represented exactly in computers, leading to potential inaccuracies when comparing for equality.

## The Problem
The `bug.php` file shows a function that directly compares two floating-point numbers using the strict equality operator (`===`). This approach often fails due to the inherent limitations of floating-point precision. 

## The Solution
The `bugSolution.php` file addresses this by introducing a small tolerance value (`epsilon`).  Instead of checking for exact equality, it checks if the absolute difference between the two numbers is less than `epsilon`. This method accounts for minor discrepancies caused by floating-point precision.

## How to Run
1. Clone the repository.
2. Run each PHP file using a PHP interpreter (e.g., `php bug.php` and `php bugSolution.php`).