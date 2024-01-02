const contact_us = document.getElementById("contactus-form");
const contact_name = document.getElementById("contact_name");
const contact_email = document.getElementById("contact_email");
const contact_phone = document.getElementById("contact_phone");
const contact_location = document.getElementById("contact_location");
const contact_message = document.getElementById("contact_message");

const contact_name_Error = document.getElementById("contact_name-error");
const contact_email_Error = document.getElementById("contact_email-error");
const contact_phone_Error = document.getElementById("contact_phone-error");
const contact_location_Error = document.getElementById("contact_location-error");
const contact_message_Error = document.getElementById("contact_message-error");

function applyerName() {
      let name = contact_name.value.trim();
          if (name === "") {
            contact_name_Error.innerHTML = "Please enter your Name";
          return false;
          } else if (name.length <= 3) {
            contact_name_Error.innerHTML = "Name should contain at least three Characters";
          return false;
          } else if (!/^[a-zA-Z\s]+$/.test(name)) {
            contact_name_Error.innerHTML = "Name should contain only Letters";
          valid = false;
          } else {
            contact_name_Error.innerHTML = "";
          return true;
          }
    }

    function applyerEmail() {
      let email = contact_email.value.trim();
      if (email === "") {
            contact_email_Error.innerHTML = "Please enter your Email";
      return false;
      } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            contact_email_Error.innerHTML = "Please enter a valid Email Address";
      return false;
      } else {
            contact_email_Error.innerHTML = "";
      return true;
      }
    }

    function applyerPhone () {
      let number = contact_phone.value.trim();
         if (number === "") {
            contact_phone_Error.innerHTML = "Please enter your Phone Number";
         return false;
         } else if (isNaN(number) || number.length != 10) {
            contact_phone_Error.innerHTML = "Please enter a valid 10-digit Phone Number";
         return false;
         } else {
             contact_phone_Error.innerHTML = "";
         return true;
         }
     }
     function locationCity() {
      let name = contact_location.value.trim();
      if (name === "") {
        contact_location_Error.innerHTML = "Please enter your Location or City";
        return false;
      } else {
        contact_location_Error.innerHTML = ""; 
        return true;
      }
    }
    function Message() {
      let name = contact_message.value.trim();
      if (name === "") {
            contact_message_Error.innerHTML = "Please enter Message";
        return false;
      } else {
            contact_message_Error.innerHTML = ""; 
        return true;
      }
    }
    

     contact_name.addEventListener("blur", applyerName);
      contact_email.addEventListener("blur", applyerEmail);
      contact_phone.addEventListener("blur", applyerPhone);
      contact_location.addEventListener("blur", locationCity);
      contact_message.addEventListener("blur", Message);

      if (contact_us) {
            contact_us.addEventListener("submit", function (event) {
             event.preventDefault();
 
             let valid = true;
             
                if (!applyerName()) {
                   valid = false;
                 }
                 if (!applyerEmail()) {
                   valid = false;
                 }
                 if (!applyerPhone()) {
                   valid = false;
                 }
                 if (!locationCity()) {
                  valid = false;
                }
                if (!Message()) {
                  valid = false;
                }
 
                 if(valid) {
                   const xhr = new XMLHttpRequest();
                   xhr.open('POST', 'assets/server-side/contact-form.php', true);
                   xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                   xhr.onload = function () {
                         if (xhr.status === 200) {
                               displayPopupMessage("Submitted successfully!", "success");
                       } else {
                         console.error('Error sending form data: ' + xhr.statusText);
                   }
                   };
                   xhr.onerror = function () {
                         console.error('Network error');
                   };
                   const formData = new FormData(contact_us);
                   xhr.send(new URLSearchParams(formData).toString());
                   contact_us.reset();
                 }
             });
       }