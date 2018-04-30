---
ID: 138
post_title: User Documentation
author: xinyichen
post_excerpt: ""
layout: page
permalink: >
  https://caitlinr1.sgedu.site/user-documentation/
published: true
post_date: 2018-04-18 20:24:14
---
<h2>Purpose</h2>
The Resilient Smart Garden Project aims to build a user-friendly system to monitor crops and maximize irrigation performance, combining principles in both efficiency and permaculture.
<h2>Description</h2>
The Resilient Smart Garden Project, powered by Smardens, is an attempt to promote permaculture and efficiency through the use of drip irrigation and solar energy. This project is designed to be flexible and scalable with the hopes of being able to be implemented in any garden. Following this guide will help you install a system of your own to monitor and irrigate your garden.  We, here at Smardens, thank you for being earth-conscious and environmentally responsible.
<h2>Materials &amp; Installation</h2>
The Resilient Smart Garden project utilizes all of the components below:

Required Hardware:
<ul>
 	<li><a href="https://www.amazon.com/Arduino-Org-A000062-Due/dp/B00A6C3JN2">Arduino Due</a></li>
 	<li>Electrical Components
<ul>
 	<li>Sensors
<ul>
 	<li><a href="http://www.trossenrobotics.com/gravity-analog-capacitive-soil-moisture-sensor-corrosion-resistant.aspx">Moisture Sensor</a></li>
 	<li><a href="http://www.trossenrobotics.com/analog-uv-sensor-v2.aspx">UV Sensor</a></li>
 	<li><a href="http://www.trossenrobotics.com/dht11-temperature-and-humidity-sensor.aspx">Temperature and Humidity Sensor</a></li>
</ul>
</li>
 	<li><a href="https://www.amazon.com/dp/B00OUTP6D8/ref=asc_df_B00OUTP6D85401357/?tag=hyprod-20&amp;creative=395033&amp;creativeASIN=B00OUTP6D8&amp;linkCode=df0&amp;hvadid=198097951144&amp;hvpos=1o4&amp;hvnetw=g&amp;hvrand=2565520337278866827&amp;hvpone=&amp;hvptwo=&amp;hvqmt=&amp;hvdev=c&amp;hvdvcmdl=&amp;hvlocint=&amp;hvlocphy=9031089&amp;hvtargid=pla-318497184453">Water solenoid valve</a></li>
 	<li><a href="https://www.sparkfun.com/products/13678">WiFi module</a></li>
 	<li><a href="https://www.amazon.com/dp/B00CBT8A14/ref=psdc_2236628011_t1_B072MM957M?th=1">Solar panels</a></li>
 	<li>Transistors</li>
 	<li>Resistors</li>
 	<li>Diodes</li>
 	<li>Capacitors</li>
</ul>
</li>
</ul>
There are several different systems that the user will need to build in order to implement the Smart Garden Project:
<h5>Wireless Humidity Sensors</h5>
<table align="center">
<tbody>
<tr>
<th>

[caption id="attachment_187" align="aligncenter" width="300"]<img class="wp-image-187 size-medium" src="https://caitlinr1.sgedu.site/wp-content/uploads/2018/04/placeholder-images-300x156.jpg" alt="" width="300" height="156" /> This image details the circuit created to power the wireless humidity senors with the solar panel.[/caption]</th>
<th>

[caption id="attachment_187" align="aligncenter" width="300"]<img class="wp-image-187 size-medium" src="https://caitlinr1.sgedu.site/wp-content/uploads/2018/04/placeholder-images-300x156.jpg" alt="" width="300" height="156" /> This image shows how our system looks in practice, use as a reference when building yours![/caption]</th>
</tr>
</tbody>
</table>
<h5>UV and Temperature Sensors</h5>
<table align="center">
<tbody>
<tr>
<th>
[caption id="attachment_187" align="aligncenter" width="300"]<img class="wp-image-187 size-medium" src="https://caitlinr1.sgedu.site/wp-content/uploads/2018/04/placeholder-images-300x156.jpg" alt="" width="300" height="156" /> This image depicts the circuit used to connect the Arduino Due to the ultraviolet and temperature sensors located in our garden.[/caption]</th>
<th>
[caption id="attachment_187" align="aligncenter" width="300"]<img class="wp-image-187 size-medium" src="https://caitlinr1.sgedu.site/wp-content/uploads/2018/04/placeholder-images-300x156.jpg" alt="" width="300" height="156" /> This image shows how our system looks in practice, use as a reference when building yours![/caption]</th>
</tr>
</tbody>
</table>
&nbsp;
<h2>Hardware Installation</h2>
The placement of each individual system in your garden should be structured in a way to maximize humidity readings for the plants in your environment. Below are diagrams depicting the optimal placement of each humidity sensor in various garden layouts.

