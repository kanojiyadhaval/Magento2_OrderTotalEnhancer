# README #


### What is this repository for? ###

A module which when an order is fully paid stores the order ID and the paid total sum multiplied by a decimal factor.

The paid total sum will be multiplied by the decimal factor
Values and order IDs are logged in a database table
Admin page to enable and disable the function
Admin page to set the decimal factor

Built Version : Magento 2.2.4

### How do I get set up? ###

1) Clone repository
2) Copy Module folder into /app/code folder
3) Navigate to magento 2 root via Shell. run following command 

a) php bin\magento setup:upgrade

b) php bin\magento setup:static-content:deploy

c) clear the Magento cache from the Magento admin panel

