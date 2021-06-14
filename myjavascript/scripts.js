//hide atau show weather
function function1() {
    var x = document.getElementById("hidediv");
    if(x.style.display === "none"){
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function function2() {
   var o = document.getElementById("hidedivv");
   if(o.style.display === "none"){
      o.style.display = "block";
  } else {
      o.style.display = "none";
  }
}


function function3() {
   var o = document.getElementById("hidedivv");
        o.style.display = "block";
}

function function4() {
   var o = document.getElementById("hidedivv");
        o.style.display = "none";
}

function function5() {
   window.location.replace("logout.php");
}

//header scroll 
//window.onscroll = function() {function2()};

//var header = document.getElementById("headerjs");

//var sticky = header.offsetTop;

//function function2() {
    //if (window.pageYOffset > sticky) {
        //header.classList.add("sticky");
    //} else {
        //header.classList.remove("sticky");
    //}
//}



//weather
//select elements
const iconElement = document.querySelector(".weather-icon");
const tempElement = document.querySelector(".temperature-value p");
const descElement = document.querySelector(".temperature-description p");
const locationElement = document.querySelector(".location p");
const notificationElement = document.querySelector(".notification");
const quoteElement = document.querySelector(".quote p");

// app data
const weather = {};

weather.temperature = {
    unit : "celsius"
}

weather.iconID = {
    unit : "icon"
}

// app consts and vars
const KELVIN = 273;
// API KEY
const key = "9f8f9dae14b741525e85bedc4710164f"

// set position
let latitude = -8.081375569309197;
let longitude = 112.63942372660652;

getWeather(latitude, longitude);

// get weather from api provider
function getWeather(latitude, longitude){
    let api = `https://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${key}`;

    fetch(api)
        .then(function(response){
            let data = response.json();
            return data;
        })
        .then(function(data){
            weather.temperature.value = Math.floor(data.main.temp - KELVIN);
            weather.description = data.weather[0].description;
            weather.iconId = data.weather[0].icon;
            weather.city = "Keboen Nogo Bululawang";
            weather.country = "Malang";
        })
        .then(function(){
            displayWeather();
        });
}

//display weather ke ui
function displayWeather(){
    iconElement.innerHTML = `<img src="image/${weather.iconId}.png">`;
    tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;
    descElement.innerHTML = weather.description;
    locationElement.innerHTML = `${weather.city}, ${weather.country}`;
      //quotes anjay
      if(weather.iconID.unit == "icon" && weather.iconId == "01d"){
         quoteElement.innerHTML = `Cerah Nih Harinya, saatnya beraktivitas`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "01n"){
         quoteElement.innerHTML = `Malam Yang Cerah, enak nih jalan jalan`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "02d"){
         quoteElement.innerHTML = `Cuacanya Agak Adem Nih, enak nih jalan jalan`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "02n"){
         quoteElement.innerHTML = `Cuaca Malamnya Adem Nih, jalan yuk`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "03d"){
         quoteElement.innerHTML = `Cuacanya Dingin Ya, untuk jaga jaga bawa payung OK?`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "03n"){
         quoteElement.innerHTML = `Malam Yang Dingin, untuk jaga jaga bawa payung OK?`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "04d"){
         quoteElement.innerHTML = `Ini Sih Mendung Bro, FIX harus bawa payung sih ini`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "04n"){
         quoteElement.innerHTML = `Malamnya Mendung Bro, FIX harus bawa payung sih ini`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "09d"){
         quoteElement.innerHTML = `Gerimis Cuy, yakin mau keluar?`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "09n"){
         quoteElement.innerHTML = `Lagi Gerimis Nih, yakin mau keluar?`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "10d"){
         quoteElement.innerHTML = `Hujan Nih, baikan netflix & chill aja dah`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "10n"){
         quoteElement.innerHTML = `Hujan Nih, udahlah gausah jalan malamnya`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "11d"){
         quoteElement.innerHTML = `Badai Broooo, dirumah aja ya, bahaya`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "11n"){
         quoteElement.innerHTML = `Badai Broooo, dirumah aja ya, bahaya`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "13d"){
         quoteElement.innerHTML = `Saljuu?, gak akhir dunia nih?`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "13n"){
         quoteElement.innerHTML = `Saljuu?, gak akhir dunia nih?`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "50d"){
         quoteElement.innerHTML = `Jalanannya Berkabut Bro, hati hati kalau jalan`;
         weather.iconID.unit = "quote";
      }
      else if(weather.iconID.unit == "icon" && weather.iconId == "50n"){
         quoteElement.innerHTML = `Jalanannya Berkabut Bro, hati hati kalau jalan`;
         weather.iconID.unit = "quote";
      }
      else{
         quoteElement.innerHTML = `<img src="icons/${weather.iconId}.png"/>`;
         weather.iconID.unit = "icon";
     }
}