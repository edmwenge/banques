const toggle = document.querySelector(".toggleIcon"),
      menu_sidebar=document.querySelector(".side-bar"),
      text =document.querySelectorAll(".text");
      icon = document.querySelector(".icon");
      dateContainer = document.querySelector(".date");
      dateElement= document.createElement("span");
      dateTime=new Date();
    //   links = document.querySelectorAll("a");  
let filter = document.querySelector(".filter-text");    
 
toggle.addEventListener("click",()=>{
    
    
    for (let index = 0; index < text.length; index++) {
        const element = text[index];
        element.classList.toggle("hidden-text")
        
    }
    menu_sidebar.classList.toggle("close");
    toggle.classList.toggle("closedIcon");
    icon.classList.toggle("fa-angle-right");  
})


// Addimg date and time in the top bar /date element 

dateElement.innerHTML=dateTime.getHours() + ":"+ dateTime.getMinutes()+ 
":"+dateTime.getSeconds();
dateContainer.appendChild(dateElement);

// Stopping links default

// links.forEach(link => {
//     link.addEventListener("click", (event)=>{
//         // event.preventDefault();
//         // console.log(event);
//     })
// });

// filter  drop down
filter.addEventListener("click",()=>{
    console.log("hello");
})
