# SOLID Principles - O

_**Note: The code in this repository is example code.**_

The 'O' in SOLID is for Open Closed Principle. This is referring to a class being open for extension but closed for modification.

If you're like me when I first heard that I thought "Eh?".

The idea behind this is that a class should be open to extension so you can add/overwrite methods without changing the original class.

Why do we do that?
...

## Open-Closed Violation

In the directory `OpenClosedPrincipleViolation` you will find a single class called `Checkout`. This contains a violation of the Open-Closed principle.

As you can see the method `process()` accepts a basket as an argument (for brevity I haven't done a full checkout process). 

Then it has a final statement which is `makeCashPayment()`. What happens if we need to start accepting PayPal Payments or Stripe Payments? Sure we can add some more methods...

```
 ...
 
 public function makePayPalPayment() {
    // Process logic for making a PayPal payment...
    return "PayPal payment made...";
 }
 
 public function makeStripePayment() {
    // Process logic for making a Stripe payment...
    return "Stripe payment made...";
 }
 
```

Now we need to be able to handle these. How can we best do that? Well it's not as clean and easy as you would hope. Maybe you go down a switch statement with an additional argument passed to `Checkout -> process($basket, $paymentMethod)`

```
public function process($basket, $paymentMethod) {
    // Process the contents of the basket...
    switch ($paymentMethod){
        case 'cash':
            return $this->makeCashPayment();
        case 'paypal':
            return $this->makePayPalPayment();
        case 'stripe':
            return $this->makeStripePayment();
        default:
            return false;
    }
}

...
```

It's messy and it violates the Open-Closed principle. How can we do it better? Read on...

## Open-Closed done correctly

Within the directory `OpenClosedPrinciple` you will find a worked example of how we have left the class open for extension but closed for modification.

The `Checkout` class no longer has to attempt to make just a cash payment. 
It can now have a choice. As we have passed a PaymentMethod interface as an argument it no longer needs to call different methods for cash, PayPal, Stripe etc. it just calls the one method `makePayment()` which each of the payment methods will implement due to them implementing the `PaymentMethodInterface`.

Also this plays nicely into the Single Responsibility Principle as the `Checkout` class shouldn't care how the payments are processed only that it needs to be run.

## Running the tests

To run the unit tests for this basic example use the following. Make sure you are within the project directory.

`./vendor/bin/phpunit --bootstrap vendor/autoload.php app/tests/`

