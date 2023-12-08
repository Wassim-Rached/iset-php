// Create a navigation bar element
const nav = document.createElement("nav");

// Create a list element to hold the navigation items
const navList = document.createElement("ul");

// Create a div element with "Wassim"
const wassimDiv = document.createElement("div");
wassimDiv.setAttribute("id", "logo");
wassimDiv.textContent = "Wassim";

// Create a link to the home page and append the div to it
const wassimLink = document.createElement("a");
wassimLink.href = "/";
wassimLink.appendChild(wassimDiv);

// Append the link to the document body
nav.appendChild(wassimLink);

// Create the navigation items and append them to the list
const homeNavItem = document.createElement("li");
const homeNavLink = document.createElement("a");
homeNavLink.href = "Editeurs";
homeNavLink.textContent = "Editeurs";
homeNavItem.appendChild(homeNavLink);
navList.appendChild(homeNavItem);

const aboutNavItem = document.createElement("li");
const aboutNavLink = document.createElement("a");
aboutNavLink.href = "/Livres";
aboutNavLink.textContent = "Livres";
aboutNavItem.appendChild(aboutNavLink);
navList.appendChild(aboutNavItem);

// const contactNavItem = document.createElement("li");
// const contactNavLink = document.createElement("a");
// contactNavLink.href = "/contact";
// contactNavLink.textContent = "Contact";
// contactNavItem.appendChild(contactNavLink);
// navList.appendChild(contactNavItem);

// Append the list to the navigation bar
nav.appendChild(navList);

// Append the navigation bar to the beginning of the document body
document.body.insertBefore(nav, document.body.firstChild);
