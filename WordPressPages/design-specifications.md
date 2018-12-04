---
ID: 27
post_title: Design Specifications
author: Smardens
post_excerpt: ""
layout: page
permalink: >
  https://smardens.com/home/design-specifications/
published: true
post_date: 2018-04-11 20:39:43
---
<h3 style="text-align:left;">Abstract</h3>
<p style="padding-left: 90px;">This is the Design Specification document for the Resilient Smart Garden Project, being developed by Caitlin Rubia, Brian Powell, and Xinyi Chen. The aim of this document is to structure the architecture and elaborate on the design constraints of the garden system.</p>
<p style="padding-left: 90px;">This document contains six diagrams- Architecture Overview Diagram, Entity Relationship Diagram, Activity Diagram, Message Sequence Chart, State Diagram, Class Diagram, to give a top-down view of our system. The document also includes a Site Map and a User Interface Mockups to further detail the specifications of our garden.</p>
<p style="padding-left: 90px;">Each of our diagrams was constructed with our stakeholders in mind, using the stakeholder matrix from our Requirement Specifications Document. We feel that we have executed the design of this system so that implementation will be efficient and effective in promoting permaculture in any garden.</p>

<h3 style="text-align:left;"> Architecture Overview Diagram</h3>
<img src="https://smardens.com/wp-content/uploads/2018/05/Architecture-Overview-1024x428.png" style="width:80%" onclick="whiteClic(this)" alt="Architecture Overview Diagram"/> 
<p>This architecture overview diagram shows the user of the system will be the normal user and the maintenance expert. The system will be using sensors, Arduino board, solar panels, Wi-Fi module and automatic watering function. The system will use crop nutrient database as support system.</p>

<h3 style="text-align:left;">Entity Relationship Diagram</h3>
<img src="https://smardens.com/wp-content/uploads/2018/04/ER-Diagram-938x1024.png" style="width:80%" onclick="whiteClick(this)" alt="Entity Relationship Diagram" /> 
<p>This entity relationship diagram depicts the interactions between all our objects. All objects are strong entities and are represented as green boxes. Weak attributes are represented by double circles, while strong attributes are a single circle. There is only one weak relationship, which is between the Maintenance Expert and the Garden. All other relationships are strong and have recorded data associated to the relationship.</p>

<h3 style="text-align:left;">Activity Diagram</h3>
<img src="https://smardens.com/wp-content/uploads/2018/05/Activity-Diagram-1024x679.png" style="width:80%" onclick="whiteClick(this)" alt="" /> 
<p>This is an activity diagram which shows how our system flows. At first the user will login to their portal and having option to choose between enter new crop data, enter specific environment data, watering schedule, enter crop growth data, sensor self-check, show tips and exit the program. Each input and edit the user makes will be updated in the database. The program will only exit when the user chooses to.</p>

<h3 style="text-align:left;">Message Sequence Chart</h3>
<img src="https://smardens.com/wp-content/uploads/2018/04/Message-Sequence-Diagram-1024x483.png" style="width:80%" onclick="whiteClick(this)" alt="Message Sequence Chart" /> 
<p>This message sequence chart illustrates the flow of interaction between each object. It also shows the action that is being done and the data that should be returned. Within the database if an item is requested the information is retrieved and sent back to the controller. The user will be controlling the controller to keep track of the garden system.</p>

<h3 style="text-align:left;">State Diagram</h3>
<img src="https://smardens.com/wp-content/uploads/2018/04/State-Diagram.png" style="width:80%" onclick="whiteClick(this)" alt="State Diagram" /> 
<p>This is a state diagram for our system. Most of our system is automated and what states it does switch into will be based off of user input. The default state of the system will be waiting for a user decision, from there, based off user input, it can either be used to checks sensors or create/update watering plans. Users will be able to check sensors while an automated watering plan is underway. Once a watering plan is created/updated the watering state will happen automatically.</p>

<h3 style="text-align:left;">Class Diagram</h3>
<img src="https://smardens.com/wp-content/uploads/2018/04/Class-Diagrams-900x1024.png" style="width:80%" onclick="whiteClick(this)" alt="Class Diagram" /> 
<p>This is a class diagram for our system. We will have a user class which uses the garden. We will also have a maintenance expert that maintains both the garden and the embedded system. The garden will contain the plant and the embedded system. The embedded system will keep tracks of solar panel, pump, sensor, sprinkler and Arduino board.</p>

<h3 style="text-align:left;">Site Map</h3>
<img src="https://smardens.com/wp-content/uploads/2018/04/sitemap-1024x453.png" style="width:80%" onclick="whiteClick(this)" alt="Site Map" /> 
<p>This site map is the overview of our website. It shows the sections in orange, while the web pages are in blue. It also shows how the key areas of the pages relate to our project and its process. Because it is a top to down view of the website, the Home Page, Smarden: The Resilient Smart Garden, is at the top while the Portal Page, My Garden Portal is at the bottom because only users are able to access information within the portal.</p>

<h3 style="text-align:left;">Technologies Diagram</h3>
<img src="https://smardens.com/wp-content/uploads/2018/04/Technologies-1-1024x871.png" style="width:80%" onclick="whiteClick(this)" alt="Technologies Diagram" /> 
<p>This technologies diagram shows the interaction between all technologies used. The hardware that will be placed in the garden to receive data from the sensors is the Arduino Due, using the Arduino platform. It sends the information to the database, which will be the MongoDB platform. Then the information in the database is sent to the server, which will be the Site Ground platform.</p>