[caption id="attachment_225" align="aligncenter" width="1024"]<img class="wp-image-225 size-large" src="https://caitlinr1.sgedu.site/wp-content/uploads/2018/04/chrome_2018-04-25_23-41-04-1024x330.png" alt="" width="1024" height="330" /> For larger garden plots, a humidity sensor should be located in the middle of at least four(4) plants. While the location of the Due does not matter, the light and tempurature sensors should be located where the garden receives the most sunlight.[/caption]

[caption id="attachment_226" align="aligncenter" width="704"]<img class="wp-image-226 size-full" src="https://caitlinr1.sgedu.site/wp-content/uploads/2018/04/chrome_2018-04-25_23-41-50.png" alt="" width="704" height="228" /> In smaller garden plots, a humidity sensor is most effective between two plants. While the location of the Due does not matter, the light and tempurature sensors should be located where the garden receives the most sunlight.[/caption]
<h2>Online Portal Registration</h2>
<span style="font-size: 16px;">To begin, please register an Account on the </span><a style="font-size: 16px;" href="caitlinr1.sgedu.site">Smarden Website.</a>

<img class="size-large wp-image-166 aligncenter" src="https://caitlinr1.sgedu.site/wp-content/uploads/2018/04/Garden-Log-In-1024x598.png" alt="Garden Login Portal Page" width="1024" height="598" />

Once registered, you can login to the portal using the username and password you've just created.
<h2>Portal Description<img class="size-large wp-image-165 aligncenter" style="font-size: 16px;" src="https://caitlinr1.sgedu.site/wp-content/uploads/2018/04/Garden-Portal-1-1024x921.png" alt="MyGarden Account Page" width="1024" height="921" /></h2>
The online portal will give you a multitude of options when signed in. To begin calibrating your watering schedule you should first input crop data from your garden using the <strong>Input Crop Data</strong> button located in the lower right. After you've input crop data, to further optimize the system it is vital that you continue to input environment data using the <strong>Input Environment Data</strong> button as well. Once both of those data points have been fulfilled, the system will automatically generate a watering schedule for you. From there you can update or change the schedule using the <strong>Watering Schedule</strong> button based on your preferences. If you wish to test your sensors, the <strong>Sensor Check</strong> button will automatically check all sensors.
<h5>Moisture Level Graph</h5>
<p style="padding-left: 30px;">Provides moisture readers from our sensors in the soil.</p>

<h5>Light Level Graph</h5>
<p style="padding-left: 30px;">Provides UV readings from the light sensors placed around your garden.</p>

<h5>Water Table</h5>
<p style="padding-left: 30px;">Displays the types of crops planted in your garden and their unique watering schedule.</p>

<h5>Environmental Data Table</h5>
<p style="padding-left: 30px;">Displays a description of the garden environment (temperature, soil, amount of light) the crops will be growing in.</p>

<h5>Tips</h5>
<p style="padding-left: 30px;">Displays useful information for maintaining crops, tailored to what is planted in your garden.</p>

<h5>Input Crop Data</h5>
<p style="padding-left: 30px;">Functionality: Will provide a popup for you to input or update plant data. Once completed it will finalize all changes and update the system.</p>

<h5>Environment Crop Data</h5>
<p style="padding-left: 30px;">Functionality: Will provide a popup for you to input or update environment/garden data. Once completed it will finalize all changes and update the system.</p>

<h5>Watering Schedule</h5>
<p style="padding-left: 30px;">Functionality: Will provide a popup for you to input or update the water schedule of each plant. Once completed it will finalize all changes and update the system.</p>

<h5>Sensor Check</h5>
<p style="padding-left: 30px;">Functionality: Will run a sensors check to make sure all sensors are working properly and return a message if any sensors are faulty.</p>