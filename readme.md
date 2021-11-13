# Shipping Cost Calculator

This project defines the shipping cost calculator sample project to demonstrate the best practices for the SOLID principles.

## Problem Statement

Create a shipping cost calculator for the following companies

- Fedex
- DHL
- Pathao [Later]

**Fedex Logic**
Shipping cost is `(volume * 3 + weight * 1.5)`

**DHL Logic**
Shipping cost is `(weight * 2.3)`

## UML

| Shipping Cost Calculator  |
| ----------- |
| + shippingCost      |
| - calculate   |

| Shipping Cost Interface  |
| ----------- |
| - calculate   |

## Twist in the Problem Statement

There had been a new competitor in the market. Pathao is in the market.

**Pathao Logic**
Shipping cost is `(inside Dhaka 100 and Outside Dhaka 150)`



## Another Twist in the Problem Statement

Few individuals tried to ship a furniture inside dhaka and now Pathao went bankrupt.

**New Pathao Logic**
Shipping cost if weight is under 5kg is `(inside Dhaka 100 and Outside Dhaka 150)`

## Thank you for reading. End of Story