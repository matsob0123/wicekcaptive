* android

* termux

* root - required for redirecting requests with iptables

### Setup

Install packages

`pkg install php tsu`

Turn on hotspot

Set security to None

Rename hotspot as desired

Run redirect.sh as root

`cd android-portals`

`sudo ./redirect.sh`

### Running web server

`cd example`

`php -S 0.0.0.0:8080`
Redo with proper web server

### Acknowledgments

Project forked from [fake-captive-portal-using-android-phone](https://github.com/zahichemaly/fake-captive-portal-using-android-phone)
