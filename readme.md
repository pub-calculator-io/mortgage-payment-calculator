# Mortgage Payment Calculator WordPress Widget by [Calculator.iO](https://www.calculator.io/ "Calculator.iO Homepage")

Free mortgage payment calculator helps assess possibilities for paying off a mortgage sooner, such as additional payments, bi-weekly payments, or paying off the loan entirely.

![Mortgage Payment Calculator Input Form](/assets/images/screenshot-1.png "Mortgage Payment Calculator Input Form")
![Mortgage Payment Calculator Calculation Results](/assets/images/screenshot-2.png "Mortgage Payment Calculator Calculation Results")

## Installation

1. [Download](https://github.com/pub-calculator-io/age-calculator/archive/refs/heads/master.zip) the ZIP file of this repository.
2. Upload the /mortgage-payment-calculator-master/ folder to the /wp-content/plugins/ directory.
3. Activate the [Mortgage Payment Calculator](https://www.calculator.io/mortgage-payment-calculator/ "Mortgage Payment Calculator Homepage") plugin through the "Plugins" menu in WordPress.

## Usage
* Add the shortcode `[ci_mortgage_payment_calculator]` to your page or post and configure default mortgage parameters.
* If you are using widgets, just add the Mortgage Payment Calculator to the sidebar through the `Appearance -> Widgets -> Mortgage Payment Calculator` menu in WordPress.
* Add the following code: `<?php display_ci_mortgage_payment_calculator(); ?>` to your template where you would like the Mortgage Payment Calculator to appear.

## Libraries in Use
1. https://mathjs.org/
2. https://katex.org/
3. https://github.com/aFarkas/lazysizes
4. https://github.com/RobinHerbots/Inputmask
5. https://air-datepicker.com/
6. https://www.chartjs.org/