"use strict"

$(document).ready(function () {
    $.ajax({
    url: $("#path").val() + '/getallcategory',
    success: function (data) {
          data=JSON.parse(data);

          console.log(data);

         
        
    //       <ul class="sub-menu">
    //       <li><a href="#">Bags & Cases</a></li>
    //       <li><a href="#">Binoculars & Scopes</a></li>
    //       <li><a href="#">Digital Cameras</a></li>
    //       <li><a href="#">Film Photography</a></li>
    //       <li><a href="#">Lighting & Studio</a></li>
    //   </ul>

    
          for(var i=0;i<data.length;i++){

            let li = document.createElement("li");
            li.className =  "cat-item has-children";
            let li_a = document.createElement("a");
            let category_menu = $(".category-menu");

            li_a.append(data[i].name);
            li_a.setAttribute("c_id",data[i].id);
            li.append(li_a);
            category_menu.append(li);



             
          }
         
       }
    });
});