# JCo Delivery Website Clone using Wordpress and Vagrant (VCCW)

## Authors

- Barjuan Davis Penthalion (00000023971)
- Nadya Felim Bachtiar (00000019602)

## Requirements
1. Vagrant (https://www.vagrantup.com/downloads.html)
2. VirtualBox (https://www.virtualbox.org/)

## Installation

1. Clone this repository by using `git clone https://github.com/cokpsz/jco-delivery.git`.
2. Change the directory into the project folder using `cd jco-delivery`.
3. **OPTIONAL:** You may need to do `vagrant plugin install vagrant-hostsupdater`.
   
   **IMPORTANT:** If you are using Windows, please update your `hosts` file manually (usually located at `C:\Windows\System32\drivers\etc`) and add `192.168.33.10  vccw.test`by running Notepad as Administrator then opening the `hosts` file.
   
4. Do `vagrant up`.
5. Visit `vccw.test/wp-admin` at your browser. Administrator username is `admin` and the default password is `admin`.
6. Open the Installed Plugins Section at **Plugins &rarr; Installed Plugins** and activate All-in-One WP Migration.
7. Open All-in-One WP Migration at Wordpress Admin Dashboard and choose "Import".
8. Import `backup.wpress` file that is located at `/jco-delivery/` folder. This will import all assets of the site. If there is a warning that says about you want to overwrite your website, choose **proceed**.
9. You will be prompted to login again. Use `admin` as Username and `123456` as Password.
10. That was it! Now you can explore the site or head back to `vccw.test/wp-admin` for later configurations. Enjoy!

*Note: These steps are not tested in other operating systems and only made for Windows. If there are several steps that are listed here that's irrelevant to your operating system of choice, you may want to lookup for similar steps.*
