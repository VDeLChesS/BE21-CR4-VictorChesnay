# 🌡️ TempUnitConverter

## 📝 Description

The **TempUnitConverter** is a simple PHP web application that allows users to convert temperature values between three units: **Celsius**, **Fahrenheit**, and **Kelvin**. Users can input a temperature value, select the input unit, and choose the desired output unit. The program performs the conversion and displays the result, along with a descriptive message based on the temperature's range.

---

## 🚀 Features

- Convert between **Celsius**, **Fahrenheit**, and **Kelvin**.
- User-friendly form interface with Bootstrap styling.
- Dynamic messages and optional image representation for temperature ranges (e.g., "Very Cold," "Pleasant").
- Includes validation for input values and unit selection.

---

## 🖥️ Installation

1. **Clone or Download the Project**:
   ```bash
   git clone https://github.com/your-repo/tempunitconverter.git
   ```

## 🧰 Technologies Used

- **PHP**: For backend calculations.
- **HTML5**: For creating the structure of the application.
- **CSS** (via **SCSS**): For styling the interface.
- **Bootstrap 5**: For responsive and visually appealing UI components.

---

## 🌟 How It Works

1. The user inputs a **temperature value** and selects its **current unit** (Celsius, Fahrenheit, or Kelvin).  
2. The user chooses the desired **unit to convert to**.  
3. Upon form submission:  
   - The data is sent to the server via the `POST` method.  
   - The PHP backend processes the data using temperature conversion functions:  
     - `fahrenheitToCelsius()`  
     - `celsiusToKelvin()`  
     - `kelvinToFahrenheit()`  
     *(and others)*.  
4. The converted temperature is displayed on the page, accompanied by a **descriptive message** (e.g., "Very Cold," "Hot").

---

## 🛠️ Key Notes

- Ensure that your **PHP environment** is correctly configured before running the application.
- The `images` folder should contain images for descriptive messages:  
  - Examples: `very_cold_image.jpg`, `hot_image.jpg`.

---

## 📜 License

This project is licensed for **personal and educational purposes**. Contributions and enhancements are always welcome!

---

🌡️ **Enjoy seamless temperature conversions!**
