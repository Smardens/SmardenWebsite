---
ID: 139
post_title: Developer Guidelines
author: xinyichen
post_excerpt: ""
layout: page
permalink: >
  https://smardens.com/developer-guidelines/
published: true
post_date: 2018-04-18 20:24:14
---
<pre>======================================
RESILIENT SMART GARDEN DEVELOPER GUIDE
Version 0.1: 04/18/2018 by Smardens
======================================
=======
PROJECT
=======
The Resilient Smart Garden Project aims to build a user-friendly system to monitor crops and maximize irrigation performance,
combining principles in both efficiency and permaculture.  
&nbsp;
========
FEATURES
========
- Collecting plant data through embedded sensors(humidity, temperature, UV, moisture).
- Solar-powered Arduino and wireless sensors.
- Automatic watering system utilizing drip irrigation.
- Manually enter plant growth and harvest data.
&nbsp;
============
INSTALLATION
============
Hardware wiring and installation is detailed in the <a href="https://smardens.com/user-documentation/">User Documentation</a> under the Materials and Installation section.
	
Software:
 - <a href="https://www.arduino.cc/en/Main/Software">Arduino IDE</a>
   You will also need to install the Arduino SAM Boards (32-bit ARM Cortex-M3) version 1.6.11
   Tools > Board > Boards Manager

Online Registration is detailed in the <a href="https://smardens.com/user-documentation/">User Documentation</a> under the Online registration sections.
&nbsp;
==========
COMPONENTS
==========
The Resilient Smart Garden project implements all the components below:

Hardware
 - Arduino Due, Electrical Components(Resistors, Diodes, capacitors, solar panels, sensors, water solenoid valve, WiFi module, transistors)
   Detailed hardware wiring and installation is located in User Guidelines under Materials and Installation.
Software
 - <a href="https://www.arduino.cc/en/Main/Software">Arduino IDE</a>
   Used to program and deploy software to the Arduino Due and wireless sensors.
 - <a href="https://iot-playground.com/build">EasyIoT Cloud</a>
   Used to post sensor data to a cloud server which we can then use our login portal to grab posted data.
Languages
 - Arduino | used to develop and program for the Arduino Due
 - PHP | utilized by Wordpress and our Login Portal
 - HTML, CSS, JavaScript | utilized by our Wordpress site for formatting and design of our webpage 
&nbsp;
==========
CONTRIBUTE
==========
Our most recent Arduino Software is located at our GitHub:
<a href="https://github.com/Smardens">Smardens</a>
&nbsp;
=======
SUPPORT
=======
Please visit FAQ or send us an email if you have any questions, comments, or concerns.</pre>