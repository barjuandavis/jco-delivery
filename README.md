# JCo Delivery Website Clone using Wordpress and Vagrant (VCCW)

## Authors

- Barjuan Davis Penthalion (00000023971)
- Nadya Felim Bachtiar ()

## Requirements
1. Vagrant (https://www.vagrantup.com/downloads.html)
2. VirtualBox (https://www.virtualbox.org/)

## Installation

1. Pull this repository by typing `git clone https://github.com/cokpsz/jco-delivery.git`.
2. Change the directory into the project folder using `cd jco-delivery`.
3. **IMPORTANT:** If you are using Windows, please update your hosts file (usually located at `C:\Windows\System32\drivers\etc`) and add `192.168.33.10  vccw.test`.
4. Do `vagrant up`.
5. Visit `vccw.test/wp-admin` at your browser. Administrator username is `admin` and the default password is `admin`.
6. Open the Installed Plugins Section at **Plugins &rarr; Installed Plugins.**
7. Activate the following plugins **in correct order**:
   1. All-in-One WP Migration
   2. Contact Form 7
   3. Elementor
   4. Elementor Google Map Extended
   5. WooCommerce
   6. Profile Builder Pro
   7. Profile Builder - WooCommerce Sync Add-on
   8. User Menus
8. Open All-in-One WP Migration at Wordpress Admin Dashboard and choose "Import".
9. Import `backup.wpress` file that is located at `/jco-delivery/` folder. This will import all assets of the site. If there is a warning that says about you want to overwrite your website, choose **proceed**.
10. You will be prompted to login again. Use `admin` as Username and `123456` as Password.
11. That was it! Now you can explore the site or head back to `vccw.test/wp-admin` for later configurations. Enjoy!

*Note: These steps are not tested in other operating systems and only made for Windows. If there are several steps that are listed here that's irrelevant to your operating system of choice, you may want to lookup for similar steps.*
